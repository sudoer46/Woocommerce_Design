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
                    <h1><?php _e('Page Not Found', 'stylemaven'); ?></h1>
                    <p><?php _e('Unfortunatly, the page you were trying to find does not exist.', 'stylemaven'); ?></p>
                </header>
                <?php the_widget(
                    'WP_Widget_Recent_Posts',
                    array(
                        'title' => __('Take a look at our latest posts', 'stylemaven'),
                        'number' => 3
                    )
                ); ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>