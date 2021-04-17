<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retro e Esporte.">

        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
        <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retro e Esporte."/>
        <meta property="og:url" content="http://bikcraft.com"/>
        <meta property="og:image" content="https://bikcraft.com/img/og-image.png"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <script>document.documentElement.classList.add("js");</script>

        <!-- Início wordpress header -->
        <?php wp_head(); ?>
        <!-- FInal wordpress header -->
    </head> 

    <body>

        <header class="header">
            <div class="container">
                <a href="/bikcraft/" class="grid-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft.svg" alt="Bikcraft">
                </a>
                <nav class="header_menu grid-12">
                <?php
                    $args = array(
                        'menu' => 'principal',
                        'theme_location' => 'menu-principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                ?>
                </nav>
            </div>
        </header>