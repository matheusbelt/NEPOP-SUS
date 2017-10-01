<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Vpop
 */
?>
	<?php $footer = get_page_by_title('Home'); ?>
		<footer class="container-fluid bgblue" id="footer">
			<div class="container">
				<section class="col-md-3 col-md-offset-1">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/nepops-footer.png" alt=""></a>
				</section>
				<section class="col-md-3 col-md-offset-1">
					<nav class="footer-nav">
						<?php if(have_rows('menu_de_rodape', $footer)): while(have_rows('menu_de_rodape', $footer)) : the_row(); ?>
							<a href="<?php_the_sub_field('link', $footer); ?>"><?php the_sub_field('projeto_externo', $footer); ?> <br></a>
						<?php endwhile; else: endif; ?>
					</nav>
				</section>
				<section class="col-md-3">
					<nav class="footer-nav">
						<?php
							$args = array(
							'menu' => 'Rodapé',
							'theme_location' => 'footer-menu',
							'container' => false
							);
							wp_nav_menu( $args );
						?> 
					</nav>
				</section>
				<p class="col-xs-12 text-center" style="color: white; margin-top: 20px;"><small>Todos os direitos reservados <?php the_date('Y'); ?> | Desenvolvido por <a href="https://www.facebook.com/matheus.beltrao.5" target="_blank" style="color: white; text-decoration: underline">Matheus Beltrão</a></small></p>
			</div>
		</footer>
<?php wp_footer(); ?>
</body>
</html>
