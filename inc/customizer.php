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
}

add_action('customize_register', 'style_maven_customizer');
