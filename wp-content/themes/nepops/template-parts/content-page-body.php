<article>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div>' . __( 'Pages:'),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->