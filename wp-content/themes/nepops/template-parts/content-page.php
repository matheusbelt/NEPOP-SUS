<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="titulo-apresent letrazul verdana margin-top">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="imagem-single">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="conteudo-pages">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->