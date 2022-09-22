<?php

/**
 * Style Maven functions and definitions
 *  @package Style Maven
 */

/**
 * Register Custom Navigation Walker
 */
if (!file_exists(get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php')) {
    // File does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

//customerizer includes
require_once get_template_directory() . '/inc/customizer.php';

if (!isset($content_width))
    $content_width = 600;

add_theme_support('menus');




if (!function_exists('style_maven_scripts')) {
    /**
     * Insert comments here
     */
    function style_maven_scripts()
    {
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', ['jquery'], '4.3.1', true);
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', [], '4.3.1', 'all');
        wp_enqueue_style('style-maven-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');

        //Flexslider files
        wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', ['jquery'], '', true);
        wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', [], '', 'all');
        wp_enqueue_script('flexslider.js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', ['jquery'], '', true);
    }

    add_action('wp_enqueue_scripts', 'style_maven_scripts');
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function style_maven_config()
{

    register_nav_menus(
        array(
            'style_maven_main_menu' => 'Style Maven Main Menu',
            'style_maven_footer_menu' => 'Style Maven Footer Menu',

        )
    );
}
add_action('after_setup_theme', 'style_maven_config', 0);


function mytheme_add_woocommerce_support()
{
    //custom logo
    add_theme_support(
        'custom-logo',
        array(
            'height' => 85,
            'width' => 160,
            'flex-height' => true,
            'flex-width' => true,
        )
    );

    add_image_size('style-maven-slider', 1920, 800, ['center', 'center']);

    add_theme_support(
        'woocommerce',
        array(
            'thumbnail_image_width' => 255,
            'single_image_width'    => 255,
            'product_grid'          => array(
                'default_rows'    => 10,
                'min_rows'        => 5,
                'max_rows'        => 10,
                'default_columns' => 1,
                'min_columns'     => 1,
                'max_columns'     => 1
            ),
        )
    );

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support', 0);

//check if woocommerce exists

if (class_exists("WooCommerce")) {
    require get_template_directory() . '/inc/wc-modifications.php';
}


/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();

?>
    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
<?php
    $fragments['span.items'] = ob_get_clean();
    return $fragments;
}
