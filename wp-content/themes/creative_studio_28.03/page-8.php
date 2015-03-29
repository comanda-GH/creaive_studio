<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 28.03.15
 * Time: 10:54
 */
get_header(); ?>

<main class="studio">
    <?php $title= get_the_title();
    echo '<h1>'.$title.'</h1>';?>
    <div class="wrap">

            <?php
            if ( have_posts() ) : // если имеются записи в блоге.
                query_posts('cat=4');   // указываем ID рубрик, которые необходимо вывести.
                while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                    ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <!--Вывод миниатюры-->
                    <?php if ( has_post_thumbnail()): ?><?php the_post_thumbnail(array(100,100), array("class" => "alignleft post_thumbnail"));  ?><?php endif;?>
                    <!--/Вывод миниатюры-->
                    <?php the_content();
                endwhile;  // завершаем цикл.
            endif;
            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
            wp_reset_query();
            ?>
        </div><!-- #content -->
    </div><!-- #primary -->
</main>

<?php get_footer(); ?>