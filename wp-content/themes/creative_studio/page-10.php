<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 16.04.15
 * Time: 23:20
 */ get_header(); ?>

<main class="grafic">
    <?php $title= get_the_title();
    echo '<h1>'.$title.'</h1>';?>
    <div class="wrap">

        <ul class="day">
            <li>Студії Студії Студії Студії</li>
            <li>Понеділок</li>
            <li>Вівторок</li>
            <li>Середа</li>
            <li>Четвер</li>
            <li>П'ятниця</li>
            <li>Субота</li>
            <li>Неділя</li>
        </ul>

        <?php
        query_posts('post_type=grafic');
        if (have_posts()) :?>
           <?php echo "";?>
            <?php
            while (have_posts()) : the_post();?>
        <ul>
            <li>
                        <?php  echo get_post_meta( get_the_ID(), 'select_type', true ); ?>
                        <?php  $hours=get_post_meta( get_the_ID(), 'hours', true ); ?>
                        <?php $val = get_post_meta( get_the_ID(), 'mycheckbox', true );?>
                        <?php $days = array(1,2,3,4,5,6,7);?>
                <?php
                        foreach ($val as $key=>$value)
                        {
                           echo $hours.'|';
                        }
                        ?>
            </li>
        </ul>
            <?php
            endwhile;
            echo "";
        endif;
        wp_reset_query();
        ?>
        <?php
        if ( have_posts() ) : // если имеются записи в блоге.

           // query_posts('cat=16');   // указываем ID рубрик, которые необходимо вывести.
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