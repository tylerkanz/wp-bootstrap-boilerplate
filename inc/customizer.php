<?php
add_action('customize_register', 'wpbb_customizer_options');
function wpbb_customizer_options($wp_customize)
{
    /**
     * Custom Colors section
     */
    $wp_customize->add_setting(
        'wpbb_accent_color',
        array(
            'default' => '#333333', //default
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'wpbb_custom_accent_color',
            array(
                'label'      => __('Accent Color', 'wpbb-theme'), //label
                'section'    => 'colors',
                'settings'   => 'wpbb_accent_color'
            )
        )
    );

    /**
     * Header Image
     */
    $wp_customize->add_setting('wpbb_header_logo');
    // Add a control to upload the logo
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'wpbb_header_logo',
        array(
            'label' => 'Upload Logo',
            'section' => 'title_tagline',
            'settings' => 'wpbb_header_logo',
        )
    ));
}
