</div><!-- #content -->
<footer class="site-footer">
    <div class="container">
        <h1>Contactame</h1>
        <div class="row">
            <div class="col-md-6 footer-left">
                <!-- Contactform 7 form -->
                <?php dynamic_sidebar( 'contactform-footer' ); ?>
            </div>
            <div class="col-md-6 footer-right">
                <p>Tambien puedes contactarme de manera manual usuando los
                    siguientes datos de contacto:</p>

                <?php dynamic_sidebar( 'social-media-wa-footer' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php dynamic_sidebar( 'legal-footer' ); ?>
            </div>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>