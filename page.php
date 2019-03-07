<?php get_header(); ?>

    <div class="body-content">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="blog-page">
                    <div class="col-md-9">
                    <!-- FOR USING WOOCOMMERCE WE NEED TO CALL WHILE LOOP THIS WAY -->
                    <?php while(have_posts()) : the_post(); ?>
                       <?php get_template_part("template-parts/content/content", "page-content"); ?>
                       <?php endwhile; ?>
                    </div>
                   <!-- //THIS IS RIGHT SIDEBAR AREA -->
                   <?php get_template_part("template-parts/sidebar/right-sidebar", "sidebar-right"); ?>

                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>