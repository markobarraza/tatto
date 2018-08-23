<?php get_header() ?>


<main>
	<section class="post">

	<?php if ( have_posts() ) { ?>
		<?php while ( have_posts() ) { ?>
			<?php the_post(); ?>
			<div class="">
				<span><img class="post__cover img-responsive" src="<?php the_post_thumbnail() ?>"></span>
			</div>
			<h2><?php the_title() ?></h2>
			<p><?php the_content() ?></p>
		<?php } ?>
	<?php } ?>


		
	</section>

</main>




















<?php get_footer() ?>