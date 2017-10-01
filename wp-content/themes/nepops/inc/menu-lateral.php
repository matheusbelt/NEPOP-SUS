<h1 class="titulo-apresent verdana letrazul titulo-sidebar"><?php the_title(); ?></h1>

<?php
$args = array(
    'menu' => 'Lateral',
    'theme_location' => 'lateral',
    'container' => false
);
wp_nav_menu( $args );
?> 