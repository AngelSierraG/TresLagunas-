<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservación</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon_.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="booking/css/booking.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="search/search.js"></script>
    <script src="booking/js/booking.js"></script>
    <script src="js/script.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/wow/wow.js"></script>
    <script>
        $(document).ready(function () {
            if ($('html').hasClass('desktop')) {
                new WOW().init();
            }
        });
    </script>
    <!--<![endif]-->
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" href="css/ie.css"/>
    <![endif]-->
    <script>
        $(document).ready(function() {
            $('#bookingForm').bookingForm({
                ownerEmail: '#'
            });
        });
    </script>
</head>

<body>

<!--========================================================
                          HEADER
=========================================================-->
<header id="header" class="subpage_header">
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                   
                 <nav>
                        <ul class="sf-menu">
                           <li ><a href="index.php">Inicio</a></li>
                            <li><a href="nosotros.php">Nosotros</a>
                                <ul>
                                    <li><a href="#">Información General</a></li>
                                    <li><a href="#">Historia</a>
                                        <ul>
                                            <li><a href="#">Comunidad Lacandona</a></li>
                                            <li><a href="#">Tres Lagunas </a></li>
                                            <li><a href="#">Selva Lacandona</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="http://treslagunas.com.mx/recorrido/index.html">Santuario</a></li>
                                </ul>
                            </li>
                            <li ><a href="actividades.php">Actividades</a></li>
                            <li><a href="noticias.php">Noticias</a></li>
                             <li class="current"> <a href="#">Reservación</a>
                                <ul>

                                            <?php 
                                            if(!isset($_COOKIE['user'])){ 

                                            ?>
                                            <li><a href="#">Cotización</a></li>
                                            <li><a href="index3.php">Login </a></li>
                                            <li><a href="index3.php#toregister">Registro</a></li>

                                            <?php }

                                            else {


                                             ?>
                                              <li><a href="reservacion.php">Reservar</a></li>
                                            <li><a href="user.php">Mis Reservaciones</a></li>
                                            

                                            <?php 
                                            }
                                            ?>


                                            </ul>

                            </li>
                            <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                    <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                        <input type="text" name="s" placeholder="Buscar" />
                        <a onclick="document.getElementById('search').submit()"><div class="search_icon"></div></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!--========================================================
                          CONTENT
=========================================================-->

<section id="content" class="paddings4 white-background">
    <div class="booking-form wow bounceInDown">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <form id="bookingForm">
                        <div class="when">
                                <div class="booking-form_header">
                                    <span class="number">01.</span><span class="question">¿Cuándo?</span>
                                </div>
                                <label class="tmDatepicker">
                                 <span class="p">Fecha Inicio/Check-in</span>
                                    <input type="text" name="ArrivalDate"  placeHolder='' data-constraints="@NotEmpty @Required @Date">
                                </label>
                                <label class="tmDatepicker">
                                    <span class="p">Fecha Final/Check-out</span>
                                    <input type="text" name="ArrivalDate"  placeHolder='' data-constraints="@NotEmpty @Required @Date">
                                </label>
                        </div>

                       
                        <div class="where">
                            <div class="booking-form_header">
                                <span class="number">02.</span><span class="question">¿Cuántos?</span>
                            </div>
                            <div class="input-block">
                                <div class="tmInput">
                                    <p>Cantidad de Personas:</p>
                                    <input placeholder="36(max)" name="Destination" placeHolder="" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial' >
                                </div>
                              
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="what">
                            <div class="booking-form_header">
                                <span class="number">03.</span><span class="question">¿Qué Cabañas?</span>
                            </div>
                            <div class="tmRadio">
                                <div class="radio-block">
                                    <div class="radio">
                                        <input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                                        <span>Cabaña Rústica</span>
                                    </div>
                                    <div class="radio">
                                        <input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                                        <span>Jachak Kium</span>
                                    </div>
                                    <div class="radio">
                                        <input name="Comfort" type="radio" id="tmRadio3" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                                        <span>Su Kun Kium</span>
                                    </div>
                                </div>
                              
                                </div>
                            </div>
                       
                        <div class="who">
                            <div class="booking-form_header">
                                <span class="number">04.</span><span class="question">¿Qué Actividades?</span>
                            </div>
                            
      	                    <div class="tmRadio">
                                <div class="radio-block">
                                    <div class="radio">
                                        <input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                                        <span>Kayak</span>
                                    </div>
                                    <div class="radio">
                                        <input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                                        <span>Caminata</span>
                                    </div>
                            </div>
                        <div class="clearfix"></div>
                        <a class="btn-default" href="#" data-type="submit">ENVIAR</a><br><br><br><br>
                    


                    </form>
                </div>
             </div>
        </div>
     </div>

     <div id="bookingFormD"></div>

    

</section>



<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
    <div class="banner footer_banner wow bounceInLeft">
        <div class="container">
            <div class="row">
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">TELÉFONO</span>
                        <div
                                class="contact-info_icon"><img src="images/phone-icon.png" class="contact-info_icon_phone"
                                                               alt=""/></div>
                        <span class="contact-info_description">961 652 02 43</span></div>
                </div>
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">email</span>
                        <div class="contact-info_icon"><img src="images/mail-icon.png" class="contact-info_icon_email" alt=
                                ""/></div>
                        <a class="contact-info_simple-link">contacto@treslagunas.com.mx</a>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="contact-info socials">
                        <span class="contact-info_header">SÍGUENOS</span>
                        <div
                                class="contact-info_icon"><img src="images/facebook-icon.png" class="contact-info_icon_facebook" alt=""/><img src="images/twitter-icon.png" class="contact-info_icon_twitter" alt=""/></div>
                        <a class="contact-info_simple-link">Facebook</a><a class="contact-info_simple-link">Twitter</a>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">visitA</span>
                        <div
                                class="contact-info_icon"><img src="images/visit-icon.png" class="contact-info_icon_visit"
                                                               alt=""/></div>
                        <span class="contact-info_description">Selva Lacandona, Chiapas.</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="privacy">
        <span class="privacy wow bounceInRight">Chiapas Appventure </span> © <span id="copyright-year"></span> | <a href="index-6.html">Privacy policy</a>
    </div>
</footer>
</body>
</html>