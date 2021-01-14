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
    <div class="banner" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/img/banner.jpg' ?>)" >
        <header>
            <div class="wrapper-header">
                <div class="logo"><? bloginfo( 'name' ) ?></div>
                <? wp_nav_menu( [
                    'theme-location' => 'header-menu',
                    'container' => 'div',
                    'menu_class'      => 'nav-menu',
                ] ) ?>
                <!-- <div class="nav-menu">
                    <ul>
                    <li>HOME</li>
                    <li>EVENTS</li>
                    <li>SCHEDULE</li>
                    <li>HOME</li>
                    <li>CONTACTS</li>            
                    <li class="btn">SIGN UP</li>
                    </ul> -->
                    <!-- <div class="header_item">HOME</div>
                    <div class="header_item">EVENTS</div>
                    <div class="header_item">SCHEDULE</div>
                    <div class="header_item">HOME</div>
                    <div class="header_item">CONTACTS</div>            
                    <div class="btn">SIGN UP</div> -->
                <!-- </div>  -->
                <!-- <div class="nav-menu">
                    <div class="header_item">HOME</div>
                    <div class="header_item">EVENTS</div>
                    <div class="header_item">SCHEDULE</div>
                    <div class="header_item">HOME</div>
                    <div class="header_item">CONTACTS</div>            
                    <div class="btn">SIGN UP</div>
                </div> -->
            </div>
        </header>
<? wp_head() ?>