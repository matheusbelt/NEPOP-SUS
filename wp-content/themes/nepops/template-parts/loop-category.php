<?php $noticiasloop = get_page_by_title($noticias); ?>

<div class="col-md-9 col-xs-12">
<p class='invi'><?php $categoria = get_field('categoria_do_projeto', $noticiasloop); ?></p>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php $args = array(
	'category_name' => $categoria
	)
?>

<?php $my_query = new WP_Query( $args ) ?>
<!-- Start the Loop. -->
<?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
	<article class="col-xs-12 noticias-ini">
			<div class="img-ini col-md-3">
				<div class="col-md-10">
					<a href="<?php the_permalink(); ?>"><div class='imagem-hover'><?php the_post_thumbnail(); ?></div></a>
				</div>
			</div>
				<div class="post-ini-header col-md-9">
					<a href="<?php the_permalink(); ?>"><h2 class='titulo-apresent noticias-titulo verdana letrazul'><?php the_title(); ?></h2></a>
					<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
				</div><!-- .entry-header -->

				<div class="post-ini col-md-9">
					<?php the_excerpt(); ?>
					<p class="postmetadata"><?php _e( 'Postado em:' ); ?> <?php the_category( ', ' ); ?></p>
				</div>
	</article><!-- #post-00 -->
 <?php endwhile; ?>
	
<?php else : ?>
 	<p><?php _e( 'Desculpe, nenhum post encontrado' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
 	<!-- pagination links -->

</div> <!-- fim do container -->