<?php

/**
 * Template part for displaying posts
 * @package Style-maven
 */

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
        <?php
        $args = array(
            'before'              => '<p class="inner_pagination"><span class="page-link-text">' . 'More pages: ' . '</span>',
            'after'               => '</p>'
        );
        wp_link_pages($args);
        ?>
        <?php the_content(); ?>
    </div>
</article>