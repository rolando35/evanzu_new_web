
<?php

// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', 
  					array(), 
  					'4.5.2'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');


// Incluir Bootstrap JS y dependencia popper
function bootstrap_js() {
	wp_enqueue_script( 'popper_js', 
  					'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', 
  					array(), 
  					'1.16.0', 
  					true); 
	wp_enqueue_script( 'bootstrap_js', 
  					'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', 
  					array('jquery','popper_js'), 
  					'4.5.2', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');


//llamar al archivo de custimización
require_once(trailingslashit(get_template_directory()) . 'inc/customize.php');


//menu

add_action( 'after_setup_theme', 'raiola_registrar_menu' );
function raiola_registrar_menu() {
    register_nav_menu( 'menu-principal', 'Menu Principal' );
}

//clase css

add_filter('nav_menu_css_class' , 'raiola_nav_class' , 10 , 2);
 
function raiola_nav_class($classes, $item){
    $classes[] = 'nav-link';
    return $classes;
}

// css personalizado
add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles');

function custom_enqueue_styles() {
	wp_enqueue_style( 'custom-style', 
					  get_stylesheet_directory_uri() . '/css/custom.css', 
					  array(), 
					  wp_get_theme()->get('Version')
					);
}

// Mansonry

function bps_masonry () {
	wp_enqueue_script('masonry-js', '//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'));
	wp_enqueue_script('masonry-init', get_stylesheet_directory_uri() . '/js/masonry-init.js', array('masonry'), 1, true); 
	}
	
	add_action( 'wp_enqueue_scripts', 'bps_masonry' );



?>
