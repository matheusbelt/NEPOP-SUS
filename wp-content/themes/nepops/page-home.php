<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<div class="container" id="mil">
	<aside class="col-xs-3" id="sidebar-esquerda">
		<?php get_sidebar(); ?>
	</aside>
	<?php include(TEMPLATEPATH . "/inc/menu.php"); ?>
	
		<?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/posts', get_post_format() );
		endwhile;
		 ?>
	</section>
</div>


<?php get_footer(); ?>