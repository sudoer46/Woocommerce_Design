<?php

/**
 * The archive template file
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
                <div class="col-lg-9 col-md-8 col-12">
                    <?php
                    the_archive_title("<h1>", "</h2>");
                    //if there are any posts
                    if (have_posts()) :
                        //load post loop
                        while (have_posts()) : the_post();

                            // do stuff ...>

                            get_template_part('template-parts/content', 'archive');

                        endwhile;
                        the_posts_pagination(array(
                            'prev_next' => true,
                            'prev_text' => "Newer",
                            'next_text' => "Older",
                            'before_page_number' => "Page "
                        ));

                    else :
                    ?>
                        <p>Nothing to display</p>

                    <?php
                    endif;
                    ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
    </main>
</div>

<?php get_footer(); ?>