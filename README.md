 ## [Wordpress Theme Development Step By Step](https://codex.wordpress.org/Theme_Development)

[Create a basic templete](https://codex.wordpress.org/Theme_Development#Basic_Templates)

 1. create a style.css [comment the details there](https://codex.wordpress.org/Theme_Development)
 2. Thembnail of website name **screenshot.png** 
 3. add before all css, js and images ```<?php echo get_stylesheet_directory_uri(); ?>```  [know more](https://codex.wordpress.org/Function_Reference)
 4. create a folder **inc**
 5. cut header from index.php [create](https://codex.wordpress.org/Theme_Development#Template_File_Checklist) **header.php** in root and paste the header code
 6. in index.php above all code ```<?php get_header(); ?>``` [*know more*](https://codex.wordpress.org/Function_Reference/get_header)
 7. cut footer code and make **footer.php** paste the code [know mone]https://codex.wordpress.org/Function_Reference/get_footer)
 8. add this code <?php get_footer(); ?> below all code of index.php
 