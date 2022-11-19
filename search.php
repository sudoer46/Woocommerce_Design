<?php

/**
 * The search template file
 *
 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Style Maven
 *
 */

get_header(); ?>
<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <h1> <?php esc_html_e('Search Results For', 'stylemaven'); ?>: <?php echo get_search_query(); ?></h1>
                <?php
                get_search_form();
                //if there are any posts
                if (have_posts()) :
                    //load post loop
                    while (have_posts()) : the_post();

                        // do stuff ...>


                        get_template_part('template-parts/content', 'search');

                    endwhile;
                    the_posts_pagination(array(
                        'prev_next' => true,
                        'prev_text' => esc_html__('Newer', 'stylemaven'),
                        'next_text' => esc_html__('Older', 'stylemaven'),
                        'before_page_number' => esc_html__('Page', 'stylemaven')
                    ));

                else :
                ?>
                    <p><?php esc_html_e('There are no results for your term', 'stylemaven'); ?></p>

                <?php
                endif;
                ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>