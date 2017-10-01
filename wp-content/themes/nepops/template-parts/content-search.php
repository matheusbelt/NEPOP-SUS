<article id="post-<?php the_ID(); ?>" class="search-article">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="titulo-apresent letrazul"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_date(); ?>
		</div><!-- .entry-meta -->		
	</header><!-- .entry-header -->
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php endif; ?>
</article><!-- #post-## -->
