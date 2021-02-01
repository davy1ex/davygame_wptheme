<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAVYGAME</title>

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<? wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <div class="banner" style="background-image: url(<?php if(is_front_page(  )): echo get_stylesheet_directory_uri() . '/assets/img/banner.jpg'; endif ?>); background-repeat: no-repeat;
    background-position: center;
    background-size: cover;" >
        <header>
            <div class="wrapper-header">
                <div class="logo"><? bloginfo( 'name' ) ?></div>
                <? wp_nav_menu( [
                    'theme-location' => 'header-menu',
                    'container' => 'div',
                    'menu_class'      => 'nav-menu',
                ] ) ?>                
            </div>
        </header>
    <?php if(is_front_page(  )): ?>
        <div class="banner-desc">
        <div class="date">
            <div class="days"><?php echo get_field('day') ?>.</div>
            <div class="mounth"><?php echo get_field('mounth') ?>.</div>
            <div class="year"><?php echo get_field('year') ?></div>
        </div>

        <div class="event-text">
            <div class="large"><?php the_field('bigger-desc') ?></div>
            <div class="medium"><?php the_field('smaller_desc') ?></div>
        </div>

        <div class="social">
            <div class="social_item"><a href=""><img src="img/vk.svg" alt=""></a></div>
            <div class="social_item"><a href=""><img src="img/inst.png" alt=""></a></div>
            <div class="social_item"><a href=""><img src="img/twitter.png" alt=""></a></div>
        </div>
    </div> 
</div>
<?php endif; ?>
<div id="content" class="site-content">
