<?php
//evalúa y obliga a estar incluido, si lo está, no hace nada
require_once("header.php");
?>

		<!--//header-w3l-->
		<!--//header-w3l-->
		<!--//header-w3l-->
		<!--//header-w3l-->
		<!--//header-w3l-->
		
			<!--/banner-info-->
			   <div class="baner-info">   
			      <h3>Hospedaje    <span>Aguaymanto</span></h3>
				  <h4>Tu mejor Elección en Pucallpa</h4>
				  <p>Visitanos</p>
			   </div>
			<!--/banner-ingo-->
			
		</div>
		   </div>
    </div>
  <!--/banner-section-->
 <!--//main-header-->
 	<div class="special featured">
		  <div class="container">
				   <div class="ab-w3l-spa">
				        <h3 class="tittle">!Bienvenido al Hospedaje Aguaymanto¡</h3>
						<p>NO se que pOner
							</p>
				   </div>
				<!-- services -->
<?php
include_once 'habitaciones.php';
?>


				<!-- //services -->
				  
				           <div class="agileinf-button">    <a class="read" href="single.html">
											Más Información
							   </a>
							   </div>

		   </div>
    </div>
	<div class="featured-facility">
	  <!-- welcome -->
		
			<?php
            include_once 'welcome.php';
            ?>
		
	<!-- //welcome -->
	</div>
	<!-- about-bottom -->
	<!-- about-bottom -->




	<div class="about-bottom">
		</div>

		<div class="col-md-6 w3l_about_bottom_right one">
			<h3 class="tittle why">Libro de Reservacion</h3>
			<div class="book-form">

				<form action="#" method="post">
						<div class="col-md-6 form-date-w3-agileits">
							<label><i class="fa fa-user" aria-hidden="true"></i> NOmbre :</label>
							<input type="text" name="name" placeholder="Tú nombre" required="">
						</div>
						<div class="col-md-6 form-date-w3-agileits second-agile">
							<label><i class="fa fa-envelope" aria-hidden="true"></i> Email :</label>
							<input type="email" name="email" placeholder="Tú email" required="">
						</div>
						<div class="col-md-6 form-date-w3-agileits">
										<label><i class="fa fa-calendar" aria-hidden="true"></i> Fecha de Llegada :</label>
										<input  id="datepicker" name="Text" type="text" value="mes/dia/año" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									
									</div>
						<div class="col-md-6 form-time-w3layouts second-agile">
								<label><i class="fa fa-clock-o" aria-hidden="true"></i> Hora :</label>
								<input type="time">
						</div>
						<div class="col-md-6 form-date-w3-agileits">
									<label><i class="fa fa-calendar" aria-hidden="true"></i> Fecha de salida :</label>
										<input  id="datepicker1" name="Text" type="text" value="mes/dia/año" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
										
									</div>
						<div class="col-md-6 form-time-w3layouts second-agile">
								<label><i class="fa fa-clock-o" aria-hidden="true"></i> Hora :</label>
								<input type="time">
						</div>
						<div class="col-md-6 form-left-agileits-w3layouts bottom-w3ls">
								<label><i class="fa fa-home" aria-hidden="true"></i> Elige una habitación:</label>
								<select class="form-control">
									<option></option>
									<option>Habitacion Simple</option>
									<option>Habitacion Matrimonial</option>
									<option>Habitacion Doble</option>
									<option>Habitacion Triple</option>
								</select>
						</div>
						<div class="col-md-6 form-left-agileits-w3layouts second-agile">
								<label><i class="fa fa-users" aria-hidden="true"></i> N° de Personas :</label>
								<select class="form-control">
									<option></option>
									<option>1 Persona</option>
									<option>2 Persona</option>
									<option>3 Persona</option>
									<option>Más</option>
								</select>
						</div>
						<div class="clearfix"> </div>
						<div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
							<input type="submit" value="Hacer una reserva">
						</div>
				</form>
			</div>

		</div>
		
		<!-- Segundo-bottom -->

		<div class="col-md-6 w3l_about_bottom_right one">
			<h3 class="tittle why">¿POR QUÉ ELEGIRNOS?</h3>
			<p>Estas son algunas de las razones por las que te gustaria alojarte con nosotros.</p>
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Restaurante
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
					Contamos con una amplia variedad en el menu, incluyendo comidas y bebidas tipicas de la region.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Ubicación
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				   <div class="panel-body panel_text">
					Nos encontramos ubicados en el centro de la ciudad de Pucallpa, con facil acceso a cualquier parte de la ciudad.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Mejores Habitaciones
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				   <div class="panel-body panel_text">
					Tenemos las Habitaciones mas limpias y a un precio asequible.
				  </div>
				</div>

				<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>NO se necesita más razones
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				   <div class="panel-body panel_text">
					Lorem Amet quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.
				  </div>
				</div>
				
			</div>
		</div>
	</div>	

	</div>

	<div class="clearfix"> </div>
<!-- //about-bottom -->
<!-- //about-bottom -->
<!-- //about-bottom -->




	<!-- /plans -->
	  <?php
      include_once 'planes.php';
      ?>
<!-- testimonials -->
	<div class="guests-agile">
			<h3 class="tittle">Nuestros Visitantes</h3>
			<div class="w3_agileits_testimonial_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_agileits_testimonial_grid">
								<i class="fa fa-quote-right" aria-hidden="true"></i>
									<p>Este es un Comentari Positivo.</p>
									<img src="images/admin.jpg" alt=" " class="img-responsive" />
									
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
								<i class="fa fa-quote-right" aria-hidden="true"></i>
									<p>Este es un Comentari Positivo.</p>
									<img src="images/admin2.jpg" alt=" " class="img-responsive" />
									
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
								<i class="fa fa-quote-right" aria-hidden="true"></i>
									<p>Este es un Comentari Positivo.</p>
									<img src="images/admin.jpg" alt=" " class="img-responsive" />
									
								</div>
							</li>
						</ul>
					</div>
				</section>
				
				<!-- //flexSlider -->
			</div>
	</div>
<!-- //testimonials -->


<?php
//evalúa y obliga a estar incluido, si lo está, no hace nada
require_once("footer.php");
?>
 