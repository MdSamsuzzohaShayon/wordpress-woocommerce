 ## [Wordpress Theme Development Step By Step](https://codex.wordpress.org/Theme_Development)

[Create a basic templete](https://codex.wordpress.org/Theme_Development#Basic_Templates)

 1. create a style.css [comment the details there](https://codex.wordpress.org/Theme_Development)
 2. Thembnail of theme name **screenshot.png** 
 3. add before all css, js and images ```<?php echo get_stylesheet_directory_uri(); ?>```  [know more](https://codex.wordpress.org/Function_Reference)
 4. create a folder **inc**
 5. cut header from index.php [create](https://codex.wordpress.org/Theme_Development#Template_File_Checklist) **header.php** in root and paste the header code
 6. in index.php above all code ```<?php get_header(); ?>``` [*know more*](https://codex.wordpress.org/Function_Reference/get_header)
 7. cut footer code and make **footer.php** paste the code [know mone](https://codex.wordpress.org/Function_Reference/get_footer)
 8. add this code ```<?php get_footer(); ?>``` below all code of index.php
 9. cut sidebar code create one more file **sidebar.php** paste the code
 10. add ```<?php get_sidebar(); ?>``` inside **index.php** in place of [sidebar](https://developer.wordpress.org/reference/functions/get_sidebar/)
 12. before ending head tag [<?php wp_head(); ?>] [*know more*](https://codex.wordpress.org/Function_Reference/wp_head)
 13. before ending body tag ```<?php wp_footer(); ?>``` [*know more*](https://codex.wordpress.org/Function_Reference/wp_footer)
 14. wp-admin -> users -> your profile -> we can uncheck toolbar menu
 15. create new folder in root **template-parts** (*not necessary*)
 16. create more folder inside **template-parts** name **header, footer, sidebar** 
 17. ```<?php get_template_part( 'partials/content', 'page' ); ?>``` [*know more*](https://codex.wordpress.org/tr:Fonksiyon_Referans/get_template_part)
 18. in html beginnin tag ```<?php language_attributes(); ?> class="no-js no-svg"``` [see all](https://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29)
 19. title```<title><?php bloginfo("name"); ?></title>``` [know more about bloginfo](https://developer.wordpress.org/reference/functions/get_bloginfo/)
 20. create **functions.php** in root [*know more*](https://developer.wordpress.org/themes/basics/theme-functions/)
 21. dynamic title from **functions.php**  ```add_theme_support( "title-tag" )``` [**know more**](https://codex.wordpress.org/Theme_Features)
 22. secure url ```esc_url(get_stylesheet_directory_uri());``` [know more](https://codex.wordpress.org/Function_Reference/esc_url)
 23. add main **style.css** above wp_head() function ```<?php echo get_stylesheet_uri(); ?>``` [*know more*](https://codex.wordpress.org/Function_Reference/get_stylesheet_uri)
 24. wp-admin -> settings -> media *make everything blank* to first the site
 25. wp-admin -> settings -> permalinks -> *post name*




 