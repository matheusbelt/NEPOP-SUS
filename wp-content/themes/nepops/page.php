<?php get_header(); ?>
<div class="container mil">
	<aside class="col-md-3" id="sidebar-esquerda">
		<?php include(TEMPLATEPATH . "/inc/menu-lateral.php"); ?>
	</aside>
	<div id="primary" class="content-area">
		<main class="col-md-9">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();