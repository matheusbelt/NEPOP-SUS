<?php
/**
 * Template Name: Noticias
 *
 */
get_header();
?>

<?php $noticias = get_the_ID(); ?>
<div class="container">
	<aside class="col-md-3" id="sidebar-esquerda">
		<?php include(TEMPLATEPATH . "/inc/menu-final.php"); ?>
	</aside>
	
		<?php 
			get_template_part( 'template-parts/loop', 'category' );
		 ?>
</div>

<?php get_footer(); ?>