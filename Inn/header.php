<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inn
 */

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
    <title><?php bloginfo( 'name' ); ?> <?php bloginfo( 'description' ); ?></title>
</head>

<body>
    <wrapper class="wrapper">
        <header class="header">
            <div class="header__header-upper upper-header">
                <div class="upper-header__container">
                    <div class="upper-header__left-content">
                        <div class="upper-header__logo-wrapper">
                            <?php echo get_custom_logo(); ?>
                        </div>
                        <div class="upper-header__phone-block phone">
                            <span class="phone__number"><?php the_field('phone_number_text') ?></span>
                            <a class="phone__call" href="tel:<?php the_field('phone_number_call') ?>">Обратный звонок</a>
                        </div>
                    </div>
                    <div class="upper-header__middle-content">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="upper-header__right-content icons">
                        <div class="icons__wrapper">
                            <a class="icons__bookmarks" href="#" data-count="7"><img
                                    src=<?php echo get_template_directory_uri() . "/assets/img/bookmarks.svg" ?>
                                    alt="Bookmarks" />
                            </a>
                            <div class="icons__cart-wrapper">
                                <a class="icons__cart cart" href="#" data-count="9"><img
                                        src=<?php echo get_template_directory_uri() . "/assets/img/cart.svg" ?>
                                        alt="Cart" />
                                </a>
                                <span class="cart__price">15 354 руб.</span>
                            </div>
                            <a class="icons__profile" href="<?php echo wp_login_url( '/' ); ?>"><img
                                    src=<?php echo get_template_directory_uri() . "/assets/img/profile.svg" ?>
                                    alt="Profile" /></a>
                            <div class="upper-header__burger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__header-lower lower-header">
                <div class="lower-header__container">
                    <?php get_search_form(); ?>
                    <nav class="lower-header__nav nav-header">
                        <?php 
                        wp_nav_menu( [
                            'theme_location'  => 'header_nav',
                            'container'       => null,
                            'menu_class'      => 'nav-header__list',
                        ] );?>
                    </nav>
                </div>
            </div>
        </header>