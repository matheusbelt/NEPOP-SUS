<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php
    global $page, $paged;
    wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
    ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- stylesheet -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div class="container mil" id="header">
    <div id="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/nepop-logo.png" alt="VEPOP-SUS"></a>
    </div>
    <div class="titulo-header">
       <p class="titulo-header-principal verdana letrazul"> <?php bloginfo('name'); ?></p>
       <p class="titulo-header-secundario verdana letrazul"> <?php bloginfo('description'); ?></p>
    </div>
    
    <!-- Barra de pesquisa -->
    <div id="pesquisar">
        <form role="search" method="get" class="search-form" action="http://localhost/nepops/">
	       <label> 
		      <input type="search" id="search-field" placeholder="Buscar" value="" name="s" title="Pesquisar por:">
	       </label>
	       <button type="submit" id="search-submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </form>
    </div>
</div>
    <!-- header -->

    <nav id="header-menu"> 
        <div class="container mil-e-um">     
            <?php
                $args = array(
                    'menu' => 'Principal',
                    'theme_location' => 'menu-principal',
                    'container' => false
                );
                wp_nav_menu( $args );
            ?> 
        </div>
    </nav>
<div class="col-md-12 breadcrumb"><center><?php echo do_shortcode( '[breadcrumb]' ); ?></center></div>