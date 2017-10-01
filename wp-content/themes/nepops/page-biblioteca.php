<?php
/**
 * Template Name: Biblioteca
 *
 */
get_header();
?>
<div class="container">
	<aside class="col-md-3" id="sidebar-esquerda">
		<?php include(TEMPLATEPATH . "/inc/menu-final.php"); ?>
	</aside>
	<section class="col-md-9">
			<section class="apresentacao">
				<h1 class="titulo-apresent letrazul verdana">
					<?php the_title(); ?>
				</h1>

				<!-- repeater field -->
				<?php if(have_rows('texto')): while(have_rows('texto')) : the_row(); ?>
					<article>
						<h2 class="subtitulo-biblioteca letrazul verdana negrito"><?php the_sub_field('categoria_biblioteca'); ?></h2>
						<?php the_sub_field('documentos'); ?>
					</article>
				<?php endwhile; else : endif?>
			</section>
			
	</section>
</div>

<?php get_footer(); ?>