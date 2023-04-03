<?php
// various coustomize theme settings and add par
function addchange_customizer_register($wp_customize)
{
	// coustomize logo settings 
	$wp_customize->add_section('sunflower_header_area',array(
		'title' =>__('Header Area','jalal'),
		'discription' => 'If you want to update your header area,you can do it here.'
	));
	$wp_customize->add_setting('sunflower_logo', array(
		'default' => get_bloginfo('template_directory') .'/assets/img/logo.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'sunflower_logo', array(
		'label' => 'Logo Upload',
		'description' => 'if you wont to change or updete your logo, you can do it here.',
		'setting' => 'sunflower_logo',
		'section' => 'sunflower_header_area',

	)));
	//end logo setting part

	 // Menu Position Option
	 $wp_customize->add_section('sunflower_menu_option', array(
		'title' => __('Menu Position Option', 'jalal'),
		'description' => 'If you interested to change your menu position you can do it.'
	  ));
	
	  $wp_customize->add_setting('sunflower_menu_position', array(
		'default' => 'right_menu',
	  ));
	
	  $wp_customize-> add_control('sunflower_menu_position', array(
		'label' => 'Menu Position',
		'description' => 'Select your menu position',
		'setting' => 'sunflower_menu_position',
		'section' => 'sunflower_menu_option',
		'type' => 'radio',
		'choices' => array(
		  'left_menu' => 'Left Menu',
		  'right_menu' => 'Right Menu',
		  'center_menu' => 'Center Menu',
		)
	  ));
	  //end manu position

	    // start Footer Option
  $wp_customize->add_section('sunflower_footer_option', array(
    'title' => __('Footer Option', 'jalal'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('sunflower_copyright_section', array(
    'default' => '&copy; Copyright 2021 | Sunflower BD',
  ));

  $wp_customize-> add_control('sunflower_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'sunflower_copyright_section',
    'section' => 'sunflower_footer_option',
  ));
  //end footer part  
}
add_action('customize_register', 'addchange_customizer_register');
// end logo customize 