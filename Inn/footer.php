<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inn
 */

?>

<footer class="footer">
    <div class="footer__footer-upper upper-footer">
        <div class="upper-footer__container">
            <div class="upper-footer__wrapper">
                <div class="upper-footer__content">
                    <div class="upper-footer__content-column">
                        <h4><?php the_field('subscribe_title') ?></h4>
                        <p>
                            <?php the_field('subscribe_description') ?>
                        </p>
                        <form action="#">
                            <div class="subscribe__block">
                                <input type="text" placeholder="Ваш E-mail адрес" />
                                <button type="submit">Подписаться</button>
                            </div>
                        </form>
                    </div>
                    <div class="upper-footer__content-column-nav">
                        <?php 
                        wp_nav_menu( [
                            'container'       => null,
                            'theme_location'  => 'footer_nav',
                            'menu_class'      => 'upper-footer__list',
                        ] );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__footer-lower lower-footer">
        <div class="lower-footer__container">
            <div class="lower-footer__wrapper">
                <div class="lower-footer__content">
                    <div class="lower-footer__copyright">
                        Copyright © 2019 | ФД "КерамикЪ"
                    </div>
                    <a href="#"><img class="lower-footer__logo"
                            src=<?php echo get_template_directory_uri() . "/assets/img/mango-logo.svg" ?>
                            alt="Mango" /></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</wrapper>
<?php wp_footer(); ?>
</body>

</html>