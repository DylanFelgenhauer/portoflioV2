<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Portfolio Web">
    <meta name="keywords" content="Dylan, Felgenhauer, Portfolio, web,web development,projects">
    <meta name="author" content="Felgenhauer Dylan">
    <title>Dylan Felgenhauer - Mon Portfolio</title>
    <link rel="icon" type="image/x-icon" href="/wp-content/themes/portfolio2/img/favicon.ico">

    <link rel="stylesheet" href="/wp-content/themes/portfolio2/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/portfolio2/css/main2.css">

</head>
<body>
<?php
register_nav_menus(
	array(
		'menu-1' => esc_html__( 'Primary', 'https://felgenhauer-dylan.be/' ),
	)
);?>
<header class="header">
    <div id="header-wrapper">
        <nav class="clearfix">
            <div id="logo">
                <h1>
                    <a href="#">
                       <?=get_field('logo') ?>
                    </a>
                </h1>
            </div> <!-- #logo -->

            <div id="primary-menu" class="clearfix">
                <div class="flex__menu">

                    <div class="left-menu split-menu">
		                <?php
		                wp_nav_menu( array(
			                'menu' => 'menuprincipalleft'
		                ) );
		                ?>
                    </div>

                    <div class="right-menu split-menu">
		                <?php
		                wp_nav_menu( array(
			                'menu' => 'menuprincipalright'
		                ) );
		                ?>
                    </div> <!-- .right-nav -->
                </div>

            </div> <!-- #primary-menu -->

        </nav>

    </div>

</header>