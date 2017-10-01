<?php $essapg = $projeto ?>
<aside class="col-md-3" id="sidebar-mutavel">
	<h1 class="titulo-apresent verdana letrazul titulo-menu-secundario"><?php the_field('sigla', $essapag); ?></h1>
		<ul>
			<a href="<?php the_field('link_apresentacao', $essapg); ?>" class="current">
				<li>Apresentacao</li>
			</a>
			<a href="<?php the_field('link_noticias', $essapg); ?>">
				<li>Notícias</li>
			</a>
			<a href="<?php the_field('link_galeria', $essapg); ?>">
				<li>Galeria</li>
			</a>
			<a href="<?php the_field('link_biblioteca', $essapg); ?>">
				<li>Biblioteca</li>
			</a>
		</ul>
</aside>