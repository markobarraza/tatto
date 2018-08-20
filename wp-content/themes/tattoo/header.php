<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">


<!-- viewport responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php get_template_part('_includes/iOS', 'icons') ?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Mis Estilos -->
<!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="css/style.css">
<!-- font iconmoon -->
<link rel="stylesheet" href="css/font-style.css">
</head>
<body>
<?php wp_head() ?>
<header>	
	<!-- Nav -->
	<nav class="navbar my-nav navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		      	<!-- responsive menu hamburguesa -->
		        <span class="sr-only">Toggle navigation</span>
		        <span class=" icon-th-menu icon-nav"></span>
		        <!-- <i class="fas fa-bars icon-nav"></i> -->
		      </button>
		      <a class="navbar-brand" href="#">Brand</a>
		    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="active"><a href="#"><span class="icon-home-outline my-nav__icon"></span>Home</a></li>
	        <li><a href="tatuador.html"><span class="icon-star-outline my-nav__icon"></span>Tatuador Destacado</a></li>
	        <li><a href="somos.html"><span class="icon-user-outline my-nav__icon"></span>Somos</a></li>
	        <li><a href="contacto.html"><span class="icon-mail my-nav__icon"></span>Contacto</a></li>
	      </ul>

	     

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

</header>