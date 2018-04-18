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
        <link href="https://fonts.googleapis.com/css?family=Cormorant:700i|Montserrat:300,300i,800,800i" rel="stylesheet">
        <?php wp_head(); ?>
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri();?>/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#181c4c">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body <?php body_class(); ?>>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php $header_image = get_field('image'); ?>
            <?php $header_colour = get_field('colour'); ?>
            <?php $welcome_paragraph = get_field('welcome_paragraph'); ?>
            <?php $title = get_field('welcome_title'); ?>
            <?php $subtitle = get_field('welcome_subtitle'); ?>
        <?php endwhile; endif; ?>

        <header id="page_header"  >
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

            <div id="header_image" style="background-image:url(<?php echo $header_image['sizes']['large']; ?>)"></div>
            <div id="header_colour" class="header_colour_<?php echo $header_colour; ?>"></div>
            <div id="header_mask"></div>

        </header>

        <main id="main" >
