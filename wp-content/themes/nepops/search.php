<?php get_header(); ?>
	<div class="container mil">
		<aside class="col-md-3" id="sidebar-esquerda">
			<?php include(TEMPLATEPATH . "/inc/menu-lateral.php"); ?>
		</aside>
		<div class="col-md-9 content-padding-left">
			<div id="primary" class="content-area search-list">
				<main id="main" class="site-main" role="main">
				<h1 class="titulo-apresent letrazul verdana" id="search-title"><?php printf( esc_html__( 'Resultados da Busca: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
					<?php
						if ( have_posts() ) {
							while ( have_posts() ) : the_post();
								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;
					} else {
						get_template_part( 'template-parts/content', 'none' );
					}
				?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- col-md-9 -->
	</div><!-- .container -->

<?php get_footer(); ?>
