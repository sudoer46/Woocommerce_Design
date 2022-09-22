<?php

/**
 * Template Name: Home Page
 */

get_header(); ?>
<div class="content-area">
    <main>
        <section class="slider">
            <!-- Removed Bootstrap container so slider spans 100% of page -->
            <!-- Slider Code - do not change class names-->
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="slide1.jpg" />
                    </li>
                    <li>
                        <img src="slide2.jpg" />
                    </li>
                    <li>
                        <img src="slide3.jpg" />
                    </li>
                    <li>
                        <img src="slide4.jpg" />
                    </li>
                </ul>
        </section>

        <section class="lab-blog">
            <div class="container">
                <div class="row">

                    <?php
                    //if there are any posts
                    if (have_posts()) :
                        //load post loop
                        while (have_posts()) : the_post();

                            // do stuff ...>
                    ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <div><?php the_content(); ?></div>
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
        </section>
    </main>
</div>

<?php get_footer(); ?>