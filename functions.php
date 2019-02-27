<?php 

// DISPLAY TITLE AND TAG IN HEADER
add_theme_support('title-tag');




function themeslug_enqueue_style() {
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri("/assets/css/bootstrap.min.css"), array(), 'v4.0.0' ); 
    wp_enqueue_style( 'main-css', get_theme_file_uri("/assets/css/main.css"), array(), 'v1.0.0' );
    
    wp_enqueue_style( 'blue-css', get_theme_file_uri("/assets/css/blue.css"), array(), 'v1.0.0' ); 
    wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri("/assets/css/owl.carousel.css"), array(), 'v1.0.0' ); 
    wp_enqueue_style( 'owl-transitions-css', get_theme_file_uri("/assets/css/owl.transitions.css"), array(), 'v1.0.0' ); 


    wp_enqueue_style( 'animate.min.css', get_theme_file_uri("/assets/css/animate.min.css"), array(), 'v1.0.0' ); 
    wp_enqueue_style( 'rateit.css', get_theme_file_uri("/assets/css/rateit.css"), array(), 'v1.0.0' ); 
    wp_enqueue_style( 'bootstrap-select-css', get_theme_file_uri("/assets/css/bootstrap-select.min.css"), array(), 'v1.0.0' ); 

    
    wp_enqueue_style( 'font-awesome-css', get_theme_file_uri("/assets/css/font-awesome.css"), array(), 'v1.0.0' ); 
}




function themeslug_enqueue_script() {
    /*


    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.rateit.min.js"></script>


    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/lightbox.min.js"></script>



    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap-select.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/scripts.js"></script>
    */
    wp_enqueue_script( 'jquery',get_theme_file_uri("/assets/js/jquery-1.11.1.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'bootstrap-js',get_theme_file_uri("/assets/js/bootstrap.min.js"), array(), 'v1.1.0' , true);
    wp_enqueue_script( 'bootstrap-hover-dropdown-js',get_theme_file_uri("/assets/js/bootstrap-hover-dropdown.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'owl-carousel-min-js',get_theme_file_uri("/assets/js/owl.carousel.min.js"), array(), 'v1.1.0' , true);
    wp_enqueue_script( 'echo-js',get_theme_file_uri("/assets/js/echo.min.js"), array(), 'v1.1.0' , true);
    

	wp_enqueue_script( 'jquery-easing-js',get_theme_file_uri("/assets/js/jquery.easing-1.3.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'bootstrap-slider-js',get_theme_file_uri("/assets/js/bootstrap-slider.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'jquery-rateit-js',get_theme_file_uri("/assets/js/jquery.rateit.min.js"), array(), 'v1.1.0' , true);
    wp_enqueue_script( 'lightbox-js',get_theme_file_uri("/assets/js/lightbox.min.js"), array(), 'v1.1.0' , true);
    
    wp_enqueue_script( 'bootstrap-select-js',get_theme_file_uri("/assets/js/bootstrap-select.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'wow-js',get_theme_file_uri("/assets/js/wow.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'scripts-js',get_theme_file_uri("/assets/js/scripts.js"), array(), 'v1.1.0' , true);

    


        
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

?>