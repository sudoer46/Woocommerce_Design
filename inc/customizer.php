<?php

/**
 * Style Maven Theme Customizer
 * @package Style Maven
 */

function style_maven_customizer($wp_customize)
{
    //Copyright Section
    //call the add section method for the customizer
    //section only appears when there are some controls in it
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Section for copyright information'
        )
    );

    //Field 1 - Copyright Text Box

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    //Field 1 - Copyright Text Box
    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_copyright',
        array(
            'label' => 'Copyright',
            'description' => 'Add your copyright info here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    /*----------------------------------------------------------*/
    //Slider Section
    $wp_customize->add_section(
        'sec_slider',
        array(
            'title' => 'Slider Settings',
            'description' => 'Slider Section'
        )
    );
    //Field 1 - slider page number 1

    $wp_customize->add_setting(
        'set_slider_page1',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'absint'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_slider_page1',
        array(
            'label' => 'Set slider page 1',
            'description' => 'set slider page 1',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    //Field 2 - slider button text number 1

    $wp_customize->add_setting(
        'set_slider_button_text1',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_slider_button_text1',
        array(
            'label' => 'Set Button Text for Page 1',
            'description' => 'Set Button Text for Page 1',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    //Field 3 - Slider Button Url Number 1

    $wp_customize->add_setting(
        'set_slider_button_url1',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_slider_button_url1',
        array(
            'label' => 'Set URL for Page 1',
            'description' => 'Set URL for Page 1',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );


    /** Slide two settings */
    //Field 1 - slider page number 2

    $wp_customize->add_setting(
        'set_slider_page2',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'absint'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_slider_page2',
        array(
            'label' => 'Set slider page 2',
            'description' => 'set slider page 2',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    //Field 2 - slider button text number 2

    $wp_customize->add_setting(
        'set_slider_button_text2',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_slider_button_text2',
        array(
            'label' => 'Set Button Text for Page 2',
            'description' => 'Set Button Text for Page 2',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    //Field 3 - Slider Button Url Number 2

    $wp_customize->add_setting(
        'set_slider_button_url2',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_slider_button_url2',
        array(
            'label' => 'Set URL for Page 2',
            'description' => 'Set URL for Page 2',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    /** Slide 3 settings*/

    //Field 1 - slider page number 3

    $wp_customize->add_setting(
        'set_slider_page3',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'absint'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_slider_page3',
        array(
            'label' => 'Set slider page 3',
            'description' => 'set slider page 3',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    //Field 2 - slider button text number 3

    $wp_customize->add_setting(
        'set_slider_button_text3',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_slider_button_text3',
        array(
            'label' => 'Set Button Text for Page 3',
            'description' => 'Set Button Text for Page 3',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    //Field 3 - Slider Button Url Number 3

    $wp_customize->add_setting(
        'set_slider_button_url3',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting

    $wp_customize->add_control(

        'set_slider_button_url3',
        array(
            'label' => 'Set URL for Page 3',
            'description' => 'Set URL for Page 3',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    /** Home Page Product Management */

    //Slider Section
    $wp_customize->add_section(
        'sec_home_page',
        array(
            'title' => 'Home Page Products and Blog Settings',
            'description' => 'Settings for Product Selection Section'
        )
    );
    //Field 1 - Number of popular products to display

    $wp_customize->add_setting(
        'set_popular_max_num',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '9',
            'sanitize_callback' => 'absint'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting


    $wp_customize->add_control(

        'set_popular_max_num',
        array(
            'label' => 'Popular Products Max Number',
            'description' => 'Set number of popular products on home page',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    //Field 2 - Number of popular  column display

    $wp_customize->add_setting(
        'set_popular_cols_numb',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '3',
            'sanitize_callback' => 'absint'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting


    $wp_customize->add_control(

        'set_popular_cols_numb',
        array(
            'label' => 'Set number of popular product columns',
            'description' => 'Set number of columns on home page',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    /* Arrivals */


    //Field 1 - Number of new arrival products to display

    $wp_customize->add_setting(
        'set_arrivals_max_num',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '9',
            'sanitize_callback' => 'absint'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting


    $wp_customize->add_control(

        'set_arrivals_max_num',
        array(
            'label' => 'New Arrivals Max Number',
            'description' => 'Set number of new products on home page',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    //Field 2 - Number of new column display

    $wp_customize->add_setting(
        'set_arrivals_cols_num',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'absint'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting


    $wp_customize->add_control(

        'set_arrivals_cols_num',
        array(
            'label' => 'New Arrivals Max Columns ',
            'description' => 'Set number of new product colums on home page',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    //Deal of week checkbox

    //Deal of the Week Product ID

    $wp_customize->add_setting(
        'toggle_deal_of_week',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => ''
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting


    $wp_customize->add_control(

        'toggle_deal_of_week',
        array(
            'label' => 'Display deal of the week',
            'description' => 'Toggle to display deal of the product of the week',
            'section' => 'sec_home_page',
            'type' => 'checkbox'
        )
    );

    $wp_customize->add_setting(
        'set_deal_of_week',
        array(
            'type'              => 'theme_mod', // this will be specific to this theme .could be options as well
            'default'           => '',
            'sanitize_callback' => 'style_maven_sanitize_checkbox'
        )
    );

    //this first paramater must match up with the id used in add_setting()
    //links the control and the setting


    $wp_customize->add_control(

        'set_deal_of_week',
        array(
            'label' => 'Product of the week',
            'description' => 'Set ID of the product of the week',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );
}

add_action('customize_register', 'style_maven_customizer');

function style_maven_sanitize_checkbox($checked)
{
    return ((isset($checked) && true == $checked ? true : false));
}
