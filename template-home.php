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

                    <?php
                    for ($i = 1; $i < 4; $i++) {
                        $slider_page[$i] = get_theme_mod('set_slider_page' . $i);
                        $slider_button_text[$i] = get_theme_mod('set_slider_button_text' . $i);
                        $slider_button_url[$i] = get_theme_mod('set_slider_button_url' . $i);
                    }
                    ?>
                    <li>
                        <img src="slide1.jpg" />
                    </li>
                    <?php
                    ?>
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