<?php
//test
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                <div class="col-lg-9 col-md-8 col-12">

                    <?php
                    //if there are any posts
                    if (have_posts()) :
                        //load post loop
                        while (have_posts()) : the_post();

                            // do stuff ...>

                            get_template_part('template-parts/content');
                        endwhile;
                        the_posts_pagination(array(
                            'prev_next' => true,
                            'prev_text' => esc_html__('Newer', 'style-maven'),
                            'next_text' => esc_html__('Older', 'style-maven'),
                            'before_page_number' => esc_html__('Page', 'style-maven')
                        ));

                    else :
                    ?>
                        <p><?php esc_html_e('Nothing to display', 'style-maven'); ?></p>

                    <?php
                    endif;
                    ?>
                </div>

                <?php get_sidebar(); ?>

            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
