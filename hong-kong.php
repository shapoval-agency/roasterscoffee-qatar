<?php

/**
Template Name: Hong-kong Page
 */

if (!defined('ABSPATH')) {
    exit; // Order.
}

get_header(); ?>

<main>

    <!-- Hero Section -->
    <section class="hero location-city" id="hero">
        <div class="container">
            <div class="hero__content" data-aos="fade-up">
                <h1>Hong Kong</h1>
                <p>Coming Soon</p>
                <address class="address">Alexandra House, 18 Chater Road, Central </address>
                <!-- <a href="/" class="hero__list-link hero__list--link--active">Right here</a> -->
            </div>
        </div>
        <div class="hero__bg--image">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/HongKong.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/HongKong.jpg" width="1920" height="1080" fetchpriority="high" alt="images of coffee cup">
            </picture>
        </div>
    </section>

</main>

<?php get_footer();
