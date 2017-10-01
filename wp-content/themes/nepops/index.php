<?php get_header(); ?>

<div class="container mil">
	<section id="inicial" class="col-xs-12">

		<?php include(TEMPLATEPATH . "/inc/home-fields.php"); ?>

		<?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/posts', get_post_format() );
		endwhile;
		 ?>
		<center><a href="http://localhost/nepops/home/todas-as-noticias/"><button class="letrazul verdana todas-as-noticias">Todas as Notícias</button></a></center>
	</section>
</div>


<?php get_footer(); ?>