<?php

/**
 * The footer template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Style Maven
 *
 */
?>
<footer>
    <section class="footer-widgets">
        <div class="container">
            <div class="row">Footer Widget</div>
        </div>

    </section>
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="copyright-text col-12 col-md-6">
                    <?php echo get_theme_mod('set_copyright', 'not fucking defined asshat'); ?>

                </div>

                <nav class="footer-menu col-12 col-md-6 text-start text-md-end">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'style_maven_footer_menu'
                        )
                    );

                    ?>
                </nav>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>

</html>