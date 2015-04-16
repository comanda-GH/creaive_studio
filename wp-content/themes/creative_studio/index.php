<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 24.03.15
 * Time: 16:04
 */ ?>
<?php get_header()?>
<!-- header -->

<main class="s_<?php the_id();?>">
    <?php $title= get_the_title();
    echo '<h1>'.$title.'</h1>';?>

    <h3 class="title"><a class="title" href="<?php the_permalink(); ?>">head</a></h3>
    <div class="wrap">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <li>


            <?php the_content(); ?>
        </li>
    </div>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<!--footer-->
<?php get_footer();?>
