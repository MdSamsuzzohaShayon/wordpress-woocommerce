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
    wp_enqueue_style( 'woo-commerce-css', get_theme_file_uri("/assets/css/woocommerce.css"), array(), 'v1.0.0' ); 


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
//add_theme_support("post-thumbnails", array('post', 'page')); // For only post and page
// set_post_thumbnail_size(300, 200, true); //4 parameters we can pass
// add_image_size('myFeaturedImage', 1360, 768, true);


// WIDGET SUPPORT
function ecom_widgets(){
    register_sidebar(array(
        'name' => esc_html__('Footer Widget one', 'ecom'),
        'description' => esc_html__('This is description area for widget', 'ecom'),
        'id' => 'footer_widget_one', 
        'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3">',
        'after_widget' => '</div>',
        'before_title' => '<div class="module-heading"> <h4 class="module-title">',  // ALL TAG BEFORE THE CONTENT
        'after_title' => '</h4></div>' // ALL TAG AFTER THE CONTENT
    ));
    //CREATING ONE MORE WIDGET
    register_sidebar(array(
        'name' => esc_html__('Footer Widget two', 'ecom'),
        'description' => esc_html__('This is description area for widget', 'ecom'),
        'id' => 'footer_widget_two', 
        'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3">',
        'after_widget' => '</div>',
        'before_title' => '<div class="module-heading"> <h4 class="module-title">',  // ALL TAG BEFORE THE CONTENT
        'after_title' => '</h4></div>' // ALL TAG AFTER THE CONTENT
    ));
}

add_action('widgets_init', 'ecom_widgets');



// theme support and style for woocommerce plugin
function ecom_woocommerce_support(){
    add_theme_support( 'woocommerce' );
}

add_action("after_setup_theme", "ecom_woocommerce_support");
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie', 'product' ) ); // THIS WILL ADD FEATURE PHOTOS FOR THIS ('post', 'page', 'movie', 'product') 4 PAGE
set_post_thumbnail_size(300, 200, true); //4 parameters we can pass
add_image_size('myFeaturedImage', 1360, 768, true);





//GETTING 4,3,5 PRODUCTS
//https://docs.woocommerce.com/document/woocommerce-shortcodes/
if(!function_exists('loop_columns_3')){
    function loop_columns_3(){
        return 3; //RETURNS 3 PRODUCTS
    }
}
add_filter('loop_shop_columns', 'loop_columns_3');






// REMOVE THE BREADCURMS
function woo_remove_breadcurms(){
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0); 
}
add_action('init', 'woo_remove_breadcurms');









//CHANGE UL LI OF BREADCRUMS DEFAULT
// https://docs.woocommerce.com/document/customise-the-woocommerce-breadcrumb/
function ecom_woocommerce_breadcrum(){
    return array(
        'delimiter' => ' &#47; ',
        'wrap_before' => '<div class="breadcrumb-inner"><ul class="list-inline list-unstyled">',
        'wrap_after' => '</ul></div>',
        'before' => ' ',
        'after' => ' ',
        'home' => _x('Home', 'breadcrum', 'woocommerce')
    );
}
add_filter('woocommerce_breadcrumb_defaults', 'ecom_woocommerce_breadcrum');





// REMOVE ORDERING 
function woo_remove_ordering(){
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}
add_action('init', 'woo_remove_ordering');


//Showing 1–12 of 17 results WILL BE GONE
// REMOVE RESULT 
function woo_remove_result(){
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 ); 
}
add_action('init', 'woo_remove_result');


// REMOVE PAGINATION 
function woo_remove_pagination(){
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
}
add_action('init', 'woo_remove_pagination');



//CREATE CUSTOM PAGINATION
function ecom_pagination(){
    global $wp_query;
    if($wp_query->max_num_pages <= 1) return;

    $big = 999999999;

    $pages = paginate_links(array(
        'base'         => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'       => '?paged=%#%',
        'current'      => max( 1, get_query_var('paged') ),
        'total'        => $wp_query->max_num_pages,
        'type'         => 'array',
        'prev_next'    => true,
        'prev_text'    =>("« prev"),
        'next_text'    => 'next »'
    ));

    if(is_array($pages)){
        $paged = ( get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        echo '<div class="pagination-container"> <ul class="list-inline list-unstyled">';
        foreach ($pages as $page){
            echo "<li>$page</li>";
        }
        echo '</ul></div>';
    }
}




// PRODUCT PER PAGE SHOW DROP DOWN
function ecom_catalog_page_ordering(){
    ?>


    <?php echo '<div class="lbl-cnt"> <span class="lbl"> Items Per Page: '?>
        <form action="" method="POST" name="results" class="woocommerce-ordering">
            <select name="woocommerce-sort-by-colums" id="woocommerce-sort-by-colums" class="sortBy" onchange="this.form.submit();">
    
    <?php
    if (isset($_POST['woocommerce-sort-by-columns']) && (($_COOKIE['shop_pageResults'] <> $_POST['woocommerce-sort-by-columns']))){
        $numberOfProductsPerPage = $_POST['woocommerce-sort-by-columns'];
    }else{
        $numberOfProductsPerPage = $_COOKIE['shop_pageResults'];
    }



    $shopCatalog_orderby = apply_filter('woocommerce_sortby_page', array(
        '20'    => __('20', 'woocommere'),
        '-1'    => __('All', 'woocommere'),
    ));




    foreach($shopCatalog_orderby as $sort_id => $sort_name)
        echo '<option value="' . $sort_id . '" ' . selected($numberOfProductsPerPage, $sort_id, true) . '>' . $sort_name . '</option>';
?>

            </select>
        </form>

<?php echo ' </span>' ?>

<?php 
}




// SET COOKIE IF NEED
function dl_sort_by_page($count){
    if(isset($_COOKIE['shop_pageResults'])){
        $count = $_COOKIE['shop_pageResults'];
    }
    if(isset($_POST['woocommerce-sort-by-columns'])){
        setCookie('shop_pageResults', $_PAGE['woocommerce-sort-by-columns'], time()+1209600, '/', 'www.your-domain-goes-here.com',false);
        $count = $_POST['woocommerce-sort-by-columns'];
    }
    return $count;
}
add_filter('loop_shop_per_page', 'dl_sort_by_page')


}




?>