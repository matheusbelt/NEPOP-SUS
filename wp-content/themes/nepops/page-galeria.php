<?php
/**
 * Template Name: Galeria
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
				<?php if(have_rows('galeria')): while(have_rows('galeria')) : the_row(); ?>
					<article>
						<h2 class="subtitulo-galeria letrazul verdana negrito"><?php the_sub_field('titulo_do_album'); ?></h2>
						<small class="letracinza"><?php the_sub_field('data_do_post'); ?></small>
						<div class="conteudo-adicional"><?php the_sub_field('conteudo_adicional'); ?></div>
						<div class="galeria"><?php the_sub_field('galeria_de_fotos'); ?></div>
					</article>
			</section>
			<?php endwhile; else : endif?>
	</section>
</div>

<?php get_footer(); ?>