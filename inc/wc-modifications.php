<?php

/**
 * Style Maven woocommerce functions and definition for modifications
 *  @package Style Maven
 */

add_action('woocommerce_before_main_content', 'style_maven_open_container_row', 5);
function style_maven_open_container_row()
{
    echo '<div class="container shop-content">
    <div class="row">';
}
add_action('woocommerce_after_main_content', 'style_maven_close_container_row', 5);

function style_maven_close_container_row()
{
    echo '</div>
</div>';
}
add_action('woocommerce_before_main_content', 'style_maven_add_sidebar_tags', 6);

function style_maven_add_sidebar_tags()
{
    echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
}

/**
 * Remove main WC side bar from original position
 * Add it to the other side of the page
 */


remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

add_action('woocommerce_before_main_content', 'style_maven_close_sidebar_tags', 8);
function style_maven_close_sidebar_tags()
{
    echo '</div>';
}

//Modify HTML tags on the shop page and include bootstrap mark up
add_action('woocommerce_before_main_content', 'style_maven_add_shop_tags', 9);
function style_maven_add_shop_tags()
{
    echo '<div class="col-lg-3 col-md-4 order-2 order-md-1">';
}

add_action('woocommerce_after_main_content', 'style_maven_close_shop_tags', 4);
function style_maven_close_shop_tags()
{
    echo '</div>';
}

//add_filter('woocommerce_show_page_title', 'style_maven_remove_shop_title');
// function style_maven_remove_shop_title()
// {
// return false;
// }
//alternative
// function style_maven_remove_shop_title($val) //takes an input - corresponds to second parameter in filter
// {
// $val = false;
// return $val;
// }

/**
 * Add producdt description
 */

add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);
