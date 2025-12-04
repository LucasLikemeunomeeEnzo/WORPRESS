<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="main-header">
    <div class="container-header">
        
        <div class="logo-area">
            <?php 
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
            <div class="site-title">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
        </div>

        <nav class="main-nav">
            <ul class="nav-list">
                <li><a href="#personagens">Personagens</a></li>
                <li><a href="#jogos">Jogos</a></li>
                <li><a href="#shadow">História</a></li>
            </ul>
        </nav>

    </div>
</header>