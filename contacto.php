﻿<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacto</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon_.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/contact-form.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="search/search.js"></script>
    <script src="js/TMForm.js"></script>
    <script src="js/modal.js"></script>
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
                             <li > <a href="#">Reservación</a>
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
                            <li class="current"><a href="contacto.php">Contacto</a></li>
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

<section id="content" class="paddings2 white-background">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="h2 wow bounceInUp">
                    <h2>CÓMO ENCONTRARNOS</h2>
                    <span class="h2_span">UBÍCANOS MEDIANTE GOOGLE MAPS</span>
                </div>
            </div>
        </div>
        <div class="row wow bounceInDown">
            <div class="grid_12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3819.6036810537926!2d-91.10653099999999!3d16.796382!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f4a468a7f6159f%3A0x3ab4c27e9be75963!2sEcolodge+Tres+Lagunas+-+Selva+Lacandona!5e0!3m2!1ses!2smx!4v1415841870438" width="650" height="650" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="grid_9">
                <div class="post3">
                <p>Google Maps es un servidor de aplicaciones de mapas en la web que pertenece a Google. Ofrece imágenes de mapas desplazables, así como fotografías por satélite del mundo e incluso la ruta entre diferentes ubicaciones.</p>
                <p>
		    Una de las dificultades con las que se cuenta en ocasiones es el poder ubicar el destino al que se desea llegar, TRES LAGUNAS es uno de los casos ya que es una zona de poca circulación, pero para ello ocuparemos una valiosa herramienta como lo es Google Maps.</p>
                </div>
            </div>
            <div class="grid_3">
                <address class="address1">
                    <p class="our-address">Selva Lacandona, Chiapas.</p>
                    <dl>
                        <dt>
                            <span class="numbers">Teléfono: <span class="contact-info_description">961 652 02 43</span></span><span></span><br>
                            <span class="mail">E-mail: </span><span><a href="#" class="privacy-demolink">CONTACTO@TRESLAGUNAS.COM.MX</a></span><br>
                        </dt>
                        <dd></dd>
                    </dl>
                </address>
            </div>
        </div>
        <div class="row">
            <div class="grid_12">
                <div class="h2 wow bounceInLeft">
                    <h2>CONTACTO</h2>
                    <span class="h2_span">LLENAR CORRECTAMENTE CADA CAMPO</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="grid_12">
                <form id="contact-form">
                    <div class="contact-form-loader"></div>
                    <fieldset>
                        <div class="row">
                            <div class="grid_6">
                                <label class="name">
                                    <input type="text" name="Name" placeholder="NOMBRE:" data-constraints="@Required @JustLetters" />
                                    <span class="empty-message">*This field is required.</span>
                                </label>
                                <label class="email">
                                    <input type="text" name="email" placeholder="CORREO ELECTRÓNICO:" value=""
                                           data-constraints="@Required @Email" />
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid email.</span>
                                </label>
                                <label class="phone">
                                    <input type="text" name="Phone" placeholder="TELÉFONO:" value=""
                                           data-constraints="@Required @JustNumbers" />
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid phone.</span>
                                </label>

                            </div>

                            <div class="grid_6">
                                <label class="message">
                                    <textarea name="message" placeholder="MENSAJE:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*The message is too short.</span>
                                </label>
                            </div>

                            <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
                            <div class="grid_12">
                                <div class="contact-form-buttons">
                                    <a href="#" data-type="submit" class="btn-default">ENVIAR</a>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal fade response-message">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    You message has been sent! We will be in touch soon.
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
        Copyright © <span id="copyright-year"></span> | <a href="index-6.html">Privacy policy</a>
    </div>
</footer>

</body>
</html>