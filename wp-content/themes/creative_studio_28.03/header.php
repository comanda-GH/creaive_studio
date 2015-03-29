<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 24.03.15
 * Time: 16:06
 */?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="keywords" content="Творча, майстерня,Черкаси">
    <title><?php bloginfo('name'); wp_title();?></title>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="<?php bloginfo('template_url')?>/js/jquery.min.js" ></script>
    <script src="<?php bloginfo('template_url')?>/js/nav.js"></script>
<?php wp_head();?>
</head>

<body class="index">
<section class="header-wrap">
    <header class="fix">
        <h1><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Творча майстерня"></a></h1>
        <li><span>Меню</span></li>
        <?php wp_nav_menu(array('theme_location'=>'menu',
            'menu_class'=>'nav'))?>
    </header>
</section>


