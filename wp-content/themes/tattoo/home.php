<?php get_header() ?>


<main>
<!-- COVER -->
	<section class="cover">
		<div class="container-fluid">
			<div>
				<img class="img-responsive cover__img" src="<?php bloginfo( "template_url" ) ?>/assets/images/img-cover.png" alt="Cesar Castillo">
				<div class="cover__info">
					<h2>cesar castillo</h2>
					<h3>Diseñador grafico - Ilustrador - tatuador</h3>	
					<div class="cover__btn">
						<a href="tatuador.html">Conoce a Cesar</a>
					</div>
				</div>
				<a href="#top"><span class="icon-arrow-down cover__icon"></span></a>
				
			</div>
		</div>
	</section>
<!--  Hablemos de Tatuajes -->
<section id="top" class="tatuajes">
	<h1>Revista Tattoo</h1>
	<h4>Hablemos de Tatuajes</h4>
	<div class="my_container">
		<ul class="row">
			<?php
				$arg = array(
					'post_type'		 => 'publicacion',
					'posts_per_page' => 3,
				);
			
				$get_arg = new WP_Query( $arg );
			
				while ( $get_arg->have_posts() ) {
					$get_arg->the_post();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumbnail-size', false );
				?>
					
				<li class="col-xs-12 col-md-4 tatuajes__container">
					 <img class="img-responsive tatuajes__img" src="<?= $thumb_url[0] ?>" alt="Publicacion"> 

					<h3><?php the_title() ?></h3>
					<p><?php the_excerpt() ?></p>
				</li>
			
				<?php } wp_reset_postdata();
			?>
		</ul>
	</div>
</section>

<!-- Separador -->
<div class="separador">
	<div class="line"></div>
	<div class="icon-Tattoo-Machine separador__icon"></div>
	<div class="line"></div>
</div>

<!-- Section Ruddet -->
<section class="ruddet">
	<div class="my_container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<img class="img-responsive" src="<?php bloginfo( "template_url" ) ?>/assets/images/logo-ruddet.jpg" alt="Logo Ruddet Tattoist life">
				<p><b>Ruddet Tattois life</b>, es una webserie sobre el mundo del tauaje, donde los protagonistas son los tatuadores que nos muestran sus historias y rutinas. Una producción audiovisual que nos adentra mas en el mundo del tatuaje.</p>
			</div>
			<div class="col-xs-12 col-md-6">
				<iframe width="90%" height="400" src="https://www.youtube.com/embed/M5bHo6rGt_8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div class="ruddet__btn">
		<a href="https://www.youtube.com/user/rudetattoolife" target="_blank"><h3>Ver Canal Youtube</h3></a>
	</div>
</section>

<!-- cotizar -->
<section class="cotizar">
	<h2 class="cotizar-titulo">Como Cotizar</h2>
	<div class="container-fluid">
		<ul class="row cotizar__cover">
			<li class="col-xs-12 col-md-4">
				<span class="icon-arrow-maximise cotizar__icon"></span>
				<h2>Medidas</h2>
				<p>Ten claras las medidas del tatuaje, ya que es primordial para el tatuador al momento de saber cuanto cobrar, asegurate que sean exactas.</p>
			</li>
			<li class="col-xs-12 col-md-4">
				<span class="icon-zoom-outline cotizar__icon"></span>
				<h2>Lugar a tatuar</h2>
				<p>Debes saber exactamente que lugar de tu cuerpo vas a tatuar, esta informacion le sirve al tatuador para saber la complejidad del trabajo</p>
			</li>
			<li class="col-xs-12 col-md-4">
				<span class="icon-pencil cotizar__icon"></span>
				<h2>Diseño</h2>
				<p>Asegurate de tener claro el diseño que quieres, busca referentes y conversalo con tu tatuador para que te oriente.</p>
			</li>

		</ul>
	</div>	
</section>

<!-- Inspiracion -->
<section class="inspiracion">
	<div class="my_container inspiracion__hero">
		<div class="row">
			<div class="col-xs-12 col-md-7">
				<h2>Inspirate</h2>
				<p>¿Aun tienes dudas de que tatuarte? Revisa los 6 tatuajes destacados, son diferentes estilos y diseños para que te inspires. </p>
				<ul>
					<li>
						<img class="img-responsive inspiracion__litle" src="<?php bloginfo( "template_url" ) ?>/assets/images/ins-1.jpg" alt="Inspiracion 1" data-toggle="modal" data-target="#myModal">
					</li>
					<li>
						<img class="img-responsive inspiracion__litle" src="<?php bloginfo( "template_url" ) ?>/assets/images/ins-2.jpg" alt="Inspiracion 1" data-toggle="modal" data-target="#myModal">
					</li>
					<li>
						<img class="img-responsive inspiracion__litle" src="<?php bloginfo( "template_url" ) ?>/assets/images/ins-3.jpg" alt="Inspiracion 1" data-toggle="modal" data-target="#myModal">
					</li>
				</ul>
				<ul>
					<li>
						<img class="img-responsive inspiracion__litle" src="<?php bloginfo( "template_url" ) ?>/assets/images/ins-4.jpg" alt="Inspiracion 1" data-toggle="modal" data-target="#myModal">
					</li>
					<li>
						<img class="img-responsive inspiracion__litle" src="<?php bloginfo( "template_url" ) ?>/assets/images/ins-5.jpg" alt="Inspiracion 1" data-toggle="modal" data-target="#myModal">
					</li>
					<li>
						<img class="img-responsive inspiracion__litle" src="<?php bloginfo( "template_url" ) ?>/assets/images/ins-6.jpg" alt="Inspiracion 1" data-toggle="modal" data-target="#myModal">
					</li>
				</ul>
			</div>
			<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      </div>
		      <!-- contenido del modal -->
		      <div class="modal-body">
		        <img class="img-responsive inspiracion__big" src="<?php bloginfo( "template_url" ) ?>/assets/images/ins-6.jpg" alt="Inspiración Big">
		      </div>
		    </div>
		  </div>
		</div>
			<div class="col-xs-12 col-md-5"></div>
		</div>
	</div>
</section>

<!-- cotizar -->
<section class="cotizar">
	<h2 class="cotizar-titulo">Cuidados y preparación</h2>
	<div class="container-fluid">
		<ul class="row cotizar__cover">
			<li class="col-xs-12 col-md-4">
				<span class="icon-beer cotizar__icon"></span>
				<h2>Cero Alcohol</h2>
				<p>Procura no consumir alcohol antes de realizarte un tatuaje, ya que esto aumenta el brote de la sangre</p>
			</li>
			<li class="col-xs-12 col-md-4">
				<span class="icon-weather-sunny cotizar__icon"></span>
				<h2>Lejos del sol</h2>
				<p>Un tatuaje recien hecho debes mantenerlo oculto del sol, para que no se deteriore, por eso se recomienda realizarse tatuajes en invierno, ya que tienen menos exposicion. </p>
			</li>
			<li class="col-xs-12 col-md-4">
				<span class="icon-delete cotizar__icon"></span>
				<h2>No tocar</h2>
				<p>un tatuaje recien realizado, producira comezon, es por eso que debes aguantar el tocarlo o sacar las costras que aparescan, estas se saldran solas.</p>
			</li>

		</ul>
	</div>	
</section>
</main>

<?php get_footer() ?>
