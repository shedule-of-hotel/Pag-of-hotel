<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Hospedaje Aguaymanto</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pop-up -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //pop-up -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>
<body>
<!--/main-header-->
  <div class="w3layouts-top-strip">
			<div class="top-srip-agileinfo">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
						<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +061 783 634</li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="HospedajeAgu@gmail.com">HospedajeAgu@gmail.com</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
<!--/banner-section-->
<!--/banner-section-->
<!--/banner-section-->
<!--/banner-section-->
<!--/banner-section-->
<?php



$nani = $_SERVER['PHP_SELF'];
print $nani;


switch($nani) 
 {
	 case "/Pag-of-hotel/index.php":
	 echo " index funciona";
	 		?>
			 	 	<div id="demo-1" data-zs-src='["images/4.jpg", "images/2.jpg", "images/1.jpg","images/3.jpg"]' data-zs-overlay="dots">	 <div class="demo-inner-content"> 
			 <?php	 
	 break;

	 case "/Pag-of-hotel/gallery.php":
			?>
			<div id="demo-1" class="banner-inner">
			<?php
	 break;

	 case "/Pag-of-hotel/about.php":
			?>
			<div id="demo-1" class="banner-inner">
			<?php
	 break;

	 case "/Pag-of-hotel/contact.php":
			?>
			<div id="demo-1" class="banner-inner">
			<?php
	 break;

	 default:
	 //por defecto
			?>
				<div id="demo-1" class="banner-inner">
			<?php
 }
 ?>



 
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Palanca de Navegación</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									    <h1><a  href="index.php"><span>A</span>guaymanto <p class="s-log">Hotel</p></a>
										 
										</h1>
									</div>
									<!-- navbar-header -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
				 <ul class="nav navbar-nav">
											<li><a href="index.php">Inicio</a></li>
												<li><a href="about.php">Sobre Nosotros</a></li>
												<li class="active"><a href="gallery.php">Galeria</a></li>
												 <li class="dropdown">
													<a href="codes.php" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Paginas <b class="caret"></b></a>
													 <ul class="dropdown-menu">
														<li><a href="icons.php">Letras e Iconos</a></li>
													
														<li><a href="codes.php">Codigos</a></li>
													</ul>
												</li>

												<li><a href="contact.php">Contactanos</a></li>

											
										</ul>


									</div>
									<div class="clearfix"> </div>	
								</nav>
									<div class="w3ls_search">
													<div class="cd-main-header">
														<ul class="cd-header-buttons">
															<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
														</ul> <!-- cd-header-buttons -->
													</div>
													<div id="cd-search" class="cd-search">
														<form action="#" method="post">
															<input name="Search" type="search" placeholder="Buscando...">
														</form>
													</div>
												</div>
					
							</div> 

			
		<!--//header-w3l-->