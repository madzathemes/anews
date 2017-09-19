<?php

function anews_customize_header($wp_customize){

  $wp_customize->add_section('layout_settings', array(
    'title'    	=> esc_html__('Layouts', 'anews'),
    'panel'  => 'magazin_general'
  ));

	$wp_customize->add_section('anews_header', array(
        'title'    	=> esc_html__('Header', 'anews'),
        'priority' => 124,
    ));

	  //	==================================================
    //  =============================
    //  = ==== Logo Options
    //  =============================
      $wp_customize->add_panel( 'panel_header', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Header', 'anews'),
    'description'    => '',
	) );


    $wp_customize->add_section('anews_logo', array(
        'title'    	=> esc_html__('Logo', 'anews'),
        'priority' => 122,

    'panel'  => 'panel_header',
    ));


    //  =============================
    //  = Logo             =
    //  =============================
    $wp_customize->add_setting('anews_theme_options[header_logo]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label'    => esc_html__('Logo', 'anews'),
        'section'  => 'anews_logo',
        'settings' => 'anews_theme_options[header_logo]',
    )));

    //  = Logo Responsive            =
    $wp_customize->add_setting('anews_theme_options[header_logox2]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_logox2', array(
        'label'    => esc_html__('Responsive Logo (x2)', 'anews'),
        'section'  => 'anews_logo',
        'settings' => 'anews_theme_options[header_logox2]',
    )));


    //  =============================
    //  = Logo Height fixed
    //  =============================
    $wp_customize->add_setting('anews_theme_options[mt_logo_h_f]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
	));

    $wp_customize->add_control('mt_logo_h_f', array(
        'label'    	=> esc_html__('Logo height (px)', 'anews'),
        'section'    => 'anews_menu_fixed',
        'description'    => esc_html__('Default: 40', 'anews'),
        'settings'   => 'anews_theme_options[mt_logo_h_f]',
    ));

    //	==================================================
    //  =============================
    //  = ==== Header Options
    //  =============================

    $wp_customize->add_section('anews_menu_mobile_', array(
        'title'    	=> esc_html__('Mobile Menu', 'anews'),
        'priority' => 126,
        'panel'  => 'panel_header',
    ));

      $wp_customize->add_section('anews_header_parallax', array(
        'title'    	=> esc_html__('Parallax', 'anews'),
        'priority' => 127,
        'panel'  => 'panel_header',
    ));


    //  =============================
    //  = Menu fixed
    //  =============================
    $wp_customize->add_setting('anews_theme_options[mt_menu_fix]', array(
    	'default'        => "",
        'capability' => 'edit_theme_options',
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('mt_menu_fix', array(
        'settings' => 'anews_theme_options[mt_menu_fix]',
        'label'    	=> esc_html__('On/Off', 'anews'),
        'priority'   => 2,
        'section'  => 'anews_menu_fixed',
        'type'     => 'checkbox',
    ));


    //  =============================
    //  = Menu Small on/off  	    =
    //  =============================
     $wp_customize->add_setting('anews_theme_options[mt_menu_small]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_small', array(
        'settings' => 'anews_theme_options[mt_menu_small]',
        'label'    	=> esc_html__('Menu Icon', 'anews'),
        'section' => 'anews_menu_mobile',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'On',
			'3' => 'Off'

        ),
    ));


   //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_bg', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_bg', array(
        'label'    => esc_html__('Mobile Menu Background', 'anews'),
        'section'  => 'anews_menu_mobile',
        'settings' => 'mt_color_mobile_bg',
    )));

     //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link', array(
        'label'    => esc_html__('Mobile Menu Link', 'anews'),
        'section'  => 'anews_menu_mobile',
        'settings' => 'mt_color_mobile_link',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link_hover', array(
        'label'    => esc_html__('Mobile Menu Link Hover', 'anews'),
        'section'  => 'anews_menu_mobile',
        'settings' => 'mt_color_mobile_link_hover',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_title', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_title', array(
        'label'    => esc_html__('Mobile Menu Title', 'anews'),
        'section'  => 'anews_menu_mobile',
        'settings' => 'mt_color_mobile_title',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_text', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_text', array(
        'label'    => esc_html__('Mobile Menu Text', 'anews'),
        'section'  => 'anews_menu_mobile',
        'settings' => 'mt_color_mobile_text',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon', array(
        'label'    => esc_html__('Mobile Menu Social Icon', 'anews'),
        'section'  => 'anews_menu_mobile',
        'settings' => 'mt_color_mobile_icon',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon_hover', array(
        'label'    => esc_html__('Mobile Menu Social Icon Hover', 'anews'),
        'section'  => 'anews_menu_mobile',
        'settings' => 'mt_color_mobile_icon_hover',
    )));

     //  =============================
    //  = Header BG image          =
    //  =============================
    $wp_customize->add_setting('anews_theme_options[mt_mobile_menu_bg_img]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default' => '',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_mobile_menu_bg_img', array(
        'label'    => esc_html__('Mobile Menu BG Image', 'anews'),
        'section'  => 'anews_menu_mobile',
        'settings' => 'anews_theme_options[mt_mobile_menu_bg_img]',
    )));

    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('anews_theme_options[mt_mobile_menu_bg_img_style]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_style', array(
        'settings' => 'anews_theme_options[mt_mobile_menu_bg_img_style]',
        'label'    	=> esc_html__('Mobile Menu BG Image Style', 'anews'),
        'section' => 'anews_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'Cover',
			'3' => 'Repeat',
			'4' => 'No-Repeat'

        ),
    ));
    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('anews_theme_options[mt_mobile_menu_bg_img_position]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_position', array(
        'settings' => 'anews_theme_options[mt_mobile_menu_bg_img_position]',
        'label'    	=> esc_html__('Mobile Menu BG Image Position', 'anews'),
        'section' => 'anews_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
	        '0' => 'Default',
        	'1' => 'Center',
            '2' => 'Top Center',
			'3' => 'Bottom Center',
			'4' => 'Left Center',
			'5' => 'Left Top',
			'6' => 'Left Bottom',
			'7' => 'Right Center',
			'8' => 'Right Top',
			'9' => 'Right Bottom'

        ),
    ));

    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_fixed_menu_bg', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_fixed_menu_bg', array(
        'label'    => esc_html__('Background color', 'anews'),
        'section'  => 'anews_menu_fixed',
        'settings' => 'mt_color_fixed_menu_bg',
    )));


		//  =============================
		//  = Header Top                =
		//  =============================

       $wp_customize->add_section('anews_header_bar_top', array(
           'title'    	=> esc_html__('Top Bar Settings', 'anews'),
           'priority' => 124,
          'panel'  => 'panel_header',
       ));

       $wp_customize->add_section('anews_header_bar_head', array(
           'title'    	=> esc_html__('Head Bar Settings', 'anews'),
           'priority' => 124,
          'panel'  => 'panel_header',
       ));

       $wp_customize->add_section('anews_header_bar_menu', array(
           'title'    	=> esc_html__('Menu Bar Settings', 'anews'),
           'priority' => 124,
   				'panel'  => 'panel_header',
       ));

        $wp_customize->add_section('anews_header_other', array(
            'title'    	=> esc_html__('Other Settings', 'anews'),
            'priority' => 124,
    				'panel'  => 'panel_header',
        ));

}

add_action('customize_register', 'anews_customize_header');

Kirki::add_field( 'anews_theme_options[boxed]', array(
  'type'        => 'radio-image',
  'settings'    => 'anews_theme_options[boxed]',
  'label'       => esc_html__( 'Page Layouts', 'anews' ),
  'section'     => 'general_style_settings',
  'default'     => '2',
  'option_type' => 'option',
  'priority'    => 10,
  'choices'     => array(
      '1'   => get_template_directory_uri() . '/inc/img/boxed.png',
      '2' => get_template_directory_uri() . '/inc/img/full.png',
     ),
));

Kirki::add_field( 'anews_theme_options[header_logo_w]', array(
  'type'        => 'dimension',
  'settings'    => 'anews_theme_options[header_logo_w]',
  'label'       => esc_html__( 'Logo Width', 'anews' ),
  'section'     => 'anews_logo',
  'option_type' => 'option',
  'default'     => '200px',
  'priority'    => 10,
) );
Kirki::add_field( 'anews_theme_options[header_logo_h]', array(
  'type'        => 'dimension',
  'settings'    => 'anews_theme_options[header_logo_h]',
  'label'       => esc_html__( 'Logo Height', 'anews' ),
  'section'     => 'anews_logo',
  'option_type' => 'option',
  'default'     => '40px',
  'priority'    => 10,
) );
Kirki::add_field( 'anews_logo_size', array(
  'type'        => 'spacing',
  'settings'    => 'anews_logo_size',
  'label'       => esc_html__( 'Logo Space', 'anews' ),
  'section'     => 'anews_logo',
  'option_type' => 'option',
  'default'     => array(
    'top'   => '10px',
    'bottom'  => '10px',
  ),
  'priority'    => 11,
) );

Kirki::add_field( 'anews_theme_options[line_1]', array(
  'type'        => 'custom',
  'settings'    => 'anews_theme_options[line_1]',
  'section'     => 'anews_logo',
  'default'     => '<div style="margin: 20px 0; border-top: 1px solid silver"></div>',
  'priority'    => 12,
) );

Kirki::add_field( 'anews_theme_options[mobile_logo]', array(
  'type'        => 'image',
  'settings'    => 'anews_theme_options[mobile_logo]',
  'label'       => esc_html__( 'Mobile Header Logo', 'anews' ),
  'section'     => 'anews_logo',
  'default'     => '',
  'option_type' => 'option',
  'priority'    => 19,
) );
Kirki::add_field( 'anews_theme_options[mobile_header_logo_w]', array(
  'type'        => 'dimension',
  'settings'    => 'anews_theme_options[mobile_header_logo_w]',
  'label'       => esc_html__( 'Mobile Header Logo Width', 'anews' ),
  'section'     => 'anews_logo',
  'option_type' => 'option',
  'default'     => '200px',
  'priority'    => 20,
) );
Kirki::add_field( 'anews_theme_options[mobile_header_logo_h]', array(
  'type'        => 'dimension',
  'settings'    => 'anews_theme_options[mobile_header_logo_h]',
  'label'       => esc_html__( 'Mobile Header Logo Height', 'anews' ),
  'section'     => 'anews_logo',
  'option_type' => 'option',
  'default'     => '40px',
  'priority'    => 20,
) );
Kirki::add_field( 'anews_mobile_logo_size', array(
  'type'        => 'spacing',
  'settings'    => 'anews_mobile_logo_size',
  'label'       => esc_html__( 'Mobile Header Logo Space', 'anews' ),
  'section'     => 'anews_logo',
  'option_type' => 'option',
  'default'     => array(
    'top'   => '10px',
    'bottom'  => '10px',
  ),
  'priority'    => 21,
) );


Kirki::add_field( 'anews_theme_options[line_4]', array(
  'type'        => 'custom',
  'settings'    => 'anews_theme_options[line_4]',
  'section'     => 'anews_logo',
  'default'     => '<div style="margin: 20px 0; border-top: 1px solid silver"></div>',
  'priority'    => 27,
) );

Kirki::add_field( 'anews_theme_options[fixed_logo]', array(
  'type'        => 'image',
  'settings'    => 'anews_theme_options[fixed_logo]',
  'label'       => esc_html__( 'Fixed Menu Logo', 'anews' ),
  'section'     => 'anews_logo',
  'default'     => '',
  'option_type' => 'option',
  'priority'    => 28,
) );
Kirki::add_field( 'anews_theme_options[fixed_logo2]', array(
  'type'        => 'image',
  'settings'    => 'anews_theme_options[fixed_logo2]',
  'label'       => esc_html__( 'Responsive Fixed Menu Logo (x2)', 'anews' ),
  'section'     => 'anews_logo',
  'default'     => '',
  'option_type' => 'option',
  'priority'    => 29,
) );

Kirki::add_field( 'mt_fixed_menu_logo_w', array(
  'type'        => 'dimension',
  'settings'    => 'mt_fixed_menu_logo_w',
  'label'       => esc_html__( 'Fixed Menu Logo Width', 'anews' ),
  'section'     => 'anews_logo',
  'default'     => '200px',
  'priority'    => 30,
) );
Kirki::add_field( 'anews_theme_options[fixed_menu_logo_h]', array(
  'type'        => 'dimension',
  'settings'    => 'anews_theme_options[fixed_menu_logo_h]',
  'label'       => esc_html__( 'Fixed Menu Logo Height', 'anews' ),
  'section'     => 'anews_logo',
  'default'     => '40px',
  'priority'    => 30,
) );

Kirki::add_field( 'anews_fixed_logo_size', array(
  'type'        => 'spacing',
  'settings'    => 'anews_fixed_logo_size',
  'label'       => esc_html__( 'Fixed Menu Logo Space', 'anews' ),
  'section'     => 'anews_logo',
  'option_type' => 'option',
  'default'     => array(
    'top'   => '10px',
    'bottom'  => '10px',
  ),
  'priority'    => 31,
) );

//  =============================
//  = Logo Widht
//  =============================

Kirki::add_field( 'anews_theme_options[logo_width]', array(
'type'        => 'number',
'settings'    => 'anews_theme_options[logo_width]',
'label'       => esc_attr__( 'Width', 'anews' ),
'section'     => 'anews_logo_settings',
'default'     => 176,
'option_type' => 'option',
'choices'     => array(
  'min'  => 20,
  'max'  => 500,
  'step' => 1,
),
) );

//  =============================
//  = Logo Height
//  =============================

Kirki::add_field( 'anews_theme_options[logo_height]', array(
'type'        => 'number',
'settings'    => 'anews_theme_options[logo_height]',
'label'       => esc_attr__( 'Height', 'anews' ),
'section'     => 'anews_logo_settings',
'default'     => 40,
'option_type' => 'option',
'choices'     => array(
  'min'  => 20,
  'max'  => 200,
  'step' => 1,
),
) );

//  =============================
//  = Logo margin Top
//  =============================


Kirki::add_field( 'anews_theme_options[logo_top]', array(
'type'        => 'number',
'settings'    => 'anews_theme_options[logo_top]',
'label'       => esc_attr__( 'Top Space', 'anews' ),
'section'     => 'anews_logo_settings',
'default'     => 8,
'option_type' => 'option',
'choices'     => array(
  'min'  => 0,
  'max'  => 120,
  'step' => 1,
),
) );

//  =============================
//  = Logo margin Bottom
//  =============================
Kirki::add_field( 'anews_theme_options[logo_bottom]', array(
'type'        => 'number',
'settings'    => 'anews_theme_options[logo_bottom]',
'label'       => esc_attr__( 'Top Space', 'anews' ),
'section'     => 'anews_logo_settings',
'default'     => 8,
'option_type' => 'option',
'choices'     => array(
  'min'  => 0,
  'max'  => 120,
  'step' => 1,
),
) );




Kirki::add_field( 'mt_bar_top', array(
    'type'        => 'switch',
    'settings'    => 'mt_bar_top',
    'label'       => esc_attr__( 'Top Bar', 'anews' ),
    'section'     => 'anews_header_bar_top',
    'default'     => 'off',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'On', 'anews' ),
      'off' => esc_attr__( 'Off', 'anews' ),
    ),
) );
Kirki::add_field( 'mt_bar_top_scheme', array(
  'type'        => 'select',
  'settings'    => 'mt_bar_top_scheme',
  'label'       => esc_attr__( 'Top Bar Color Sheme', 'anews' ),
  'section'     => 'colors_menu',
  'default'     => 'light',
  'priority'    => 2,
  'choices'     => array(
    'dark' => esc_attr__( 'Dark', 'anews' ),
    'light' => esc_attr__( 'Light', 'anews' ),
  ),
 ) );

Kirki::add_field( 'mt_bar_top_row', array(
   'type'        => 'select',
   'settings'    => 'mt_bar_top_row',
   'label'       => esc_attr__( 'Row Layout', 'anews' ),
   'section'     => 'anews_header_bar_top',
   'default'     => 'full',
   'priority'    => 10,
   'choices'     => array(
     'full' => esc_attr__( 'Full Width', 'anews' ),
     'stretched' => esc_attr__( 'Full Width Stretched', 'anews' ),
     'box' => esc_attr__( 'Boxed', 'anews' ),
   ),
 ) );

 Kirki::add_field( 'mt_bar_top_social', array(
    'type'        => 'select',
    'settings'    => 'mt_bar_top_social',
    'label'       => esc_attr__( 'Social Icons', 'anews' ),
    'section'     => 'anews_header_bar_top',
    'default'     => '3',
    'priority'    => 10,
    'choices'     => array(
      '1' => esc_attr__( 'Disable', 'anews' ),
      '2' => esc_attr__( 'Align Left', 'anews' ),
      '3' => esc_attr__( 'Align Right', 'anews' ),
    ),
  ) );

  Kirki::add_field( 'mt_bar_top_follower', array(
     'type'        => 'select',
     'settings'    => 'mt_bar_top_follower',
     'label'       => esc_attr__( 'Follower Count', 'anews' ),
     'section'     => 'anews_header_bar_top',
     'default'     => '1',
     'priority'    => 10,
     'choices'     => array(
       '1' => esc_attr__( 'Disable', 'anews' ),
       '2' => esc_attr__( 'Align Left', 'anews' ),
       '3' => esc_attr__( 'Align Right', 'anews' ),
     ),
   ) );

 Kirki::add_field( 'mt_bar_top_menu', array(
    'type'        => 'select',
    'settings'    => 'mt_bar_top_menu',
    'label'       => esc_attr__( 'Top Menu', 'anews' ),
    'section'     => 'anews_header_bar_top',
    'default'     => '2',
    'priority'    => 10,
    'choices'     => array(
      '1' => esc_attr__( 'Disable', 'anews' ),
      '2' => esc_attr__( 'Align Left', 'anews' ),
      '3' => esc_attr__( 'Align Right', 'anews' ),
    ),
  ) );

  Kirki::add_field( 'mt_bar_top_search', array(
     'type'        => 'select',
     'settings'    => 'mt_bar_top_search',
     'label'       => esc_attr__( 'Search Icon', 'anews' ),
     'section'     => 'anews_header_bar_top',
     'default'     => '1',
     'priority'    => 10,
     'choices'     => array(
       '1' => esc_attr__( 'Disable', 'anews' ),
       '2' => esc_attr__( 'Align Left', 'anews' ),
       '3' => esc_attr__( 'Align Right', 'anews' ),
     ),
   ) );

 Kirki::add_field( 'mt_bar_top_padding', array(
   'type'        => 'spacing',
   'settings'    => 'mt_bar_top_padding',
   'label'       => esc_attr__( 'Padding', 'anews' ),
   'section'     => 'anews_header_bar_top',
   'default'     => array(
     'top'    => '0px',
     'bottom' => '0px',
     'left'   => '20px',
     'right'  => '20px',
   ),
   'priority'    => 10,
 ) );
 Kirki::add_field( 'mt_bar_top_margin_top', array(
   'type'        => 'dimension',
   'settings'    => 'mt_bar_top_margin_top',
   'label'       => esc_attr__( 'Margin Top', 'anews' ),
   'section'     => 'anews_header_bar_top',
   'default'     => '0px',
   'priority'    => 11,
 ) );


Kirki::add_field( 'mt_bar_head', array(
    'type'        => 'switch',
    'settings'    => 'mt_bar_head',
    'label'       => esc_attr__( 'Head Bar', 'anews' ),
    'section'     => 'anews_header_bar_head',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'On', 'anews' ),
      'off' => esc_attr__( 'Off', 'anews' ),
    ),
) );

Kirki::add_field( 'mt_bar_head_scheme', array(
  'type'        => 'select',
  'settings'    => 'mt_bar_head_scheme',
  'label'       => esc_attr__( 'Head Bar Color Sheme', 'anews' ),
  'section'     => 'colors_menu',
  'default'     => 'light',
  'priority'    => 2,
  'choices'     => array(
    'dark' => esc_attr__( 'Dark', 'anews' ),
    'light' => esc_attr__( 'Light', 'anews' ),
  ),
 ) );

Kirki::add_field( 'mt_bar_head_row', array(
   'type'        => 'select',
   'settings'    => 'mt_bar_head_row',
   'label'       => esc_attr__( 'Row Layout', 'anews' ),
   'section'     => 'anews_header_bar_head',
   'default'     => 'full',
   'priority'    => 10,
   'choices'     => array(
     'full' => esc_attr__( 'Full Width', 'anews' ),
     'stretched' => esc_attr__( 'Full Width Stretched', 'anews' ),
     'box' => esc_attr__( 'Boxed', 'anews' ),
   ),
 ) );

 Kirki::add_field( 'mt_bar_head_style', array(
   'type'        => 'select',
   'settings'    => 'mt_bar_head_style',
   'label'       => esc_attr__( 'Layouts', 'anews' ),
   'section'     => 'anews_header_bar_head',
   'default'     => '1',
   'priority'    => 10,
   'choices'     => array(
     '1' => esc_attr__( 'Logo & Advertise', 'anews' ),
     '2' => esc_attr__( 'Logo & Actions', 'anews' ),
     '3' => esc_attr__( 'Logo Centered', 'anews' ),
     '4' => esc_attr__( 'Advertise Centered', 'anews' ),
     '5' => esc_attr__( 'Advertise & Actions', 'anews' ),
   ),
  ) );


 Kirki::add_field( 'mt_bar_head_small_menu', array(
   'type'        => 'select',
   'settings'    => 'mt_bar_head_small_menu',
   'label'       => esc_attr__( 'Small Menu Button', 'anews' ),
   'section'     => 'anews_header_bar_head',
   'default'     => '1',
   'priority'    => 10,
   'choices'     => array(
     '1' => esc_attr__( 'Disabled', 'anews' ),
     '2' => esc_attr__( 'Before Logo', 'anews' ),
     '3' => esc_attr__( 'After Logo', 'anews' ),
     '4' => esc_attr__( 'Menu Right Area', 'anews' ),
   ),
   'active_callback'    => array(
    array(
      'setting'  => 'mt_bar_head_style',
      'operator' => '!=',
      'value'    => 3,
    ),
    array(
      'setting'  => 'mt_bar_head_style',
      'operator' => '!=',
      'value'    => 4,
    ),
   ),
  ) );

Kirki::add_field( 'mt_bar_head_search', array(
   'type'        => 'switch',
   'settings'    => 'mt_bar_head_search',
   'label'       => esc_attr__( 'Search Icon', 'anews' ),
   'section'     => 'anews_header_bar_head',
   'default'     => 'off',
   'priority'    => 10,
   'choices'     => array(
     'on'  => esc_attr__( 'On', 'anews' ),
     'off' => esc_attr__( 'Off', 'anews' ),
   ),
   'active_callback'    => array(
     array(
       'setting'  => 'mt_bar_head_style',
       'operator' => '==',
       'value'    => 2,
     ),
   ),
 ));

 Kirki::add_field( 'mt_bar_head_social', array(
    'type'        => 'switch',
    'settings'    => 'mt_bar_head_social',
    'label'       => esc_attr__( 'Social Icons', 'anews' ),
    'section'     => 'anews_header_bar_head',
    'default'     => 'off',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'On', 'anews' ),
      'off' => esc_attr__( 'Off', 'anews' ),
    ),
    'active_callback'    => array(
     array(
       'setting'  => 'mt_bar_head_style',
       'operator' => '==',
       'value'    => 2,
     ),
    ),
  ));

 Kirki::add_field( 'mt_bar_head_clock', array(
    'type'        => 'switch',
    'settings'    => 'mt_bar_head_clock',
    'label'       => esc_attr__( 'Clock', 'anews' ),
    'section'     => 'anews_header_bar_head',
    'default'     => 'off',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'On', 'anews' ),
      'off' => esc_attr__( 'Off', 'anews' ),
    ),
    'active_callback'    => array(
     array(
       'setting'  => 'mt_bar_head_style',
       'operator' => '==',
       'value'    => 2,
     ),
    ),
  ));

  Kirki::add_field( 'mt_bar_head_date', array(
     'type'        => 'switch',
     'settings'    => 'mt_bar_head_date',
     'label'       => esc_attr__( 'Date', 'anews' ),
     'section'     => 'anews_header_bar_head',
     'default'     => 'off',
     'priority'    => 10,
     'choices'     => array(
       'on'  => esc_attr__( 'On', 'anews' ),
       'off' => esc_attr__( 'Off', 'anews' ),
     ),
     'active_callback'    => array(
       array(
         'setting'  => 'mt_bar_head_style',
         'operator' => '==',
         'value'    => 2,
       ),
     ),
   ));

 Kirki::add_field( 'mt_bar_head_padding', array(
   'type'        => 'spacing',
   'settings'    => 'mt_bar_head_padding',
   'label'       => esc_attr__( 'Padding', 'anews' ),
   'section'     => 'anews_header_bar_head',
   'default'     => array(
     'top'    => '0px',
     'bottom' => '0px',
     'left'   => '20px',
     'right'  => '20px',
   ),
   'priority'    => 10,
 ) );

 Kirki::add_field( 'mt_bar_head_margin_top', array(
   'type'        => 'dimension',
   'settings'    => 'mt_bar_head_margin_top',
   'label'       => esc_attr__( 'Margin Top', 'anews' ),
   'section'     => 'anews_header_bar_head',
   'default'     => '0px',
   'priority'    => 11,
 ) );


Kirki::add_field( 'mt_bar_menu', array(
'type'        => 'switch',
'settings'    => 'mt_bar_menu',
'label'       => esc_attr__( 'Menu Bar', 'anews' ),
'section'     => 'anews_header_bar_menu',
'default'     => 'on',
'priority'    => 10,
'choices'     => array(
  'on'  => esc_attr__( 'On', 'anews' ),
  'off' => esc_attr__( 'Off', 'anews' ),
),
) );

Kirki::add_field( 'mt_bar_menu_scheme', array(
'type'        => 'select',
'settings'    => 'mt_bar_menu_scheme',
'label'       => esc_attr__( 'Menu Bar Color Sheme', 'anews' ),
'section'     => 'colors_menu',
'default'     => 'light',
'transport'   => 'auto',
'priority'    => 2,
'choices'     => array(
'dark' => esc_attr__( 'Dark', 'anews' ),
'light' => esc_attr__( 'Light', 'anews' ),
),
) );

Kirki::add_field( 'mt_bar_menu_row', array(
'type'        => 'select',
'settings'    => 'mt_bar_menu_row',
'label'       => esc_attr__( 'Row Layout', 'anews' ),
'section'     => 'anews_header_bar_menu',
'default'     => 'full',
'priority'    => 10,
'choices'     => array(
 'full' => esc_attr__( 'Full Width', 'anews' ),
 'stretched' => esc_attr__( 'Full Width Stretched', 'anews' ),
 'box' => esc_attr__( 'Boxed', 'anews' ),
),
) );

Kirki::add_field( 'mt_bar_menu_small_menu', array(
'type'        => 'select',
'settings'    => 'mt_bar_menu_small_menu',
'label'       => esc_attr__( 'Small Menu Button', 'anews' ),
'section'     => 'anews_header_bar_menu',
'default'     => '1',
'priority'    => 10,
'choices'     => array(
 '1' => esc_attr__( 'Disabled', 'anews' ),
 '2' => esc_attr__( 'Before Logo', 'anews' ),
 '3' => esc_attr__( 'After Logo', 'anews' ),
 '4' => esc_attr__( 'Menu Right Area', 'anews' ),
),
) );

Kirki::add_field( 'mt_bar_menu_nav_align', array(
 'type'        => 'select',
 'settings'    => 'mt_bar_menu_nav_align',
 'label'       => esc_attr__( 'Nav', 'anews' ),
 'section'     => 'anews_header_bar_menu',
 'default'     => 'left',
 'priority'    => 10,
 'choices'     => array(
   'left' => esc_attr__( 'Align Left', 'anews' ),
   'right' => esc_attr__( 'Align Right', 'anews' ),
   'center' => esc_attr__( 'Align Center', 'anews' ),
   '1' => esc_attr__( 'Disabled', 'anews' ),
 ),
) );

Kirki::add_field( 'mt_bar_menu_search', array(
'type'        => 'switch',
'settings'    => 'mt_bar_menu_search',
'label'       => esc_attr__( 'Search Icon', 'anews' ),
'section'     => 'anews_header_bar_menu',
'default'     => 'on',
'priority'    => 10,
'choices'     => array(
 'on'  => esc_attr__( 'On', 'anews' ),
 'off' => esc_attr__( 'Off', 'anews' ),
),
));

Kirki::add_field( 'mt_bar_menu_social', array(
'type'        => 'switch',
'settings'    => 'mt_bar_menu_social',
'label'       => esc_attr__( 'Social Icons', 'anews' ),
'section'     => 'anews_header_bar_menu',
'default'     => 'off',
'priority'    => 10,
'choices'     => array(
  'on'  => esc_attr__( 'On', 'anews' ),
  'off' => esc_attr__( 'Off', 'anews' ),
),
));


Kirki::add_field( 'mt_bar_menu_clock', array(
'type'        => 'switch',
'settings'    => 'mt_bar_menu_clock',
'label'       => esc_attr__( 'Clock', 'anews' ),
'section'     => 'anews_header_bar_menu',
'default'     => 'off',
'priority'    => 10,
'choices'     => array(
  'on'  => esc_attr__( 'On', 'anews' ),
  'off' => esc_attr__( 'Off', 'anews' ),
),
));

Kirki::add_field( 'mt_bar_menu_date', array(
 'type'        => 'switch',
 'settings'    => 'mt_bar_menu_date',
 'label'       => esc_attr__( 'Date', 'anews' ),
 'section'     => 'anews_header_bar_menu',
 'default'     => 'off',
 'priority'    => 10,
 'choices'     => array(
   'on'  => esc_attr__( 'On', 'anews' ),
   'off' => esc_attr__( 'Off', 'anews' ),
 ),
));

Kirki::add_field( 'mt_bar_menu_padding', array(
 'type'        => 'spacing',
 'settings'    => 'mt_bar_menu_padding',
 'label'       => esc_attr__( 'Padding', 'anews' ),
 'section'     => 'anews_header_bar_menu',
 'default'     => array(
   'top'    => '0px',
   'bottom' => '0px',
   'left'   => '20px',
   'right'  => '20px',
 ),
 'priority'    => 10,
) );

Kirki::add_field( 'mt_bar_menu_margin_top', array(
 'type'        => 'dimension',
 'settings'    => 'mt_bar_menu_margin_top',
 'label'       => esc_attr__( 'Margin Top', 'anews' ),
 'section'     => 'anews_header_bar_menu',
 'default'     => '0px',
 'priority'    => 11,
) );

Kirki::add_field( 'anews_theme_options[menu_fixed]', array(
 'type'        => 'select',
 'settings'    => 'anews_theme_options[menu_fixed]',
 'label'       => esc_attr__( 'Fixed Header', 'anews' ),
 'section'     => 'anews_header_other',
 'default'     => 'mt-fixed-up',
 'option_type' => 'option',
 'priority'    => 10,
 'multiple'    => 1,
 'choices'     => array(
   'mt-fixed-up' => esc_attr__( 'Show When Scroll Up', 'anews' ),
   'mt-fixed-always' => esc_attr__( 'Show Always', 'anews' ),
   'mt-fixed-disabled' => esc_attr__( 'Disable', 'anews' ),
 ),
 ));

 Kirki::add_field( 'mt_bar_fixed_padding', array(
  'type'        => 'spacing',
  'settings'    => 'mt_bar_fixed_padding',
  'label'       => esc_attr__( 'Fixed Menu Padding', 'anews' ),
  'section'     => 'anews_header_other',
  'default'     => array(
    'top'    => '0px',
    'bottom' => '0px',
    'left'   => '20px',
    'right'  => '20px',
  ),
  'priority'    => 10,
 ) );

 Kirki::add_field( 'mt_bar_fixed_height', array(
   'type'        => 'dimension',
   'settings'    => 'mt_bar_fixed_height',
   'label'       => esc_attr__( 'FIX (Header height before fixed menu)', 'anews' ),
   'section'     => 'anews_header_other',
   'default'     => '57px',
   'priority'    => 11,
 ) );

?>
