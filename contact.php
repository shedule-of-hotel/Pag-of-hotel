<?php
//evalúa y obliga a estar incluido, si lo está, no hace nada
require_once("header.php");
?>


		<!--//header-w3l-->
		</div>
		 </div>
  <!--/banner-section-->
 <!--//main-header-->
	        
						<!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php">Inicio</a> <i>/</i></li>
				
				<li>Contactanos</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				  <div class="w3_content_agilleinfo_inner">
					    <div class="container">
							<div class="inner-agile-w3l-part-head">
					           <h2 class="w3l-inner-h-title">Contactanos</h2>
								
							</div>
									<div class="w3_mail_grids">
										<form action="#" method="post">
											<div class="col-md-6 w3_agile_mail_grid">
													<input type="text" placeholder="Tú Nombre"  required="">
													<input type="email" placeholder="Tú Email" required="">
													<input type="text" placeholder="Tú Numero de Telefono" required="">

												
											</div>
											<div class="col-md-6 w3_agile_mail_grid">
												<textarea name="Message" placeholder="Lo que Deseas Decirnos" required=""></textarea>
												<input type="submit" value="Enviar">
											</div>
											<div class="clearfix"> </div>
										</form>
							</div>
					   </div>
							<div class=" map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.7933313169316!2d-74.52814877984201!3d-8.38460664202278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a3bcf23afa1f0b%3A0xe363a70d95e2b1d6!2sHOSPEDAJE+AGUAYMANTO!5e0!3m2!1ses-419!2spe!4v1566231332253!5m2!1ses-419!2spe" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
				  </div>
			<!--//content-inner-section-->
<?php
    ini_set( 'display_errors', 1 );//para mostra errores
    error_reporting( E_ALL );//para mostra errores
    $from = "test@hostinger-tutorials.com";//el correo del cual se envia
    $to = "WolfwoodStryfe@gmail.com";//el destinatario
    $subject = "este es el subject";
    $message = "Este es el mensaje o el cuerpo del mensaje";
    $headers = "esta cosa se llam headers:" . $from;
	mail($to,$subject,$message,$headers);
    echo "El mensaje de correo electrónico fue enviado";
?>
			<!--//content-inner-section-->
			<!--//content-inner-section-->
			<!--//content-inner-section-->
			<!--//content-inner-section-->
			<!--//content-inner-section-->
			<div class="w3l_contact-bottom">
		<div class="container">
			
			<div class="w3ls_con_grids">
				
				<div class="w3ls_footer_grid">
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Ubicación</h4>
							<p>JR. HUASCAR NRO. 772, Pucallpa </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Email</h4>
							<a href="HospedajeAgu@gmail.com">HospedajeAgu@gmail.com</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Telefono</h4>
							<p> +061 783 634 </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
 <!-- Footer -->
 
 <?php
//evalúa y obliga a estar incluido, si lo está, no hace nada
require_once("footer.php");
?>