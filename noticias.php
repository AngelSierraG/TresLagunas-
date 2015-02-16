﻿<!DOCTYPE html>
<html lang="en">
<head>
    <title>News</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon_.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="search/search.js"></script>
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
                            <li class="current"><a href="noticias.php">Noticias</a></li>
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
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="h2 wow bounceInUp">
                    <h2>NUESTROS ARTÍCULOS</h2>
                    <span class="h2_span">CONOSE MÁS DE TRES LAGUNAS</span>
                </div>
            </div>
        </div>
        <div class="row wow fadeInLeftBig">
            <div class="grid_6">
                <div class="post2 post2__offset1">
                    <img src="images/page4_img1.png" alt=""/>
                    <div class="content">
                        <h3>EL TUCÁN QUE VIVE EN LIBERTAD</h3>
                        <time datetime="2014-01-01">21/03/14</time>
                        <p>Son aves tropicales originarias de Sudamerica.<br>Se caracterizan por tener un pico enorme y de vivos colores, a pesar de su tamaño es ligero.</p>
                        <a class="btn-default" href="#">MAS INFORMACIÓN</a>
                    </div>
                </div>
            </div>
            <div class="grid_6">
                <div class="post2 post2__offset1">
                    <img src="images/page4_img2.png" alt=""/>
                    <div class="content">
                        <h3>EL MATAPALO</h3>
                        <time datetime="2014-01-01">21/03/14</time>
                        <p>son árboles característicos de las selvas de la zona tropical.<br>(Ficus máxima). Se localiza desde el sur de México hasta la cuenca del Amazonas. Alcanza de 8 hasta 25 metros de alto.</p>
                        <a class="btn-default" href="#">MAS INFORMACIÓN</a>
                    </div>
                </div>
            </div>
            <div class="grid_6">
                <div class="post2 post2__offset1">
                    <img src="images/page4_img3.png" alt=""/>
                    <div class="content">
                        <h3>UN GUARDÍAN DE LA SELVA</h3>
                        <time datetime="2014-01-01">21/03/14</time>
                        <p>El nombre de este guardian es Pablo Chankin<br>la selva lacandona es un lugar del cual necesitamos conocer y proteger, es asi como le daremos vida.</p>
                        <a class="btn-default" href="#">MAS INFORMACIÓN</a>
                    </div>
                </div>
            </div>
            <div class="grid_6">
                <div class="post2 post2__offset1">
                    <img src="images/page4_img4.png" alt=""/>
                    <div class="content">
                        <h3>UNA MIRADA HACIA EL FUTURO</h3>
                        <time datetime="2014-01-01">21/03/14</time>
                        <p>Selva lacandona y su sustentabilidad.<br>como podemos ayudar en este proyecto de sustentabilidad, asi como el taller "plantar un arbol".</p>
                        <a class="btn-default" href="#">MAS INFORMACIÓN</a>
                    </div>
                </div>
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
                        <span class="contact-info_header">call</span>
                        <div
                                class="contact-info_icon"><img src="images/phone-icon.png" class="contact-info_icon_phone"
                                                               alt=""/></div>
                        <span class="contact-info_description">+1 800 559 6580</span>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">email</span>
                        <div class="contact-info_icon"><img src="images/mail-icon.png" class="contact-info_icon_email" alt=
                                ""/></div>
                        <a class="contact-info_simple-link">mail@demolink.org</a>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="contact-info socials">
                        <span class="contact-info_header">follow</span>
                        <div
                                class="contact-info_icon"><img src="images/facebook-icon.png" class="contact-info_icon_facebook" alt=""/><img src="images/twitter-icon.png" class="contact-info_icon_twitter" alt=""/></div>
                        <a class="contact-info_simple-link">Facebook</a><a class="contact-info_simple-link">Twitter</a>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">visit</span>
                        <div
                                class="contact-info_icon"><img src="images/visit-icon.png" class="contact-info_icon_visit"
                                                               alt=""/></div>
                        <span class="contact-info_description">8901 Marmora Road, Glasgow</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="privacy">
        Chiapas Appventure  © <span id="copyright-year"></span> | <a href="index-6.html">Privacy policy</a>
    </div>
</footer>
</body>
</html>