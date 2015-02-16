<!DOCTYPE html>
<html lang="en">
<head>
  <title> Inicio </title>
  <meta charset="utf-8">
  <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon_.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/camera.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/touchTouch.css"/>
    <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/camera.js"></script>
    <script src="js/touchTouch.jquery.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.fancybox-1.3.4.js"></script>
    <script src="search/search.js"></script>
  <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/wow/wow.js"></script>
    <script>
        $(document).ready(function () {
            if ($('html').hasClass('desktop')) {
                new WOW().init();
            }
        });
    </script>
  <!--<![endif]-->
    <script src="js/jquery-ui.js"></script>
  <!--[if lt IE 9]>
  	<script src="js/html5shiv.js"></script>
    <link rel="stylesheet" href="css/ie.css"/>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
  <![endif]-->

    <script>
        jQuery(document).ready(function(){

            $('#camera_wrap').camera({
                loader: true,
                pagination: true,
                minHeight: '',
                thumbnails: false,
                height: '38.59375%',
                caption: true,
                navigation: false,
                fx: 'simpleFade'
            });

            $('#owl div a').touchTouch();

            $("#owl").owlCarousel({
                items : 15, //10 items above 1000px browser width
                itemsDesktop : [940, 6], //5 items between 1000px and 901px
                itemsDesktopSmall : [767, 3], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation : true,
                pagination :  false
            });

            $("a.various").fancybox();

            $( "#accordion" ).accordion({ header: "h3", collapsible: true, heightStyle: "content", active: false });
        });
    </script>
</head>

<body>
<div class="slider-wrapper">
    <div id="camera_wrap">
        <div data-src="images/slider1.png">
            <div class="fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="caption fadeIn">
                            <a href="index.html"><img src="images/big-logo.png" alt=""/></a>
                             <h5>Tres Lagunas</h5>
                            <span>Selva Lacandona, Chiapas</span>
                            <a class="btn__big" href="#">Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-src="images/slider2.png">
            <div class="fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="caption fadeIn">
                            <a href="index.html"><img src="images/big-logo.png" alt=""/></a>
                            <h5>Tres Lagunas</h5>
                            <span>Selva Lacandona, Chiapas</span>
                            <a class="btn-default btn__big" href="#">Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-src="images/slider3.png">
            <div class="fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="caption fadeIn">
                            <a href="index.html"><img src="images/big-logo.png" alt=""/></a>
                            <h5>Tres Lagunas</h5>
                            <span>Selva Lacandona, Chiapas</span>
                            <a class="btn-default btn__big" href="#">Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

  <!--========================================================
                            HEADER 
  =========================================================-->
  <header id="header">
    <div id="stuck_container">
      <div class="container">
        <div class="row">
          <div class="grid_12">
       <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="index.php">Inicio</a></li>
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
                            <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
              <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                  <input type="text" name="s" placeholder="Buscar"/>
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

  <section id="content">

      <div class="white-background paddings1">
          <div class="container">
              <div class="row">
                  <div class="grid_4">
                      <div class="post1 wow bounceInLeft">
                          <h3><a href="#">UN AGRADABLE DESCANSO</a></h3>
                          <p>Conoce las cabañas que tenemos para ti.</p>
                          <a href="#"><div class="sprite sprite1"></div></a>
                      </div>
                  </div>
                  <div class="grid_4">
                      <div class="post1 wow fadeIn">
                          <h3><a href="#">CONOCE TRES LAGUNAS</a></h3>
                          <p>Dale un vistazo al recorrido virtual de Tres Lagunas.</p>
                          <a href="#"><div class="sprite sprite2"></div></a>
                      </div>
                  </div>
                  <div class="grid_4">
                      <div class="post1 wow bounceInRight">
                          <h3><a href="#">CONSÚLTANOS</a></h3>
                          <p>Escríbenos, pronto te atenderemos.</p>
                          <a href="#"><div class="sprite sprite3"></div></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="grey-background">
          <div class="container">
              <div class="row">
                  <div class="grid_12">
                      <div class="h2 wow bounceInUp">
                          <h2>Nuestras Noticias</h2>
                          <span class="h2_span">Conoce todo acerca de nuestro Santuario </span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="grid_3">
                      <div class="post2 wow bounceInDown">
                          <img src="images/page1_img1.png" alt=""/>
                          <div class="content">
                              <h3>El Tucán Que Vive en Libertad</h3>
                              <p>Siempre regresa a la selva</p>
                              <a class="btn-default" href="#">Leer Más</a>
                          </div>
                      </div>
                  </div>
                  <div class="grid_3">
                      <div class="post2 wow bounceInUp">
                          <img src="images/page1_img2.png" alt=""/>
                          <div class="content">
                              <h3>El Matapalo</h3>
                              <p>Conoce el por qué de su nombre</p>
                              <a class="btn-default" href="#">Leer Más</a>
                          </div>
                      </div>
                  </div>
                  <div class="grid_3">
                      <div class="post2 wow bounceInDown">
                          <img src="images/page1_img3.png" alt=""/>
                          <div class="content">
                              <h3>Un Guardían de la Selva </h3>
                              <p>Su nombre es Pablo Chankin</p>
                              <a class="btn-default" href="#">Leer Más</a>
                          </div>
                      </div>
                  </div>
                  <div class="grid_3">
                      <div class="post2 wow bounceInUp">
                          <img src="images/page1_img4.png" alt=""/>
                          <div class="content">
                              <h3>Campamento Natura 2014</h3>
                              <p>Fotografía en la selva</p>
                              <a class="btn-default" href="#">Leer Más</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="white-background paddings5">
          <div class="container">
              <div class="row">
                  <div class="grid_12">
                      <div class="h2 wow bounceInUp">
                          <h2>GALERÍA</h2>
                          <span class="h2_span">Echa un vistazo a la flora, fauna y paisajes naturales que el Santuario del Cocodrilo Tres Lagunas tiene para ti, una experiencia única en la Selva Lacandona, Chiapas.</span>

                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="grid_12">
                      <div id="owl">
                              <div class="item">
                                  <a href="images/gallery1_big.jpg" class="gallery">
                                      <img src="images/gallery1.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery2_big.jpg" class="gallery">
                                      <img src="images/gallery2.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery3_big.jpg" class="gallery">
                                      <img src="images/gallery3.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery4_big.jpg" class="gallery">
                                      <img src="images/gallery4.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>


                              <div class="item">
                                  <a href="images/gallery5_big.jpg" class="gallery">
                                      <img src="images/gallery5.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                          <div class="item">
                              <a href="images/gallery6_big.jpg" class="gallery">
                                  <img src="images/gallery6.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                          <div class="item">
                              <a href="images/gallery7_big.jpg" class="gallery">
                                  <img src="images/gallery7.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                          <div class="item">
                              <a href="images/gallery8_big.jpg" class="gallery">
                                  <img src="images/gallery8.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                          <div class="item">
                              <a href="images/gallery9_big.jpg" class="gallery">
                                  <img src="images/gallery9.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                          <div class="item">
                              <a href="images/gallery10_big.jpg" class="gallery">
                                  <img src="images/gallery10.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                          <div class="item">
                              <a href="images/gallery11_big.jpg" class="gallery">
                                  <img src="images/gallery11.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                          <div class="item">
                              <a href="images/gallery12_big.jpg" class="gallery">
                                  <img src="images/gallery12.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                          <div class="item">
                              <a href="images/gallery13_big.jpg" class="gallery">
                                  <img src="images/gallery13.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                          <div class="item">
                              <a href="images/gallery14_big.jpg" class="gallery">
                                  <img src="images/gallery14.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                          <div class="item">
                              <a href="images/gallery15_big.jpg" class="gallery">
                                  <img src="images/gallery15.png" alt=""/>
                                  <span class="gallery_icon"></span>
                              </a>
                          </div>

                              <div class="item">
                                  <a href="images/gallery1_big.jpg" class="gallery">
                                      <img src="images/gallery1.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery2_big.jpg" class="gallery">
                                      <img src="images/gallery2.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery3_big.jpg" class="gallery">
                                      <img src="images/gallery3.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery4_big.jpg" class="gallery">
                                      <img src="images/gallery4.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>


                              <div class="item">
                                  <a href="images/gallery5_big.jpg" class="gallery">
                                      <img src="images/gallery5.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery6_big.jpg" class="gallery">
                                      <img src="images/gallery6.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery7_big.jpg" class="gallery">
                                      <img src="images/gallery7.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery8_big.jpg" class="gallery">
                                      <img src="images/gallery8.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery9_big.jpg" class="gallery">
                                      <img src="images/gallery9.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery10_big.jpg" class="gallery">
                                      <img src="images/gallery10.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery11_big.jpg" class="gallery">
                                      <img src="images/gallery11.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery12_big.jpg" class="gallery">
                                      <img src="images/gallery12.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery13_big.jpg" class="gallery">
                                      <img src="images/gallery13.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery14_big.jpg" class="gallery">
                                      <img src="images/gallery14.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                              <div class="item">
                                  <a href="images/gallery15_big.jpg" class="gallery">
                                      <img src="images/gallery15.png" alt=""/>
                                      <span class="gallery_icon"></span>
                                  </a>
                              </div>

                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="grid_12">
                      <div class="owl_link">
                        <a class="btn-default" href="#">Ver Más</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
<div class="stellar-section">
      <div class="banner banner4 wow bounceInUp stellar-block" data-stellar-background-ratio="0.1">
          <div class="container">
              <div class="row">
                  <div class="grid_12">
                      <div class="h2">
                          <h2 class="h2__inset1">Tres Lagunas Video</h2>
                          <span class="h2_span"> Un lugar que heredaron los lacandones, descendientes directos de los mayas. Se trata del centro ecoturístico Tres Lagunas, ubicado en plena selva lacandona en el estado de Chiapas.  </span>
                      </div>
                      <a href="//www.youtube.com/embed/6nspuNybsW0" class="various iframe btn-play"><i class="fa fa-play"></i></a>
                      <h3 class="h3__inset1">Ver video</h3>
                  </div>
              </div>
          </div>
      </div>
</div>

      <div class="white-background paddings3">
          <div class="container">
              <div class="row">
                  <div class="grid_4">
                      <div class="h2 wow bounceInUp">
                          <h2>LUGARES CERCANOS</h2>
                          <span class="h2_span">¿Qué lugares al rededor de Tres Lagunas hay?</span>
                      </div>
                      <div class="post8 wow bounceInLeft">
                          <img src="images/page1_img5.png" alt=""/>
                          <div class="post8_info">
                              <h3>Las Golondrinas</h3>
                              <p>Situada a tan solo 15 minutos apróx. del Santuario.</p>
                              <a class="simple-link" href="#">más.</a>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                      <div class="post8 wow bounceInLeft">
                          <img src="images/page1_img6.png" alt=""/>
                          <div class="post8_info">
                              <h3>zona arqueolÓgica bonampak</h3>
                              <p>Uno de los sitios arqueológicos que debes conocer.</p>
                              <a class="simple-link" href="#">más.</a></div>
                          <div class="clearfix"></div>
                      </div>
                  </div>
                  <div class="grid_4">
                      <div class="h2 wow bounceInUp">
                          <h2>Tips - selva</h2>
                          <span class="h2_span">¿Qué puedo hacer? </span>
                      </div>
                      <div id="accordion" class="wow bounceInDown">
                          <h3>ROPA CÓMODA</h3>
                          <div>Es importante llevar ropa cómoda, prendas de algodón, sudaderas y playeras que te protejan de los insectos, jeans holgados y botas cómodas para tener un recorrido agradable y quizás un sombrero que se ajuste a tu cuello para que no se caiga.</div>
                          <h3>AGUA</h3>
                          <div>
                            <p>Llevar sólo el agua indispensable para el recorrido, es decir, con un botellón de medio litro basta (personal), *tomar sorbos pequeños cada 10-12 minutos durante el recorrido.</p>
                          </div>
                          <h3>REPELENTE para mosquitos</h3>
                          <div>Los mosquitos de la Selva Lacandona son distintos a los que habitualmente conocenos en la ciudad, son más grandes y hay en mucha cantidad, se recomienda utilizar el repelente cada que el producto termine su efecto y después de bañarse. </div>
                          <h3>COMIDA</h3>
                          <div>Dependiendo de los días y las actividades que vas a realizar, es recomendable llevar solo lo indispensable de manera personal y práctico para preparar; alimentos no perecederos como atún y frijoles enlatados, pan, frutas sólidas. *Carnes, bombones, si desean realizar fogatas de noche.</div>
                          <h3>KIT PERSONAL DE LIMPIEZA</h3>
                          <div>Puede ser desde tu shampoo personal, jabón de baño, pasta de dientes, cepillo dental, etc, todo depende del cuidado que habitualmente estás acostumbrado a realizar, no olvides que aunque sea clima templado, el sol en las temporadas altas de calor es indispensable llevar consigo un protector solar.</div>
                      </div>
                  </div>
                  <div class="grid_4">
                      <div class="h2 wow bounceInUp">
                          <h2>Chiapasappventure</h2>
                          <span class="h2_span">Chiapas Appventure</span>
                      </div>
                      <div class="post3">
                      Conoce más acerca de los lugares turísticos de aventura que el majestuoso estado de Chiapas tiene para tí.
                        <p>Para ello visita la página Chiapas Appventure®.</p>
                        <p>www.chiapasappventure.com </p>
                        <p><a class="btn-default" href="#">mÁS</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<!--========================================================
                          FOOTER
=========================================================-->


  <!--========================================================
                            FOOTER 
  =========================================================-->
<footer id="footer">

    <div class="banner footer_banner wow bounceInLeft">
        <div class="container">
            <div class="row">
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">NÚm. telefÓnico</span>
                        <div
                                class="contact-info_icon"><img src="images/phone-icon.png" class="contact-info_icon_phone"
                                                                                   alt=""/></div>
                        <span class="contact-info_description">961 652 02 43</span>
                    </div>
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
                        <span class="contact-info_header">SÍguenos</span>
                        <div
                                class="contact-info_icon"><img src="images/facebook-icon.png" class="contact-info_icon_facebook" alt=""/><img src="images/twitter-icon.png" class="contact-info_icon_twitter" alt=""/></div>
                        <a class="contact-info_simple-link">Facebook</a><a class="contact-info_simple-link">Twitter</a>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">visita</span>
                        <div
                                class="contact-info_icon"><img src="images/visit-icon.png" class="contact-info_icon_visit"
                                                                                    alt=""/></div>
                        <span class="contact-info_description">Selva Lacandona, Chiapas.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="privacy wow bounceInRight">
        Chiapas Appventure © <span id="copyright-year"></span> | <a href="index-6.html">Privacy policy</a>
        <!--{%FOOTER_LINK} -->
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>