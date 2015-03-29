<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 24.03.15
 * Time: 16:04
 */ ?>
<?php get_header()?>
<!-- header -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="box<?php if( $count%3 == 0 ) { echo '-1'; }; $count++; ?>">
        <li>
            <!--Вывод миниатюры-->
            <?php if ( has_post_thumbnail()): ?><?php the_post_thumbnail(array(100,100), array("class" => "alignleft post_thumbnail"));  ?><?php endif;?>
            <!--/Вывод миниатюры-->
            <h3><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_content('Докладніше + реєстрація'); ?>
        </li>
    </div>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<!--footer-->
<?php get_footer();?>
