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
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,800;1,500;1,800&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri();?>/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#181c4c">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body <?php body_class(); ?>>



<?php if(false): ?>
        <header id="page_header">
            <a href="#" id="menu_button" >Menu</a>
            <div id="mobile_branding" class=" branding"><a href="<?php echo home_url(); ?>" ><?php echo $blog_name; ?></a></div>
            <nav class="">
                <div class="container">
                <ul>
                    <?php chilly_nav('header_nav'); ?>
                </ul>
                </div>
            </nav>
            <div class="container">
            <div class="header_text">
                <?php if (is_front_page()) : ?>
                <h1><?php echo $title; ?></h1>
                <h5><?php echo $subtitle; ?></h5>
                <div><?php echo $welcome_paragraph; ?></div>
                <?php else: ?>
                    <h1><?php the_title(); ?></h1>
                <?php endif; ?>
            </div>
            </div>

        </header>

      <?php endif; ?>

        <main id="main" >
