<?php

function anews_customize_fonts($wp_customize){
	//	==================================================
    //  =============================
    //  = ==== Fonts
    //  =============================

    $wp_customize->add_section('anews_fonts', array(
        'title'    => esc_html__('Fonts Size', 'anews'),
        'priority' => 303,
        'panel'       => apply_filters( 'magazin_font_typography_panel_id', 'magazin_font_typography_panel' ),
    ));


     //  =============================
    //  = H1
    //  =============================
    $wp_customize->add_setting('anews_theme_options[font_h1_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('font_h1_size', array(
        'label'    	=> esc_html__('H1 size (px)', 'anews'),
        'description'    => esc_html__('Sample: 72', 'anews'),
        'section'    => 'anews_fonts',
        'settings'   => 'anews_theme_options[font_h1_size]',
    ));

     //  =============================
    //  = H2
    //  =============================
    $wp_customize->add_setting('anews_theme_options[font_h2_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('font_h2_size', array(
        'label'    	=> esc_html__('H2 size (px)', 'anews'),
       'description'    => esc_html__('Sample: 56', 'anews'),
        'section'    => 'anews_fonts',
        'settings'   => 'anews_theme_options[font_h2_size]',
    ));

     //  =============================
    //  = H3
    //  =============================
    $wp_customize->add_setting('anews_theme_options[font_h3_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('font_h3_size', array(
        'label'    	=> esc_html__('H3 size (px)', 'anews'),
        'description'    => esc_html__('Sample: 48', 'anews'),
        'section'    => 'anews_fonts',
        'settings'   => 'anews_theme_options[font_h3_size]',
    ));

     //  =============================
    //  = H4
    //  =============================
    $wp_customize->add_setting('anews_theme_options[font_h4_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('font_h4_size', array(
        'label'    	=> esc_html__('H4 size (px)', 'anews'),
        'description'    => esc_html__('Sample: 31', 'anews'),
        'section'    => 'anews_fonts',
        'settings'   => 'anews_theme_options[font_h4_size]',
    ));

     //  =============================
    //  = H5
    //  =============================
    $wp_customize->add_setting('anews_theme_options[font_h5_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('font_h5_size', array(
        'label'    	=> esc_html__('H5 size (px)', 'anews'),
        'description'    => esc_html__('Sample: 24', 'anews'),
        'section'    => 'anews_fonts',
        'settings'   => 'anews_theme_options[font_h5_size]',
    ));

     //  =============================
    //  = H6
    //  =============================
    $wp_customize->add_setting('anews_theme_options[font_h6_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('font_h6_size', array(
        'label'    	=> esc_html__('H6 size (px)', 'anews'),
        'description'    => esc_html__('Sample: 18', 'anews'),
        'section'    => 'anews_fonts',
        'settings'   => 'anews_theme_options[font_h6_size]',
    ));


     //  =============================
    //  = p
    //  =============================
    $wp_customize->add_setting('anews_theme_options[font_p_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('font_p_size', array(
        'label'    	=> esc_html__('p size (px)', 'anews'),
        'description'    => esc_html__('Sample: 15', 'anews'),
        'section'    => 'anews_fonts',
        'settings'   => 'anews_theme_options[font_p_size]',
    ));

}

add_action('customize_register', 'anews_customize_fonts');

if ( class_exists( 'Kirki' ) ) {
    //setup Kirki config
    Kirki::add_config( 'mt_fonts', array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
        'option_name' => 'mt_fonts',
    ) );

    Kirki::add_panel('mt_fonts', array(
        'priority' => 10,
        'title'    => esc_html__('Fonts', 'anews'),
    ) );

    // Add section
    Kirki::add_section( 'mt_typography_section', array(
        'title'       => esc_html__('Font Family', 'anews'),
        'panel'       => 'mt_fonts',
        'priority'    => 11,
    ) );

    Kirki::add_field( 'mt_fonts', array(
       'type'        => 'select',
       'settings'    => 'mt_typogrpahys',
       'label'       => esc_attr__( 'Use Custom Fonts', 'anews' ),
       'section'     => 'mt_typography_section',
       'default'     => 2,
       'priority'    => 10,
       'choices'     => array(
         '1'  => esc_attr__( 'On', 'anews' ),
         '2' => esc_attr__( 'Off', 'anews' ),
       ),
     ));

    Kirki::add_field( 'mt_fonts', array(
     'type'        => 'typography',
     'settings'    => 'mt_typography_headings',
     'label'       => esc_attr__( 'Headings', 'anews' ),
     'section'     => 'mt_typography_section',
     'priority'    => 10,
     'default'     => array( 'font-family'  => 'Lato', ),
     'output' => array(
       array(
         'element' => 'h1, h2, h3, h4, h5, h6, blockquote',
       ),
     ),
     'active_callback'    => array(
      array(
        'setting'  => 'mt_typogrpahys',
        'operator' => '!=',
        'value'    => 2,
      )
     ),
    ) );

    Kirki::add_field( 'mt_fonts', array(
     'type'        => 'typography',
     'settings'    => 'mt_typography_body',
     'label'       => esc_attr__( 'Body', 'anews' ),
     'section'     => 'mt_typography_section',
     'priority'    => 10,
     'default'     => array( 'font-family'  => 'Lato', ),
     'output' => array(
       array(
         'element' => 'body',
       ),
     ),
     'active_callback'    => array(
      array(
        'setting'  => 'mt_typogrpahys',
        'operator' => '!=',
        'value'    => 2,
      )
     ),
    ) );

    Kirki::add_field( 'mt_fonts', array(
     'type'        => 'typography',
     'settings'    => 'mt_typography_menu',
     'label'       => esc_attr__( 'Menu', 'anews' ),
     'section'     => 'mt_typography_section',
     'priority'    => 10,
     'default'     => array( 'font-family'  => 'Lato', ),
     'output' => array(
       array(
         'element' => '.sf-menu',
       ),
     ),
     'active_callback'    => array(
      array(
        'setting'  => 'mt_typogrpahys',
        'operator' => '!=',
        'value'    => 2,
      )
     ),
    ) );
}

?>
