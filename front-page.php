<?php get_header(); ?>

<section id="main" class="content-area">
    <?php
    if ( have_posts() ) {

        // Load posts loop.
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/content', 'page');
        }

    } else {
    }
    ?>
</section>

<?php get_footer() ?>