<?php
function anews_customize_colors($wp_customize){

  $wp_customize->add_section('header_ad_menu', array(
    'title'    	=> esc_html__('Header Ad Menu', 'anews'),
    'priority' => 1,
    'panel'  => 'magazin_ads',
  ));


  $wp_customize->add_panel( 'colors_settings', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'title'    	=> esc_html__('Style', 'anews'),
  ));

  $wp_customize->add_section('general_style_settings', array(
    'title'    	=> esc_html__('General', 'anews'),
    'panel'  => 'colors_settings'
  ));

  // GENERAL COLORS //
  $wp_customize->add_section('colors_general', array(
    'title'    	=> esc_html__('General Colors', 'anews'),
    'panel'  => 'colors_settings'
  ));


  // GENERAL COLORS //
  $wp_customize->add_section('colors_general', array(
    'title'    	=> esc_html__('General Colors', 'anews'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('anews_theme_options[colors_default]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'anews_theme_options[colors_default]', array(
      'label'    => esc_html__('Site Color', 'anews'),
      'section'  => 'general_style_settings',
      'settings' => 'anews_theme_options[colors_default]',
  )));


  // MENU COLORS //
  $wp_customize->add_section('colors_menu', array(
    'title'    	=> esc_html__('Header Colors', 'anews'),
    'panel'  => 'colors_settings'
  ));

  // Content COLORS //
  $wp_customize->add_section('colors_content', array(
    'title'    	=> esc_html__('Content Colors', 'anews'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('anews_theme_options[colors_button]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'anews_theme_options[colors_button]', array(
      'label'    => esc_html__('Form Button', 'anews'),
      'section'  => 'colors_content',
      'settings' => 'anews_theme_options[colors_button]',
  )));

  // FOOTER COLORS //
  $wp_customize->add_section('colors_footer', array(
    'title'    	=> esc_html__('Footer Colors', 'anews'),
    'panel'  => 'colors_settings'
  ));

  // MENU COLORS //
  $wp_customize->add_section('colors_other', array(
    'title'    	=> esc_html__('Other Colors', 'anews'),
    'panel'  => 'colors_settings'
  ));

}

add_action('customize_register', 'anews_customize_colors');

Kirki::add_field( 'global_theme_options[header_ad_menu]', array(
  'type'        => 'code',
  'settings'    => 'global_theme_options[header_ad_menu]',
  'label'       =>  esc_html__( 'YOUR AD CODE', 'anews' ),
  'section'     => 'header_ad_menu',
  'default'     => '',
  'priority'    => 1,
  'sanitize_callback' => 'do_not_filter_anything',
  'option_type' => 'option',
  'choices'     => array(
    'language' => 'css, html, javascript',
    'theme'    => 'monokai',
    'height'   => 250,
  ),
));

Kirki::add_field( 'anews_theme_options[themecolor]', array(
 'type'        => 'select',
 'settings'    => 'anews_theme_options[themecolor]',
 'label'       => esc_html__( 'Content Color Sheme', 'anews' ),
 'section'     => 'colors_content',
 'default'     => 'whitesmoke',
 'priority'    => 1,
 'option_type'           => 'option',
 'choices'     => array(
   'whitesmoke'   => esc_attr__( 'WhiteSmoke', 'anews' ),
   'white' => esc_attr__( 'White', 'anews' ),
   'color' => esc_attr__( 'Color or Image Background', 'anews' )
 ),
));

Kirki::add_field( 'radius', array(
'type'        => 'radio-buttonset',
'settings'    => 'radius',
'label'       => esc_html__( 'Border Radius', 'anews' ),
'section'     => 'general_style_settings',
'default'     => '5px',
'priority'    => 1,
'option_type' => 'option',
'choices'     => array(
  '0px'   => esc_attr__( '0px', 'anews' ),
  '5px' => esc_attr__( '5px', 'anews' ),
  '25px' => esc_attr__( '25px', 'anews' ),
),
));


Kirki::add_field( 'zoom', array(
  'type'        => 'radio-buttonset',
  'settings'    => 'zoom',
  'label'       => esc_html__( 'Image Hover Zoom', 'anews' ),
  'section'     => 'general_style_settings',
  'default'     => 'on',
  'priority'    => 1,
  'option_type'           => 'option',
  'choices'     => array(
   'on'   => esc_attr__( 'Zoom On', 'anews' ),
   'off' => esc_attr__( 'Zoom Off', 'anews' )
  ),
));

Kirki::add_field( 'mt_colors_default', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_default',
  'label'       => esc_attr__( 'Site Color', 'anews' ),
  'section'     => 'general_style_settings',
  'option_type' => 'option',
  'priority'    => 1,
  'choices'     => array(
      'color'    => esc_attr__( 'Color', 'anews' ),
      'textinbackground'   => esc_attr__( 'Text If Background', 'anews' ),
  ),
  'default'     => array(
      'color'    => '',
      'textinbackground'    => '',
  ),
));

Kirki::add_field( 'mt_colors_header', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_header',
  'label'       => esc_attr__( 'Top Bar', 'anews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 4,
  'choices'     => array(
      'background'    => esc_attr__( 'Background', 'anews' ),
      'link'   => esc_attr__( 'Link', 'anews' ),
      'hover'  => esc_attr__( 'Hover', 'anews' ),
      'bold'  => esc_attr__( 'Bold', 'anews' ),
  ),
  'default'     => array(
      'background'    => '',
      'link'    => '',
      'hover'    => '',
      'bold'    => ''
  ),
));


Kirki::add_field( 'mt_colors_menu_link', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_link',
  'label'       => esc_attr__( 'Menu Links', 'anews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 4,
  'choices'     => array(
      'text'    => esc_attr__( 'Links', 'anews' ),
      'text_hover'   => esc_attr__( 'Hover', 'anews' ),
      'border'  => esc_attr__( 'Background', 'anews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_hover'    => '',
      'border'    => '',
  ),
));

Kirki::add_field( 'mt_colors_menu_link_sub', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_link_sub',
  'label'       => esc_attr__( 'Menu Sub Links', 'anews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 4,
  'choices'     => array(
      'text'    => esc_attr__( 'Lines', 'anews' ),
      'text_hover'   => esc_attr__( 'Hover', 'anews' ),
      'background'  => esc_attr__( 'Background', 'anews' ),
      'background_hover'  => esc_attr__( 'Hover', 'anews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_hover'    => '',
      'background'    => '',
      'background_hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_menu_button', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_button',
  'label'       => esc_attr__( 'Menu Smart Button', 'anews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 4,
  'choices'     => array(
      'text'    => esc_attr__( 'Lines', 'anews' ),
      'text_hover'   => esc_attr__( 'Hover', 'anews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_menu_search', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_search',
  'label'       => esc_attr__( 'Menu Search', 'anews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 4,
  'choices'     => array(
      'text'    => esc_attr__( 'Text', 'anews' ),
      'text_hover'   => esc_attr__( 'Hover', 'anews' ),
      'background'  => esc_attr__( 'Background', 'anews' ),
      'background_hover'  => esc_attr__( 'Hover', 'anews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_hover'    => '',
      'background'    => '',
      'background_hover'    => '',
  ),
));


Kirki::add_field( 'mt_colors_menu_smart', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_smart',
  'label'       => esc_attr__( 'Smart Menu', 'anews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 100,
  'choices'     => array(
      'background'    => esc_attr__( 'Background', 'anews' ),
      'link'   => esc_attr__( 'Link', 'anews' ),
      'hover'  => esc_attr__( 'Hover', 'anews' ),
      'out'  => esc_attr__( 'Out', 'anews' ),
  ),
  'default'     => array(
      'background'    => '',
      'link'    => '',
      'hover'    => '',
      'out'    => '',
  ),
));

Kirki::add_field( 'anews_theme_options[background_color_content]', array(
  'type'        => 'color',
  'settings'    => 'anews_theme_options[background_color_content]',
  'label'       => esc_html__( 'Content Background', 'anews' ),
  'section'     => 'colors_content',
  'default'     => '',
  'option_type' => 'option',
  'priority'    => 1,
) );

Kirki::add_field( 'mt_colors_footer_social', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_social',
  'label'       => esc_attr__( 'Footer Social Icons', 'anews' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
  'choices'     => array(
      'icon'    => esc_attr__( 'Icon', 'anews' ),
      'hover'   => esc_attr__( 'Hover', 'anews' ),
      'background'   => esc_attr__( 'Background', 'anews' ),
      'background_hover'  => esc_attr__( 'Hover', 'anews' ),
  ),
  'default'     => array(
      'icon'    => '',
      'hover'    => '',
      'background'    => '',
      'background_hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_footer_bottom', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_bottom',
  'label'       => esc_attr__( 'Footer Colors', 'anews' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
  'choices'     => array(
      'background'    => esc_attr__( 'Background', 'anews' ),
      'text'   => esc_attr__( 'Text', 'anews' ),
      'link'  => esc_attr__( 'Link', 'anews' ),
      'hover'  => esc_attr__( 'Hover', 'anews' ),
  ),
  'default'     => array(
      'background'    => '',
      'text'    => '',
      'link'    => '',
      'hover'    => '',
  ),
));

  Kirki::add_field( 'colors_post_share', array(
    'type'        => 'multicolor',
    'settings'    => 'colors_post_share',
    'label'       => esc_attr__( 'Post Share Count', 'anews' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'anews' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'anews' ),
        'icon'   => esc_attr__( 'Icon', 'anews' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'anews' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_dark'    => '',
        'icon'    => '',
        'icon_dark'    => '',
    ),
  ));
  Kirki::add_field( 'colors_post_view', array(
    'type'        => 'multicolor',
    'settings'    => 'colors_post_view',
    'label'       => esc_attr__( 'Post View Count', 'anews' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'anews' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'anews' ),
        'icon'   => esc_attr__( 'Icon', 'anews' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'anews' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_dark'    => '',
        'icon'    => '',
        'icon_dark'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_cat', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_cat',
    'label'       => esc_attr__( 'Post List Category', 'anews' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'anews' ),
        'background'   => esc_attr__( 'Background', 'anews' ),
    ),
    'default'     => array(
        'text'    => '',
        'background'    => '',
    ),

  ));





function mytheme_kirki_fieldsz( $fields ) {

  $fields[] =  array(
    'type'        => 'background',
    'settings'    => 'mt_bg_all',
    'label'       => esc_attr__( 'Background', 'anews' ),
    'section'     => 'general_style_settings',
    'priority'    => 1,
    'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'center-bottom',
        ),
        'output'      => array(
          array(
            'element' => 'body',
            'suffix'   => ' !important',
          ),
        )
  );

  $fields[] =  array(
    'type'        => 'background',
    'settings'    => 'mt_bg_header',
    'label'       => esc_attr__( 'Header', 'anews' ),
    'section'     => 'colors_menu',
    'priority'    => 1,
    'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'center-bottom',
        ),
        'output'      => array(
          array(
            'element' => '.mt-header',
            'suffix'   => ' !important',
          ),
        ),
  );

  $fields[] =  array(
    'type'        => 'multicolor',
    'settings'    => 'mt_bg_header_in',
    'label'       => esc_attr__( 'Header Bar Background', 'anews' ),
    'section'     => 'colors_menu',
    'priority'    => 3,
    'choices'     => array(
        'top'    => esc_attr__( 'Top Bar', 'anews' ),
        'head'   => esc_attr__( 'Head Bar', 'anews' ),
        'menu'   => esc_attr__( 'Menu Bar', 'anews' ),
    ),
    'default'     => array(
        'top'    => '',
        'head'    => '',
        'menu'    => '',
    ),
    'output'    => array(
      array(
        'choice'    => 'top',
        'element'   => '.mt-top-bar.box > div > div > div, .mt-top-bar.full > div, .mt-top-bar.stretched > div',
        'property'  => 'background-color',
      ),
      array(
        'choice'    => 'head',
        'element'   => '.mt-head-bar.box > div > div > div, .mt-head-bar.full > div, .mt-head-bar.stretched > div',
        'property'  => 'background-color',
      ),
      array(
        'choice'    => 'menu',
        'element'   => '.mt-menu-bar.box > div > div > div, .mt-menu-bar.full > div, .mt-menu-bar.stretched > div',
        'property'  => 'background-color',
      ),
    )
  );

  $fields[] =  array(
    'type'        => 'color',
    'settings'    => 'mt_bg_fixed',
    'label'       => esc_attr__( 'Fixed Menu Background', 'anews' ),
    'section'     => 'colors_menu',
    'priority'    => 3,
    'output'    => array( array(
            'element'  => '.fixed-on .mt-bar.mt-menu-bar',
            'property' => 'background-color',
        ))

  );

  return $fields;
}
add_filter( 'kirki/fields', 'mytheme_kirki_fieldsz' );



?>
