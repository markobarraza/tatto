<?php get_header() ?>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php //the_content(); ?>

	<main>
	<section class="somos">
		<h2>somos</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut cum cupiditate nesciunt omnis delectus distinctio! Esse delectus repellendus, quae expedita iste. Laboriosam sequi veritatis mollitia sit, aut libero at voluptatem.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut cum cupiditate nesciunt omnis delectus distinctio! Esse delectus repellendus, quae expedita iste. Laboriosam sequi veritatis mollitia sit, aut libero at voluptatem.
		ectus distinctio! Esse delectus repellendus, quae expedita iste. Laboriosam sequi veritatis mollitia sit, aut libero at voluptatem
	tus distinctio! Esse delectus repellendus, quae expedita iste. Laboriosam sequi veritatis mollitia sit, aut libero at voluptatem.
		ectus distinctio! Esse delectus repellendus, quae expedita iste. Laboriosam sequi veritatis mollitia sit, aut libero at voluptatem.</p>

	    <!-- Separador -->
		<div class="separador">
			<div class="line"></div>
			<div class="icon-Tattoo-Machine separador__icon"></div>
			<div class="line"></div>
		</div>
		<div class="containe-fluid">
			<ul class="row">
				<li class="col-xs-12 col-md-4 somos__perfil">
					<img src="<?php bloginfo( "template_url" ) ?>/assets/images/example.jpg" alt="Marco Barraza">
					<h3>Marco Barraza</h3>
					<h4>Diseñador Grafico</h4>
					<h5>mbarraza@gmail.com</h5>
				</li>
				<li class="col-xs-12 col-md-4 somos__perfil">
					<img src="<?php bloginfo( "template_url" ) ?>/assets/images/example.jpg" alt="Marco Barraza">
					<h3>Marco Barraza</h3>
					<h4>Diseñador Grafico</h4>
					<h5>mbarraza@gmail.com</h5>
				</li>
				<li class="col-xs-12 col-md-4 somos__perfil">
					<img src="<?php bloginfo( "template_url" ) ?>/assets/images/example.jpg" alt="Marco Barraza">
					<h3>Marco Barraza</h3>
					<h4>Diseñador Grafico</h4>
					<h5>mbarraza@gmail.com</h5>
				</li>
			</ul>
		</div>
	</section>

</main>

<?php get_footer() ?>