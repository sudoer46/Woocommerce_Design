<?php

/**
 * Template part for displaying posts
 * @package Style-maven
 */

?>


<article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p><?php esc_html_e('Published by', 'style-maven') ?> <?php the_author_posts_link(); ?> <?php esc_html_e('on', 'style-maven'); ?> <?php echo esc_html(get_the_date()); ?>
                <br>
                <?php if (has_category()) : ?>
                    <?php esc_html_e('Categories', 'style-maven') ?>: <span><?php the_category(" "); ?></span>
                <?php endif; ?>
                <br>
                <?php
                if (has_tag()) :
                ?>
                    <?php esc_html_e('Tags', 'style-maven') ?>: <span><?php the_tags("", ", ", ""); ?></span>
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
            'before'              => '<p class="inner_pagination"><span class="page-link-text">' . esc_html__('More pages', 'style-maven') . ':' . '</span>',
            'after'               => '</p>'
        );
        wp_link_pages($args);
        ?>
        <?php the_content(); ?>
    </div>
</article>