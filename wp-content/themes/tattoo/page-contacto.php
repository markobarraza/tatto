<?php get_header() ?>
	<?php the_post() ?>

	<?php the_title() ?>
	<main>
	<section class="contacto">
		<h2>Contacto</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut cum cupiditate nesciunt omnis delectus distinctio! Esse delectus repellendus, quae expedita iste. Laboriosam sequi veritatis mollitia sit, aut libero at voluptatem.</p>
		
		<div class="my_container contacto__contenedor">
			<div class="row">
				<div class="col-xs-12">
					
					<?php the_content(); ?>

				</div>
			</div>
		</div>
	</section>

</main>

					

<?php get_footer() ?>