<?php get_header() ?>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php //the_content(); ?>

	<main>
	<section class="somos">
		<h2>somos</h2>
		<p>En <b>"tattoo magazine"</b> somos un grupo de jovenes que busca dar a conocer el mundo del tatuaje, mostrar su mejor cara, dando a conocer los mejores trabajos encontrados en la web y destacando a los tatuadores que resaltan por sobre el resto. Buscamos ser una guia para aquellos que se encuentran pensando, que sera lo siguiente que se rayen en su cuerpo y al mismo tiempo aconsejando a a quellos que deciden realizarse su primer tatuaje</p>
		

	    <!-- Separador -->
		<div class="separador">
			<div class="line"></div>
			<div class="icon-Tattoo-Machine separador__icon"></div>
			<div class="line"></div>
		</div>
		<div class="containe-fluid">
			<ul class="row">
				<li class="col-xs-12 col-md-4 somos__perfil">
					<img src="<?php bloginfo( "template_url" ) ?>/assets/images/arturo.jpg" alt="Marco Barraza">
					<h3>Arturo Carrasco</h3>
					<h4>Diseñador Grafico</h4>
					<h5>acarrasco@gmail.com</h5>
				</li>
				<li class="col-xs-12 col-md-4 somos__perfil">
					<img src="<?php bloginfo( "template_url" ) ?>/assets/images/cesar.jpg" alt="Marco Barraza">
					<h3>Cesar Campos</h3>
					<h4>Tatuador / Colaborador Web</h4>
					<h5>ccampos@gmail.com</h5>
				</li>
				<li class="col-xs-12 col-md-4 somos__perfil">
					<img src="<?php bloginfo( "template_url" ) ?>/assets/images/sergio.jpg" alt="Marco Barraza">
					<h3>Sergio Urbina</h3>
					<h4>Fotografo</h4>
					<h5>surbina@gmail.com</h5>
				</li>
			</ul>
		</div>
	</section>

</main>

<?php get_footer() ?>