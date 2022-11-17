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
                    <h1>Page Not Found</h1>
                    <p>Unfortunatly, the page you were trying to find does not exist.</p>
                </header>
                <?php the_widget(
                    'WP_Widget_Recent_Posts',
                    array(
                        'title' => 'Take a look at our latest posts',
                        'number' => 3
                    )
                ); ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>