<!-- Footer -->
<div class="w3l-footer">
	<div class="container">
		<div class="footer-info-agile">
			<div class="col-md-2 footer-info-grid links">
				<h4>Enlaces Rapidos</h4>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Sobre Nosotros</a></li>

					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="contact.php">Contactanos</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-info-grid address">
				<h4>Direccion</h4>
				<address>
					<ul>
						<li>JR. HUASCAR NRO. 772 URB. CERCADO DE PUCALLPA</li>
						<li>DETRAS DEL MERCADO NUMERO 1</li>
						<li>UCAYALI - CORONEL PORTILLO - CALLERIA</li>
						<li>Telefono : +061 783 634</li>
						<li>Email : <a class="mail" href="HospedajeAgu@gmail.com">HospedajeAgu@gmail.com</a></li>
					</ul>
				</address>
			</div>
			<div class="col-md-3 footer-grid">
				<h4>Instagram</h4>
				<div class="footer-grid-instagram">
					<a href="#"><img src="images/internet/(15).webp" alt=" " class="img-responsive"></a>
				</div>
				<div class="footer-grid-instagram">
					<a href="#"><img src="images/internet/(12).webp" alt=" " class="img-responsive"></a>
				</div>
				<div class="footer-grid-instagram">
					<a href="#"><img src="images/internet/(5).webp" alt=" " class="img-responsive"></a>
				</div>
				<div class="footer-grid-instagram">
					<a href="#"><img src="images/internet/(17).webp" alt=" " class="img-responsive"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 footer-info-grid">
				<div class="connect-social">
					<h4>Conectate con nosotros</h4>
					<section class="social">
						<ul>
							<li><a class="icon fb" href="https://www.facebook.com/aguaymantohoteles/"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="https://api.whatsapp.com/send?phone=51981747795&text=Hola%2c%20mas%20infortmación%20por%20este%20numero&source=&data="><i class="fa fa-whatsapp"></i></a></li>
							<li><a class="icon pin" href="https://www.instagram.com/explore/locations/508834956316046/hospedaje-aguaymanto/?hl=es-la"><i class="fa fa-instagram"></i></a></li>
							<li><a class="icon gp" href="mailto:aguaymantohoteles@gmail.com"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>

				</div>



			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>


<div class="w3agile_footer_copy">
	<p>© 2019</p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
	$(document).ready(function() {
		$(".dropdown").hover(
			function() {
				$('.dropdown-menu', this).stop(true, true).slideDown("fast");
				$(this).toggleClass('open');
			},
			function() {
				$('.dropdown-menu', this).stop(true, true).slideUp("fast");
				$(this).toggleClass('open');
			}
		);
	});
</script>
<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
<!-- search-jQuery -->
<script src="js/main.js"></script>

<!--/script-->



<?php



$paginaActual = $_SERVER['PHP_SELF'];
//print $nani;


switch ($paginaActual) {
	case "/Pag-of-hotel/gallery.php": //en la pagina Galeria.php
		?>
<!--/script-->
<script src="js/lightbox-plus-jquery.min.js"> </script>
<!--/script-->
<?php
	break;

case "/Pag-of-hotel/about.php": //en la pagina ABout.php
	?><?php
			break;

		case "/Pag-of-hotel/contact.php": //en la pagina Contact.php
			?>

<script src="js/simplePlayer.js"></script>
<script>
	$("document").ready(function() {
		$("#video").simplePlayer();
	});
</script>
<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider) {
				$('body').removeClass('loading');
			}
		});
	});
</script>
<!--//script for portfolio-->
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
	$(function() {
		$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
	});
</script>
<?php
	break;

default:
	?>

<script src="js/simplePlayer.js"></script>
<script>
	$("document").ready(function() {
		$("#video").simplePlayer();
	});
</script>
<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider) {
				$('body').removeClass('loading');
			}
		});
	});
</script>
<!--//script for portfolio-->
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
	$(function() {
		$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
	});
</script>
<?php

}
?>

<!-- //Calendar -->
<!-- //Calendar -->
<!-- //Calendar -->
<!-- //Calendar -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 900);
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/

		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>

</html>