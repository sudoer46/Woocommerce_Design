<?php

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

                <?php
                //if there are any posts
                if (have_posts()) :
                    //load post loop
                    while (have_posts()) : the_post();

                        // do stuff ...>
                ?>
                        <article <?php post_class(); ?>>
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="post-thumbnail">
                                <?php
                                //check for thumbnail and render it
                                if (has_post_thumbnail()) :
                                ?>
                                    <a href="<?php the_permalink() ?>">
                                        <?php
                                        the_post_thumbnail('style-maven-blog', array('class' => 'img-fluid'));
                                        ?>
                                    </a>
                                <?php
                                endif;
                                ?>
                            </div>
                            <div class="meta">
                                <p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
                                    <br>
                                    Categories: <span><?php the_category(" "); ?></span>
                                    <br>
                                    <?php
                                    if (has_tag()) :
                                    ?>
                                        Tags: <span><?php the_tags("", ", ", ""); ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div><?php the_excerpt(); ?></div>
                        </article>

                    <?php
                    endwhile;
                else :
                    ?>
                    <p>Nothing to display</p>

                <?php
                endif;
                ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>