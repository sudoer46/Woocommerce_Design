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
        <p><?php _e('Published by', 'stylemaven') ?> <?php the_author_posts_link(); ?> <?php _e('on', 'stylemaven'); ?> <?php echo get_the_date(); ?>
            <br>
            <?php if (has_category()) : ?>
                <?php _e('Categories', 'stylemaven') ?>: <span><?php the_category(" "); ?></span>
            <?php endif; ?>
            <br>
            <?php
            if (has_tag()) :
            ?>
                <?php _e('Tags', 'stylemaven') ?>: <span><?php the_tags("", ", ", ""); ?></span>
            <?php endif; ?>
        </p>
    </div>
    <div><?php the_excerpt(); ?></div>
</article>