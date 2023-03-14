<?php
/*
Template Name: home
*/

get_header();
?>

<main class="main">
    <div class="main__slider slider">
        <div class="swiper swiper-slider">
            <div class="swiper-wrapper">
                <?php
                  global $post;

                  $myposts = get_posts( [
                  'posts_per_page' => 4,
                  'tag' => 'slider',
                  'post_type' => 'post',
                  ] );

                  foreach( $myposts as $post ){
                  setup_postdata( $post );
							  ?>
                <div class="swiper-slide slide">
                    <div class="slide__wrapper">
                        <div class="slide__content">
                            <h2><?php the_title(); ?></h2>
                            <p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p>
                            <div class="button__wrapper">
                                <a href="<?php the_permalink( $post ); ?>" class="button">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                  wp_reset_postdata();
                  ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="main__container">
        <section class="main__section section section__about-us">
            <div class="section__content">
                <h2><?php the_field('about_us_title') ?></h2>
                <p>
                    <?php the_field('about_us_description') ?>
                </p>
                <a href="<?php the_field('about_us_link')?>" class="button">Подробнее</a>
            </div>
            <img class="section__img" src=<?php the_field('about_us_image') ?> alt="Tree" />
        </section>
    </div>
</main>
<?php get_footer(); ?>