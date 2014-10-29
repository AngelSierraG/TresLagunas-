<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
                new WOW().init();
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
                    <h1><a href="index.html"><img src="images/logo.png" alt=""/></a></h1>
                    <nav>
                        <ul class="sf-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index-1.html">About us</a>
                                <ul>
                                    <li><a href="#">Hotel info</a></li>
                                    <li><a href="#">History</a>
                                        <ul>
                                            <li><a href="#">Nam liber</a></li>
                                            <li><a href="#">Duisautem</a></li>
                                            <li><a href="#">Eodemo</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Archive</a></li>
                                </ul>
                            </li>
                            <li><a href="index-2.html">Destinations</a></li>
                            <li><a href="index-3.html">News</a></li>
                            <li class="current"><a href="index-4.html">Booking</a></li>
                            <li><a href="index-5.html">Contacts</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                    <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                        <input type="text" name="s" placeholder="Enter word" />
                        <a onclick="document.getElementById('search').submit()"><i class="fa fa-search"></i></a>
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
                    <h3 class="search_header">Search result:</h3>
					<div id="search-results"></div>
                </div>
            </div>
        </div>
</section>



<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
    <div class="banner footer_banner wow bounceInRight">
        <div class="container">
            <div class="row">
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">call</span>
                        <div class="contact-info_icon"><img src="images/phone-icon.png" alt=""/></div>
                        <span class="contact-info_description">+1 800 559 6580</span>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">email</span>
                        <div class="contact-info_icon"><img src="images/mail-icon.png" alt=""/></div>
                        <a class="contact-info_simple-link">mail@demolink.org</a>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="contact-info socials">
                        <span class="contact-info_header">follow</span>
                        <div class="contact-info_icon"><a href="#"><img src="images/facebook-icon.png" alt=""/></a><a href="#"><img src="images/twitter-icon.png" alt=""/></a></div>
                        <a class="contact-info_simple-link">Facebook</a><a class="contact-info_simple-link">Twitter</a>
                    </div>
                </div>
                <div class="grid_3">
                    <div class="contact-info">
                        <span class="contact-info_header">visit</span>
                        <div class="contact-info_icon"><img src="images/visit-icon.png" alt=""/></div>
                        <span class="contact-info_description">8901 Marmora Road, Glasgow</span>
                    </div>
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