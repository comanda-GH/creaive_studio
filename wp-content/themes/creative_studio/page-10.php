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

        <!--<ul class="day">
            <li>Студії Студії Студії Студії</li>
            <li>Понеділок</li>
            <li>Вівторок</li>
            <li>Середа</li>
            <li>Четвер</li>
            <li>П'ятниця</li>
            <li>Субота</li>
            <li>Неділя</li>
        </ul>-->

        <?php
        query_posts('post_type=grafic');?>
       <?php global $wpdb?>
        <?php echo "<table border=1>";?>
        <?php if (have_posts()) :?>
            <?php echo "<tr><td></td><td>Пн</td><td>Вт</td><td>Ср</td><td>Чт</td><td>Пт</td><td>Сб</td><td>Нд</td></tr>";?>
            <?php echo "";?>
            <?php
            while (have_posts()) : the_post();?>
                <!--<ul>
                    <li>-->
                <?php $myvals=get_post_meta( get_the_ID());?>

                <?php $studii=get_post_meta( get_the_ID(), 'select_type', true ); ?>
                <?php $hours=get_post_meta( get_the_ID(), 'hours', true ); ?>
                <?php $val = get_post_meta( get_the_ID(), 'mycheckbox', true );?>
                <?php $week = array(1,2,3,4,5,6,7);?>
                <?php echo '<tr><td>'.$studii.'</td>'; ?>
<?php foreach ($week as $day)
                    echo '<td></td>';?>
                <?php
//echo 'd'.$day;
                /*echo 'w'.$week[1];
                    $h1 = $wpdb->get_results("SELECT meta_value FROM wp_postmeta WHERE meta_key =1");
                $h2 = $wpdb->get_results("SELECT meta_value FROM wp_postmeta WHERE meta_key =2");
                $h3 = $wpdb->get_results("SELECT meta_value FROM wp_postmeta WHERE meta_key =3");
                $h4 = $wpdb->get_results("SELECT meta_value FROM wp_postmeta WHERE meta_key =4");
             //   var_dump ($h);
                        echo '<td>'.$h1.'</td>';
                return '<td>'.$h2.'</td>';
                echo '<td>'.$h3.'</td>';
                echo '<td>'.$h4.'</td>';
                echo '<td>'.$h5.'</td>';
                echo '<td>'.$h6.'</td>';
                echo '<td>'.$h7.'</td>';*/?>
                <?php
                /*$res=array();
$k=array();

                foreach($myvals as $key=>$vall)
                    if ($key==1or$key==2or$key==3or$key==4or$key==5or$key==6or$key==7 ){
                        //echo 'tt'.$key;
                      echo  $k[]=$key;
                        foreach ($week as $day)
                        foreach ($k as $keys)
                            if ($keys == $day){
                                echo '<td>'.$key.'='.$vall[0].'</td>';
                                break;}
                            else echo "<td>пусто</td> ";*/
               /*{

                   $res[]=$vall[0];

                }*/
                   /* }*/
                /*echo '<td>'.$res[3].'</td>';
                echo '<td>'.$res[4].'</td>';
                echo '<td>'.$res[5].'</td>';
                echo '<td>'.$res[6].'</td>';

                echo "<pre>";
                print_r($res);
                echo "</pre>";*/
                /*    if ($key==1or$key==2or$key==3or$key==4 ){


                                echo '<td>';
                        if ($key == $week[0])echo  $key.'='.$vall[0].'</td>';
                        echo '<td>';
                        if ($key == $week[1])echo  $key.'='.$vall[0].'</td>';

                            else echo "<td>пусто</td> ";}*/
               /* foreach($myvals as $key=>$vall)
                    if ($key==1or$key==2or$key==3or$key==4 ){
                        foreach ($week as $day)
                            if ($key == $day){
                        echo '<td>'.$key.'='.$vall[0].'</td>';
                                break;}
                            else echo "<td>пусто</td> ";
                    }*/?>

                <!--</li>
            </ul>-->
            <?php
            endwhile;?>
            <?php echo '</tr>'?>
            <?php echo "</table>";?>
        <?php  endif;
        wp_reset_query();
        ?>

    </div><!-- #content -->
    </div><!-- #primary -->
</main>

<?php get_footer(); ?>