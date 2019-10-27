<?php get_header(); ?>

<section id="main" class="content-area">
    <h1>Index</h1>
    <?php
    if ( have_posts() ) {

        // Load posts loop.
        while ( have_posts() ) {
            the_post();
            get_template_part('template_parts/content');
        }

    } else {
    }
    ?>
</section>

<?php get_footer() ?>