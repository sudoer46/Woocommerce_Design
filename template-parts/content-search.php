<?php

/**
 * Template part for displaying search
 * @package Style-maven
 */

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