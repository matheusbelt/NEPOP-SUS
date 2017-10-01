<?php get_header(); ?>

<div class="container" id="mil">
	<aside class="col-xs-3" id="sidebar-esquerda">
		<?php include(TEMPLATEPATH . "/inc/menu-lateral.php"); ?>
	</aside>
	<section id="inicial" class="col-xs-9">		
		<?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-page', get_post_format() );
		endwhile;
		 ?>
	</section>
</div>


<?php get_footer(); ?>