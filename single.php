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
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header>
                            <h1><?php the_title(); ?></h1>
                            <div class="meta">

                            </div>


                        </header>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>


                    </article>
                <?php
                endwhile;

                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>