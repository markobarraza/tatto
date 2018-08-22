<?php get_header() ?>


<main>
	<section class="post">

	<?php if ( have_posts() ) { ?>
		<?php while ( have_posts() ) { ?>
			<?php the_post(); ?>
			<h2><?php the_title() ?></h2>
		<?php } ?>
	<?php } ?>


		
	</section>

</main>




















<?php get_footer() ?>