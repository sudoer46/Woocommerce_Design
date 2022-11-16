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
                ?>



                    <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
                        <header>
                            <h1><?php the_title(); ?></h1>
                            <div class='meta'>
                                <p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
                                    <br />
                                    <?php if (has_category()) : ?>
                                        Categories: <span><?php the_category(' '); ?></span><br />
                                    <?php endif; ?>
                                    <?php if (has_tag()) : ?>
                                        Tags: <span><?php the_tags('', ', '); ?></span><br />
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class='post-thumbnail'>
                                <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('style-maven-blog', array('class' => 'img-fluid'));
                                endif;
                                ?>
                            </div>
                        </header>
                        <div class='content'>
                            <?php the_content(); ?>
                        </div>
                    </article>


                <?php
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