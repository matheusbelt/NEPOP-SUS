<?php
/**
 * Template Name: Projeto
 *
 */
get_header();
?>
<?php $projeto = get_the_ID(); ?>
<div class="container" id="sidebar-esquerda">
	<?php include(TEMPLATEPATH . "/inc/menu.php"); ?>
	<section class="col-md-9" id="projeto-present">
		<?php if ( have_posts() ) : ?>
			<section class="apresentacao">
				<h1 class="titulo-apresent letrazul verdana">
					<?php the_field('titulo_do_projeto'); ?>
				</h1>

				<div class="col-md-6 imagem-logo"> 
					<img src="<?php the_field('imagem_do_projeto'); ?>" alt="<?php the_field(''); ?>"> 
				</div>

				<div class="col-md-6 resumo-texto"> 
					<?php the_field('resumo_do_projeto'); ?>
				</div>
				
				<!-- repeater field -->
				<?php if(have_rows('texto')): while(have_rows('texto')) : the_row(); ?>
					<h2 class="col-md-12 subtitulo"> 
						<?php the_sub_field('subtitulo'); ?>
					</h2>

					<div class="col-md-12 corpo-texto"> 
						<?php the_sub_field('corpo_texto'); ?>
					</div>
				<?php endwhile; else : endif; ?>
			</section>
		<?php endif; ?>
	</section>
</div>

<?php get_footer(); ?>
