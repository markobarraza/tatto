<?php get_header() ?>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php //the_content(); ?>

	<main>
	<section class="perfil">
		<div class="my_container">
			<div class="row perfil__datos">
				<div class="col-xs-12 col-md-6">
					<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/perfil-p.jpg" alt="Perfil Principal">
					<div class="perfil-info">
						<h2>Cesar Castillo</h2>
						<h3>30 años</h3>
						<h4>7 Monster Tattoo
							<span>Santo Domingo #550 of. A (primer piso)</span>
						</h4>
					</div>
				</div> 

				<div class="col-xs-12 col-md-6 perfil__titulo">
					<h2>Encuentralo <span> / Estudio</span></h2>
					<div class="perfil__mapa">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.5259447666754!2d-70.6472853849232!3d-33.43560150413618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c598735893e9%3A0xd35920e649431c79!2sSanto+Domingo+550%2C+Santiago%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1533533929261" width="90%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<h2>Instagram <span> / Cesar Castillo</span></h2>
					<a href="https://www.instagram.com/elilusionista.cl/" target="_blank"><img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/instagram_cesar.jpg" alt="Instagram Cesar Castillo"></a>
				</div>
			</div>
		</div>
	</section>

<!-- Separador -->
<div class="separador">
	<div class="line"></div>
	<div class="icon-Tattoo-Machine separador__icon"></div>
	<div class="line"></div>
</div>

	<!-- section fotos perfil -->
	<section class="container perfiles">
		<ul class="row">
			<li class="col-xs-6 col-md-4 perfiles__perfil">
				<img class="img-responsive perfiles__image grow" src="<?php bloginfo( "template_url" ) ?>/assets/images/perfil-1.jpg" alt="Foto Cesar Castillo 1">
			</li>
			<li class="col-xs-6 col-md-4 perfiles__perfil">
				<img class="img-responsive perfiles__image grow" src="<?php bloginfo( "template_url" ) ?>/assets/images/perfil-2.jpg" alt="Foto Cesar Castillo 2">
			</li>
			<li class="col-xs-6 col-md-4 perfiles__perfil">
				<img class="img-responsive perfiles__image perfiles__image-borrar grow" src="<?php bloginfo( "template_url" ) ?>/assets/images/perfil-3.jpg" alt="Foto Cesar Castillo 3">
			</li>
		</ul>
	</section>
    

    <!-- Reseña -->
	<?php
		$arg = array(
			'post_type'		 => 'perfil',
			'posts_per_page' => 1,
		);
	
		$get_arg = new WP_Query( $arg );
	
		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
		?>
			
			<div class="resena">
				<h2><?php the_title() ?></h2>
				<p><?php the_content() ?></p>
			</div>
	
		<?php } wp_reset_postdata();
	?>

	
	

	<!-- Separador -->
	<div class="separador">
		<div class="line"></div>
		<div class="icon-Tattoo-Machine separador__icon"></div>
		<div class="line"></div>
	</div>

	<!-- Trabajos -->
	<section class="my_container trabajos">
		<ul class="row">
			<li class="col-xs-6 col-md-3">
				<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/c1.jpg" alt="">
			</li>
			<li class="col-xs-6 col-md-3">
				<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/c2.jpg" alt="">
			</li>
			<li class="col-xs-6 col-md-3">
				<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/c3.jpg" alt="">
			</li>
			<li class="col-xs-6 col-md-3">
				<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/c4.jpg" alt="">
			</li>
			<li class="col-xs-6 col-md-3">
				<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/c5.jpg" alt="">
			</li>
			<li class="col-xs-6 col-md-3">
				<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/c6.jpg" alt="">
			</li>
			<li class="col-xs-6 col-md-3">
				<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/c7.jpg" alt="">
			</li>
			<li class="col-xs-6 col-md-3">
				<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/c8.jpg" alt="">
			</li>
		</ul>
	</section>
</main>

<?php get_footer() ?>