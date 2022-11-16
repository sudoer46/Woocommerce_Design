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
                <?php
                the_archive_title("<h1>", "</h2>");
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
                                    <?php if (has_category()) : ?>
                                        Categories: <span><?php the_category(" "); ?></span>
                                    <?php endif; ?>
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
        </div>
    </main>
</div>

<?php get_footer(); ?>