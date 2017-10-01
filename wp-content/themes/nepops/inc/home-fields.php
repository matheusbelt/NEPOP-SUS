<?php $home = get_page_by_title('Home'); ?>
	<style>
			.post-principal{
				background: url(<?php the_field('imagem_primeiro_post', $home);?>), rgba(0,0,0,.5) no-repeat;
				background-size: cover;
			}
			.post-secundario1{
				background: url(<?php the_field('imagem_segundo_post', $home);?>) no-repeat;
				background-size: cover;
			}
			.post-secundario2{
				background: url(<?php the_field('imagem_terceiro_post', $home);?>) no-repeat;
				background-size: cover;				
			}
	</style>
		<article class="col-md-12 home-fields-post">
			<a href="<?php the_field('link_primeiro_post', $home); ?>">
				<div class="post-principal col-md-6 col-xs-12">
				<p class="home-titulo-principal" id="titulo-maior"><?php the_field('titulo_primeiro_post', $home); ?></p>
				<p class="home-titulo-secundario"><?php the_field('projeto_primeiro_post', $home); ?></p>
				</div>
			</a>
			<a href="<?php the_field('link_segundo_post', $home); ?>">
				<div class="post-secundario1 col-md-6 col-xs-6">
				<p class="home-titulo-principal"><?php the_field('titulo_segundo_post', $home); ?></p>
				<p class="home-titulo-secundario"><?php the_field('projeto_segundo_post', $home); ?></p>
				</div>
			</a>

			<a href="<?php the_field('link_terceiro_post', $home); ?>">
				<div class="post-secundario2 col-md-6 col-xs-6">
				<p class="home-titulo-principal"><?php the_field('titulo_terceiro_post', $home); ?></p>
				<p class="home-titulo-secundario"><?php the_field('projeto_terceiro_post', $home); ?></p>
				</div>
				<div class='doidera col-md-6'></div>
			</a>
		</article>