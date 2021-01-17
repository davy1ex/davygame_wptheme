<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAVYGAME</title>

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="banner" style="background-image: url(<?php if(is_front_page(  )): echo get_stylesheet_directory_uri() . '/assets/img/banner.jpg'; endif ?>)" >
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
<? wp_head() ?>