<?php get_header(); 
/*
Template Name: About Us
*/
?>

<?php while(have_posts()) : the_post(); ?>
    <div class="body-content">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="blog-page">
                    <div class="col-md-9">
                       <?php get_template_part("template-parts/content/content", "page-content"); ?>
                    </div>
                   <!-- //THIS IS RIGHT SIDEBAR AREA -->
                   <?php get_template_part("template-parts/sidebar/right-sidebar", "sidebar-right"); ?>

                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>