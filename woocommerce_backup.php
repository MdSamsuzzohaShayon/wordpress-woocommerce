<?php get_header(); ?>

    <div class="body-content">
        <div class="container">
        <h1>I am from woocommerce.php</h1>
        <!-- DELETE WOOCOMMERCE.PHP FOR CHECKING PURPOSE AND RELOAD -->
            <div class="row" style="margin-top: 30px;">
                <div class="blog-page">
                    <div class="col-md-9">
                    <!-- //REMOVE WHILE LOOP AND ALL CONTENT INSIDE LOOP -->
                    <!-- <h1>Checkoing woocommerce</h1> -->
                    <?php woocommerce_content(); ?>
                    </div>
                   <!-- //THIS IS RIGHT SIDEBAR AREA -->
                   <?php get_template_part("template-parts/sidebar/right-sidebar", "sidebar-right"); ?>

                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>