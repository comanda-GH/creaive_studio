<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 16.04.15
 * Time: 23:20
 */ get_header(); ?>

    <main class="studio">
        <?php $title= get_the_title();
        echo '<h1>'.$title.'</h1>';?>
        <div class="wrap">
            <?php
            if ( have_posts() ) : // если имеются записи в блоге.
                query_posts('cat=16');   // указываем ID рубрик, которые необходимо вывести.
                while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                    ?>

                        
                        <!--Вывод миниатюры-->
                        <?php if ( has_post_thumbnail()): ?><?php the_post_thumbnail(array(231,229), array("class" => "num$post->ID"));  ?><?php endif;?>
                        <!--/Вывод миниатюры-->
                        <?php the_content();?>

                <?php endwhile;  // завершаем цикл.
            endif;
            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
            wp_reset_query();
            ?>

        </div><!-- #content -->
        </div><!-- #primary -->
    </main>

<?php get_footer(); ?>