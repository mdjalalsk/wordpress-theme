<?php
// add css js bootstrapjs css 
function sunflower_css_js_fileAdd()
{
	// style.cssfileadd 
	wp_enqueue_style('sunflower-style', get_stylesheet_uri());
	// add bootstrap min.css 
	wp_register_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), 'v5.3.0-alpha1', 'all');
	wp_enqueue_style('bootstrap');
	// add custom css 
	wp_register_style('custom', get_template_directory_uri() . "/assets/css/custom.css", array(), '1.0.0', 'all');
	wp_enqueue_style('custom');
	// add default jquery 
	wp_enqueue_script('jquery');
	// add bootstrap bundle.js 
	wp_enqueue_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array(), 'v5.3.0-alpha1', 'true');
	wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts', 'sunflower_css_js_fileAdd');

// Google Fonts Enqueue
function sunflower_add_google_fonts(){
	wp_enqueue_style('sunflower_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'sunflower_add_google_fonts');
 // various coustomize theme settings and add par