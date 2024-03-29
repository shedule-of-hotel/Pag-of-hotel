<?php
//evalúa y obliga a estar incluido, si lo está, no hace nada
require_once("header.php");
?>



</div>
</div>
<!--/banner-section-->
<!--//main-header-->
<!-- breadcrumb -->
<div class="w3_breadcrumb">
    <div class="breadcrumb-inner">
        <ul>
            <li><a href="index.php">Inicio</a> <i> /</i></li>
            <li>Nosotros</li>
        </ul>
    </div>
</div>
<!-- //breadcrumb -->
<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="container">
        <div class="inner-agile-w3l-part-head">
            <h2 class="w3l-inner-h-title">Nosotros</h2>
        </div>
        <div class="ab-w3l-spa">
            <img src="images/ab.jpg" alt="" class="img-responsive" /><br>
            <h3>Misión</h3>
            <p>Contribuir con el desarrollo turístico, atendiendo a las familias y visitantes, ofreciendo un servicio de hospedaje, restaurante y diversos actividades turísticas para superar las expectativas de nuestros clientes.
            </p><br>
            <h3>Visión</h3>
            <p>Ser reconocidos por nuestro prestigio en los mercados locales, nacionales e internacionales, operando mediante un sistema de gestión de calidad, asegurando la rentabilidad responsable, para asegurar la estabilidad y prosperidad de nuestros socios, colaboradores y la comunidad.
            </p><br>
            <br>
            <h3>Valores de la empresa</h3>
            <p>Identidad -
                Calidad y calidez -
                Responsabilidad y honestidad -
                Cuidado del medio ambiente -
                Perseverancia

            </p>
        </div>
        <!-- services -->
        <div class="w3_agileits_services_grids">
            <?php include_once 'habitaciones.php'; ?>
        </div>
        <!-- //services -->

        <div class="agileinf-button"> <a class="read" href="#">

            </a>
        </div>

    </div>

    <div class="featured-facility">
        <!-- welcome -->

        <?php include_once 'welcome.php'; ?>

        <!-- //welcome -->
    </div>
</div>
<div class="team-section">
    <div class="container">
        <h3 class="tittle">Nuestro Equipo</h3>
        <div class="team-row">
            <div class="col-md-3 team-grids">
                <div class="team-img">
                    <img class="img-responsive" src="images/internet/sept.jpeg" alt="">
                    <div class="captn">
                        <ul class="top-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="team-agile">
                    <h4>Administrador</h4>

                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="team-img">
                    <img class="img-responsive" src="images/internet/sept.jpeg" alt="">
                    <div class="captn">
                        <ul class="top-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="team-agile">
                    <h4>Contador</h4>

                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="team-img">
                    <img class="img-responsive" src="images/internet/sept.jpeg" alt="">
                    <div class="captn">
                        <ul class="top-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="team-agile">
                    <h4>Marketin</h4>

                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="team-img">
                    <img class="img-responsive" src="images/internet/sept.jpeg" alt="">
                    <div class="captn">
                        <ul class="top-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="team-agile">
                    <h4>Recepcionista</h4>

                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- /plans -->
<div class="plans-section">
    <?php include_once 'planes.php'; ?>
</div>
<!-- Modal1 -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Reservation Form</h4>
                <div class="book-form-inner">

                    <form action="#" method="post">
                        <div class="col-md-6 form-date-w3-agileits1">
                            <label><i class="fa fa-user" aria-hidden="true"></i> Name :</label>
                            <input type="text" name="name" placeholder="Your name" required="">
                        </div>
                        <div class="col-md-6 form-date-w3-agileits1 second-agile1">
                            <label><i class="fa fa-envelope" aria-hidden="true"></i> Email :</label>
                            <input type="email" name="email" placeholder="Your email" required="">
                        </div>
                        <div class="col-md-6 form-date-w3-agileits">
                            <label><i class="fa fa-calendar" aria-hidden="true"></i> Arrival Date :</label>
                            <input id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                        </div>
                        <div class="col-md-6 form-time-w3layouts second-agile">
                            <label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
                            <input type="time">
                        </div>
                        <div class="col-md-6 form-date-w3-agileits">
                            <label><i class="fa fa-calendar" aria-hidden="true"></i> Departure Date :</label>
                            <input id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                        </div>
                        <div class="col-md-6 form-time-w3layouts1 second-agile1">
                            <label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
                            <input type="time">
                        </div>
                        <div class="col-md-6 form-left-agileits-w3layouts1 bottom-w3ls1">
                            <label><i class="fa fa-home" aria-hidden="true"></i> Choose a Room :</label>
                            <select class="form-control">
                                <option></option>
                                <option>Standard Double Room</option>
                                <option>Standard Family Room</option>
                                <option>Garden Family Room</option>
                                <option>Deluxe Double Room</option>
                                <option>Executive Junior Suite</option>
                                <option>Maisonette</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-left-agileits-w3layouts1 second-agile1">
                            <label><i class="fa fa-users" aria-hidden="true"></i> No.of People :</label>
                            <select class="form-control">
                                <option></option>
                                <option>1 Person</option>
                                <option>2 People</option>
                                <option>3 People</option>
                                <option>4 People</option>
                                <option>5 People</option>
                                <option>More</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
                            <input type="submit" value="Make a Reservation">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->

<!--//content-inner-section-->

<?php
//evalúa y obliga a estar incluido, si lo está, no hace nada
require_once("footer.php");
?>