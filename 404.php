<?php

/**
 * @package Style Maven
 */

get_header();
?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="error-404">
                <header>
                    <h1><?php esc_html_e('Page Not Found', 'stylemaven'); ?></h1>
                    <p><?php esc_html_e('Unfortunatly, the page you were trying to find does not exist.', 'stylemaven'); ?></p>
                </header>
                <?php the_widget(
                    'WP_Widget_Recent_Posts',
                    array(
                        'title' => esc_html__('Take a look at our latest posts', 'stylemaven'),
                        'number' => 3
                    )
                ); ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>