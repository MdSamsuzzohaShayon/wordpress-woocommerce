<?php 

// // DISPLAY TITLE AND TAG IN HEADER
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



    wp_enqueue_style( 'stylesheet', get_stylesheet_uri());  //<!-- THIS IS FOR STYLE.CSS-->

}




function themeslug_enqueue_script() {


//     // FOR CALLING IT BEFORE ENDING BODY TAG SET LAST PERAMETER TRUE
    // wp_enqueue_script( 'jquery');
    // wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . 'bootstrap.min.js', array( 'jquery' ) );






	wp_enqueue_script( 'jquery-js',get_theme_file_uri("/assets/js/jquery-1.11.1.min.js"), array(), 'v1.1.0' , true);

	wp_enqueue_script( 'bootstrapjs',get_theme_file_uri("/assets/js/bootstrap.min.js"), array(), 'v1.1.0' , true);
    wp_enqueue_script( 'bootstraphoverdropdownjs',get_theme_file_uri("/assets/js/bootstrap-hover-dropdown.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'owljs',get_theme_file_uri("/assets/js/owl.carousel.min.js"), array(), 'v1.1.0' , true);
    wp_enqueue_script( 'echojs',get_theme_file_uri("/assets/js/echo.min.js"), array(), 'v1.1.0' , true);
    

	wp_enqueue_script( 'jqueryjs',get_theme_file_uri("/assets/js/jquery.easing-1.3.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'bootstrapsliderjs',get_theme_file_uri("/assets/js/bootstrap-slider.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'jqueryrateitjs',get_theme_file_uri("/assets/js/jquery.rateit.min.js"), array(), 'v1.1.0' , true);
    wp_enqueue_script( 'lightboxjs',get_theme_file_uri("/assets/js/lightbox.min.js"), array(), 'v1.1.0' , true);
    
    wp_enqueue_script( 'bootstrapselectjs',get_theme_file_uri("/assets/js/bootstrap-select.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'wowjs',get_theme_file_uri("/assets/js/wow.min.js"), array(), 'v1.1.0' , true);
	wp_enqueue_script( 'scriptsjs',get_theme_file_uri("/assets/js/scripts.js"), array(), 'v1.1.0' , true);

    


        
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );



// REGISTER MENU SUPPORT
function ecomMenu(){
    // Checking for menu exist or not
    if(function_exists('register_nav_menu')){ 
        register_nav_menu('main_menu', __('My Main Menu', 'ecom'));
        register_nav_menu('top_menu', __('Top Menu', 'ecom'));
        // main_menu = id
        // My Main Menu = name 
        // ecom = Text Domain(we set that in style.css)
    }
}
add_action('init', 'ecomMenu');
// init = the location



// REGISTER IMAGE SUPPORT
add_theme_support("post-thumbnails", array('post', 'page')); // For only post and page
set_post_thumbnail_size(300, 200, true); //4 parameters we can pass
add_image_size('myFeaturedImage', 1360, 768, true);


// WIDGET SUPPORT
function ecom_widgets(){
    register_sidebar(array(
        'name' => esc_html__('Footer Widget', 'ecom'),
        'description' => esc_html__('This is description area for widget', 'ecom'),
        'id' => 'footer_widget_1', 
        'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3">',
        'after_widget' => '</div>',
        'before_title' => '<div class="module-heading"> <h4 class="module-title">',  // ALL TAG BEFORE THE CONTENT
        'after_title' => '</h4></div>' // ALL TAG AFTER THE CONTENT
    ));
}

add_action('widgets_init', 'ecom_widgets');

?>