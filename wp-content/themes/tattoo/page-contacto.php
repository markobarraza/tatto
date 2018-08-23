<?php get_header() ?>
	<?php the_post() ?>

	<?php the_title() ?>
	<main>
	<section class="contacto">
		<h2>Contacto</h2>
		<p>Conoces a algun tatuador o quieres contarnos de alguno que el mundo necesita conocer?... o eres un tatuador que quiere postular a ser el destacado de la semana?.. o quizas quieres ayudarnos aportando tus conocimientos para hacer crecer mas esta pagina?</p>
		<p>O si solo quieres escribirnos para conocer mas de nosotros, te invitamos a realizarlo mediante el siguiente formulario</p>
		
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