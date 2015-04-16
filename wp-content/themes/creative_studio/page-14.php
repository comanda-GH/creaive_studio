<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 30.03.15
 * Time: 23:56
 */?>
<?php get_header(); ?>
    <main class="affiche">
        <?php $title= get_the_title();
        echo '<h1>'.$title.'</h1>';?>
        <div class="wrap">
            <?php
            query_posts('cat=14');   // указываем ID рубрик, которые необходимо вывести.
            if ( have_posts() ) : // если имеются записи в блоге.
                while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                    ?>
                    <li>
                        <?php if ( has_post_thumbnail()): ?><?php the_post_thumbnail(); ?><?php endif;?>
                        <?php the_content(); ?>
                    </li>
                <?php endwhile;  // завершаем цикл.
            endif;
            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
            wp_reset_query();
            ?>
            <!--<ul class="slide">
                <li>
                    <img src="../images/slide1.png" alt="slide1" />
                </li>
                <li>
                    <img src="../images/slide2.png" alt="slide2" />
                </li>
                <li>
                    <img src="../images/slide3.png" alt="slide3" />
                </li>
            </ul>
            <ul class="numeric">
                <li>
                    <a><</a>
                </li>
                <li class="num">
                    <a>1</a>
                </li>
                <li class="num active">
                    <a>2</a>
                </li>
                <li class="num">
                    <a>3</a>
                </li>
                <li class="num">
                    <a>4</a>
                </li>
                <li>
                    <a>...</a>
                </li>
                <li>
                    <a>></a>
                </li>
            </ul>-->
        </div>

    </main>

<?php get_footer(); ?>