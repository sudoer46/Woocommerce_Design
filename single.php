<?php

/**
 * Template for all single posts
 * @package style-maven
 */

get_header();

?>

<div id="primary" class="content-area">
    <div id="main">
        <div class="container">
            <div class="row">
                <?php

                while (have_posts()) : the_post();
                    // do stuff ...

                    get_template_part('template-parts/content', 'single');

                    /**
                     * enabling comments
                     * if one of the conditions are true, comments get displayed
                     * requires that comments.php is in the root of the foulder
                     */
                    if (comments_open() || get_comments_number()) :
                        comments_template('');
                    endif;

                endwhile;

                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>