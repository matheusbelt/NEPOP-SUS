<?php
/**
 * Template Name: Blog
 *
 */

get_header(); ?>
<section class="container">
	<aside class="col-md-3" id="sidebar-esquerda">
		<?php include(TEMPLATEPATH . "/inc/menu-lateral.php"); ?>
	</aside>
		<h1 class="titulo-apresent letrazul verdana">
			<?php the_title(); ?>
		</h1>
	<div class="col-md-9">
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged );
		$wp_query = new WP_Query($args);
		while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/posts', get_post_format() ); ?>

		<?php endwhile; ?>
		<div class="row-fluid post-pagination row">
			<div class="span12">
				<div class="pagination"><?php next_posts_link( '&larr; Mais antigos', $wp_query ->max_num_pages); ?></div>
				<div class="span12"></div> 
				<div class="pagination"><?php previous_posts_link( 'Mais recentes &rarr;' ); ?></div>
			</div>
		</div>

	</div>

</section>

<?php get_footer(); ?>