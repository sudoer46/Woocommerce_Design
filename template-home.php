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
                    //Create arrays that store the data we want to display
                    for ($i = 1; $i < 4; $i++) {
                        $slider_page[$i] = get_theme_mod('set_slider_page' . $i);
                        $slider_button_text[$i] = get_theme_mod('set_slider_button_text' . $i);
                        $slider_button_url[$i] = get_theme_mod('set_slider_button_url' . $i);
                    }



                    $args = array(
                        'post_type' => 'page',
                        'posts_per_page' => 3,
                        'post__in' => $slider_page,
                        'orderby' => 'post__in'

                    );
                    $slider_loop = new WP_Query($args);
                    $j = 1;


                    if ($slider_loop->have_posts()) :
                        while ($slider_loop->have_posts()) : $slider_loop->the_post();
                            // do stuff ... 
                    ?>
                            <li>
                                <?php the_post_thumbnail('style-maven-slider', array('class' => 'img-fluid')); ?>
                                <div class="container">
                                    <div class="slider-details-container">
                                        <div class="slider-title">
                                            <h1><?php the_title() ?></h1>
                                        </div>
                                        <div class="slider-description">
                                            <div class="subtitle"><?php the_content(); ?></div>
                                            <a href="<?php echo $slider_button_url[$j]; ?>" class="link"><?php echo $slider_button_text[$j]; ?></a>

                                        </div>
                                    </div>


                                </div>

                            </li>
                    <?php
                            $j++;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
        </section>
        <section class="popular-products">

            <?php

            $popular_limit = get_theme_mod('set_popular_max_num', 9);
            $popular_cols = get_theme_mod('set_popular_cols_numb', 3);
            $arrival_limit = get_theme_mod('set_arrivals_max_num', 9);
            $arrival_cols = get_theme_mod('set_arrivals_cols_num', 3);





            ?>
            <div class="container">
                <h2>Popular Products</h2>
                <?php echo do_shortcode(
                    '[products limit="' . $popular_limit . '" columns="' . $popular_cols . '" orderby="popularity"]'
                );
                ?>

            </div>
        </section>
        <section class="new-arrivals">
            <div class="container">
                <h2>New Arrivals</h2>
                <?php echo do_shortcode(
                    '[products limit="' . $arrival_limit . '" columns="' . $arrival_cols . '" orderby="date" order="descending" visiblity="visible"]'
                );
                ?>

            </div>
        </section>
        <?php
        $showdeal = get_theme_mod('toggle_deal_of_week', 0);
        $deal = get_theme_mod('set_deal_of_week');
        $currency = get_woocommerce_currency_symbol();
        //pass in the post id as the key
        $regular = get_post_meta($deal, '_regular_price', true);
        $sale = get_post_meta($deal, '_sale_price', true);


        if ($showdeal == 1 && (!empty($deal))) :
            $discount_percentage = absint(100 - (($sale / $regular) * 100));
        ?>


            <section class="deal-of-the-week">

                <div class="container">
                    <h2>Deal of the week</h2>
                    <div class="row d-flex align-items-center">
                        <div class="deal-img col-md-6 col-12 ml-auto text-center">
                            <?php echo get_the_post_thumbnail($deal, 'large', array('class' => 'img-fluid')); ?>




                        </div>
                        <div class="deal-desc col-md-4 col-12 mr-auto text-center"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
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