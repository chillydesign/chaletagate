<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <?php $tdu =  get_template_directory_uri(); ?>
        <?php $blog_name =  get_bloginfo('name'); ?>
        <!-- <link href="//www.google-analytics.com" rel="dns-prefetch"> -->
        <meta name="apple-mobile-web-app-title" content="<?php echo $blog_name; ?>">
        <meta name="application-name" content="<?php echo $blog_name; ?>">
        <meta name="theme-color" content="#ffffff">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <!-- <link href="https://fonts.googleapis.com/css?family=Cormorant:700i|Montserrat:300,300i,800,800i" rel="stylesheet"> -->
        <?php wp_head(); ?>


    </head>
    <body <?php body_class(); ?>>


        <header id="page_header">
            <a href="#" id="menu_button" >Menu</a>
            <nav class="container">
                <ul>
                    <?php chilly_nav('header_nav'); ?>
                </ul>
            </nav>

            <div class="header_text">
                <h5>bienvenue au</h5>
                <h1>Chalet Agate</h1>
                <p>Profitez de l’air de la montagne dans cet appartement de 3,5 pièces à Villars-sur-Ollon au coeur des montagnes suisses.</p>
                <p><a href="#" class="button button_white">Réserver</a></p>
            </div>

        </header>

        <main id="main" >
