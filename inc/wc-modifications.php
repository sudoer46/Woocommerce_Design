<?php

/**
 * Style Maven woocommerce functions and definition for modifications
 *  @package Style Maven
 */


function style_maven_wc_modify()
{

    add_action('woocommerce_before_main_content', 'style_maven_open_container_row', 5);
    function style_maven_open_container_row()
    {
        echo '<div class="container shop-content">
        <div class="row">';
    }

    add_action('woocommerce_after_main_content', 'style_maven_close_container_row', 5);
    function style_maven_close_container_row()
    {
        echo '</div> </div>';
    }


    // function style_maven_add_sidebar_tags()
    // {
    //     echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
    // }

    /**
     * Remove main WC side bar from original position
     * Add it to the other side of the page if we are dealing with a shop page
     * otherwise, dont add back
     */


    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

    if (is_shop()) {
        //add a div
        //add the sidebar to the div
        //close that div

        add_action('woocommerce_before_main_content', 'style_maven_add_sidebar_tags', 6);
        function style_maven_add_sidebar_tags()
        {
            echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
        }

        // Put the main WC sidebar back, but using other action hook and on a different position
        add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

        add_action('woocommerce_before_main_content', 'style_maven_close_sidebar_tags', 8);
        function style_maven_close_sidebar_tags()
        {
            echo '</div>';
        }

        add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);
    }



    // Modify HTML tags on a shop page. We also want Bootstrap-like markup here (.primary div)
    // change page structure for shop page - make the column 75% width
    //if single product page, make it 100% wide
    add_action('woocommerce_before_main_content', 'style_maven_add_shop_tags', 9);
    function style_maven_add_shop_tags()
    {
        if (is_shop()) {
            echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
        } else {
            echo '<div class="col">';
        }
    }

    add_action('woocommerce_after_main_content', 'style_maven_close_shop_tags', 4);
    function style_maven_close_shop_tags()
    {
        echo '</div>';
    }
    //add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);
}
add_action('wp', 'style_maven_wc_modify');
