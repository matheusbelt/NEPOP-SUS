<article class="col-xs-12" id="content-ini">

	<div class="img-ini col-md-3">
		<div class="col-md-10 thumbnails">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
	</div>
		<div class="post-ini-header col-md-9">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</div><!-- .entry-header -->

		<div class="post-ini col-md-9">
			<?php the_excerpt(); ?>
		</div>

</article><!-- #post-## -->