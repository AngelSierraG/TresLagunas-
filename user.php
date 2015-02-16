
<?php
//session_start();

if(!isset($_COOKIE['user'])){
	header('Location: index3.php');
	}

if (!($link=mysql_connect("localhost","root",""))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("bd_treslagunas",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   
	//echo "hola ". $_SESSION['sessionUser'];
	$user = mysql_fetch_array(mysql_query("SELECT * FROM `usuario` where `email` LIKE '". $_COOKIE["user"]."'"));
	//$_SESSION['sessionUser'] = $user['email'];
	
	
	$result  = mysql_query("SELECT * FROM  `reservacion` WHERE  `Usuario_idNombre` =". $user['idNombre'] ." ORDER BY  `reservacion`.`idReservacion` DESC ");
	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

<script>

function cerrarSesion() {
	

window.location="logout.php";	
	
	} 

function loadbaucher(idReservacion){
	
	var xmlhttpLB;
                if (window.XMLHttpRequest){
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttpLB=new XMLHttpRequest();
                }else{
                    // code for IE6, IE5
                    xmlhttpLB=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttpLB.onreadystatechange=function(){
                    if (xmlhttpLB.readyState==4 && xmlhttpLB.status==200){
                        document.getElementById("detalles").innerHTML=xmlhttpLB.responseText;
                    }
                }
                //send a request to a server
                //var valor;
                
                xmlhttpLB.open("GET","baucher.php?idReservacion=" +idReservacion ,false);
                xmlhttpLB.send();
	
	
	}

function showDetalles( idNombre, idReservacion){
	//alert("idR" + idReservacion);
	var xmlhttpL;
                if (window.XMLHttpRequest){
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttpL=new XMLHttpRequest();
                }else{
                    // code for IE6, IE5
                    xmlhttpL=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttpL.onreadystatechange=function(){
                    if (xmlhttpL.readyState==4 && xmlhttpL.status==200){
                        document.getElementById("detalles").innerHTML=xmlhttpL.responseText;
                    }
                }
                //send a request to a server
                //var valor;
                
                xmlhttpL.open("GET","detalles.php?idReservacion="+ idReservacion + "&idNombre="+ idNombre,false);
                xmlhttpL.send();
	
	}
</script>


    <title>Bienvenido: <? echo $user['nombre'];?></title>
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
                            <li><a href="noticias.php">Noticias</a></li>
                             <li class="current"> <a href="#">Reservación</a>
                                <ul>

                                            <?php 
                                            if(!isset($_COOKIE['user'])){ 

                                            ?>
                                            <li><a href="#">Cotización</a></li>
                                            <li><a href="index3.php">Login </a></li>
                                            <li><a href="index3.php">Registro</a></li>

                                            <?php }

                                            else {


                                             ?>
                                              <li><a href="reservacion.php">Reservar</a></li>
                                            <li><a href="user.php">Mis Reservaciones</a></li>
                                             <li><a onClick="cerrarSesion()">LogOut</a></li>
                                            

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

<section id="content">
    <div class="white-background paddings2 wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="h2">
                        <h2>una puerta a la selva lacandona</h2>
                        <span class="h2_span">Santuario del Cocodrilo "Tres Lagunas"</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid_12">
                    <div class="post3">
                    <h3 align="center"><? echo $user['nombre'];?></h3> <img src="images/<? echo $user['image']; ?>" alt="">
                    
                             
                                      
                                      <div id="detalles" ><? if ($row = mysql_fetch_array($result)){ 
  

 

  
   do {      

$inicio = "". $row['fechaInicio'].""; // DD/MM/YYYY
$partI = explode(' ', $inicio);
$final = "". $row['fechaFinal'].""; // DD/MM/YYYY
$partF = explode(' ', $final);

      echo ("<p class='marker_p'><a onClick='showDetalles(". $user['idNombre'].", ".$row['idReservacion'].")' ><strong>[". $row['idReservacion']."] </strong>". $partI[0]." <strong> to </strong>". $partF[0]."<strong> ". $row['noPersonas']." Personas</strong> Total: <strong>".$row['total']."</strong></a>  <a onClick='loadbaucher(".$row['idReservacion'].")'> <input type='image' src='images/".$row['estado'].".jpg' ></a></p> "); 
   } while ($row = mysql_fetch_array($result)); 

} else { 
echo "No hay reservaciones hasta el momento !"; 
} ?></div>
                                       
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grey-background wow bounceInUp" >
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="h2">
                        <h2>CONFIAMOS EN LA NATURALEZA</h2>
                        <span class="h2_span">La vida en la selva lacandona.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid_12">
                    <div class="post4">
                        <h3>LA SELVA LACANDONA; LOS PULMONES DE CHIAPAS, MÉXICO, PARA EL MUNDO.</h3>
                        <p>El Santuario del Cocodrilo Tres Lagunas tiene diferentes objetivos que contribuyen con la ecología, la naturaleza y el medio ambiente con estrategias que son las adecuadas para estas maravillas naturales.</p>

                        <div class="row">
                            <div class="grid_6">
                              <div class=" marker marker1"><img src="images/page2_icon1.png" alt=""/></div>
                                <p class="marker_p"><a href="#">Estamos trabajando con organizaciones para que el lugar sea más conocido y se recaudan fondos a beneficio de la comunidad lacandona.</a>                            </p>
                            </div>
                            <div class="grid_6">
                                <div class="marker marker2"><img src="images/page2_icon2.png" alt=""/></div>
                                <p class="marker_p"><a href="#">Mediante los proyectos, se contribuye ampliamente a preservar la flora y fauna de este maravilloso lugar.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner banner3  wow bounceInLeft">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="h2">
                        <h2 class="h2__inset1">NUESTRO EQUIPO</h2>
                        <span class="h2_span"> Más que un equipo, somos una familia. Entonces decimos que una familia debe ser un gran equipo para que algo pueda funcionar correctamente. Inculcar a los hijos todos aquellos valores para la preservación de Tres Lagunas. el respeto a la naturaleza y amor a lo que nos rodea.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid_3">
                    <div class="post5">
                        <a href="#"><img src="images/page2_img2.png" alt=""/></a>
                        <h3 class="h3__inset1"><a href="#">PABLO CHANKÍN</a></h3>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="post5">
                        <a href="#"><img src="images/page2_img3.png" alt=""/></a>
                        <h3 class="h3__inset1"><a href="#">RODRIGO CHANKÍN</a></h3>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="post5">
                        <a href="#"><img src="images/page2_img4.png" alt=""/></a>
                        <h3 class="h3__inset1"><a href="#">EDUARDO CHANKÍN</a></h3>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="post5">
                        <a href="#"><img src="images/page2_img5.png" alt=""/></a>
                        <h3 class="h3__inset1"><a href="#">ADRIÁN CHANKÍN</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="white-background paddings3  wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="grid_4">
                    <div class="h2">
                        <h2>MISIÓN</h2>
                        <span class="h2_span">Contribuir con el turismo sustentable</span>
                    </div>
                    <div class="post6">
                        <h3>DESARROLLO POTENCIAL DE LA SELVA LACANDONA.</h3>
                        <p>Coadyuvar al desarrollo del potencial turístico del Estado de Chiapas a través del Santurario del Cocodrilo Tres Lagunas, conservando la naturaleza y cultura, desarrollando proyectos que impulsen el sector turístico de esta población.</p>
</div>
                </div>
                <div class="grid_4">
                    <div class="h2">
                      <h2>visiÓn</h2>
                        <span class="h2_span">Ser el #1 de los centros ecoturísticos en la Selva Lacandona.</span>
                    </div>
                    <div class="post3">
                        <p>Pretendemos posicionarnos como el Centro Ecoturístico más destacado por sus actividadesy servicios de calidad en el año 2016.</p>
                        <p>Aumentar la popularidad de la afluencia turística a Zona Selva a un 50% en el año 2015.</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="h2">
                        <h2>VALORES</h2>
                        <span class="h2_span">Hacer lo correcto</span>
                    </div>
                        <div class="post7">
                        <p><span class="post_header2">Planeación	- Responsabilidad - </span><span class="post_header2">Respeto</span></p>
                        <p><span class="post_header2">Integración - </span><span class="post_header2">Desarrollo Social</span></p>
                        <p><span class="post_header2">Superación - </span><span class="post_header2">Solidaridad -</span><span class="post_header2"> Sustentabilidad</span> </p>
                        <p>&nbsp;</p>
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
                        <span class="contact-info_header">SÍGUENOS                        </span>
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
                        <div
                                class="contact-info_icon"></div>
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