<?php 

    include ("connect.php");

    $id = $_GET['id'];

    $query ='SELECT *
            FROM Dorms 
            WHERE Name = "' . $id .'"';

    $result = mysql_query($query);
    while ( $field_db = mysql_fetch_assoc($result) ) {

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $field_db['Name'] . ' Dorm | Bloomington | Location' ;?></title> 
        <meta property="og:description" content="Find your dream student housing property in Bloomington, Indiana and sign a lease today!" />
        <meta property="og:image" content="img/mci-logo.png" />        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/slicknav.css" />
        <link rel="stylesheet" href="css/global.css" />
        <link rel="stylesheet" href="css/pages.css" />
        <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie8.css" /><![endif]-->

        <!--Place php id into JS variable for use in google-location.js !-->
        <script> var lat = <?php echo $field_db['lat']; ?></script>
        <script> var lng = <?php echo $field_db['lng']; ?></script>

        
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="js/dorm-location.js"></script>

        <!-- xxx Share This Buttons (Social Media Share) xxx -->
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "9aa9f18f-1bd3-4e9d-a7d6-4529777ac776", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head>

    <body onload="plot_location_data()">

        <!--[if lte IE 7]><script src="js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
    
        <div id="contact-overlay">
            <section class="container" id="contact-overlay-section">
                <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center" id="contact-overlay-box">
                    <p class="text-right no-margin"><span onclick="overlayHide()" class="glyphicon glyphicon-remove-circle exit-button"></span></p>
                    <h1 class="no-margin pad-0"><i>Contact</i></h1>
                    <hr>
                    <p class="text-left col-md-offset-1"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $field_db['address']; ?></p>
                    <p class="text-left col-md-offset-1"><span class="glyphicon glyphicon-phone"></span> <?php echo $field_db['phone']; ?></p>
                    <p class="text-left col-md-offset-1"><span class="glyphicon glyphicon-envelope"></span> General Information: <?php echo $field_db['email']; ?></p>
                </div>          
            </section>
        </div>

        <nav id="main-nav">
            <div class="container">
                <div id="logo"><img src="img/mci-logo.png" alt="MyCampus Island logo"><p class="text-center" id="logo-text">The Collegiate Reference For Housing</p></div>
                <ul id="menu">
                    <li><a href="dorm-page.php?id=<?php $Name = $field_db['Name']; echo $Name; ?>">Basic Info</a></li>
                    <li><a href="dorm-gallery.php?id=<?php $Name = $field_db['Name']; echo $Name; ?>">Gallery</a></li>
                    <li><a href="dorm-amenities.php?id=<?php $Name = $field_db['Name']; echo $Name; ?>">Amenities</a></li>
                    <li><a href="#">Location</a></li>
                </ul>
            </div>
        </nav>

        <div id="dorm-location"></div>

        <?php }; ?> <!-- End PHP !-->

        <footer>
            <div class="container">
                <img class="img-center" src="img/mci-logo.png" alt="MyCampus Island logo">
                <hr>
                <div class="row">
                    <div class="col-xs-4 text-center mobile-width">
                        <p class="footer-title" id="search-icon">Info</p>
                        <div>
                            <ul class="f-left">
                                <li><a href="dorm-page.php?id=<?php $id = $field_db['Name']; echo $Name; ?>">Basic Info</a></li>
                                <li><a href="dorm-gallery.php?id=<?php $id = $field_db['Name']; echo $Name; ?>">Gallery</a></li>
                                <li><a href="dorm-amenities.php?id=<?php $id = $field_db['Name']; echo $Name; ?>">Amenities</a></li>
                            </ul>
                            <ul class="f-left">
                                <li><a href="#" onClick="overlayOn()">Contact</a></li>
                                <li><a href="#">Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-4 text-center mobile-width">
                        <p class="footer-title" id="contact-icon">Contact</p>
                        <ul>
                            <li><a href="landlords.html">Landlords</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-4 text-center hide-mobile" id="f-right">
                        <p class="footer-title hide-mobile" id="connect-icon">Connect</p>
                        <ul id="share-buttons">
                            <li><span class='st_sharethis_large' displayText='ShareThis'></span></li>
                            <li><span class='st_facebook_large' displayText='Facebook'></span></li>
                            <li><span class='st_twitter_large' displayText='Tweet'></span></li>
                            <li><span class='st_googleplus_large' displayText='Google +'></span></li>
                            <li><span class='st_email_large' displayText='Email'></span></li>
                        </ul>                        
                    </div>                    
                </div>
            </div>
            <div class="copyright-no-sticky">
                <div class="container">
                    <p class="no-margin text-center">MyCampus Island &nbsp; | &nbsp; Copyright &#169; 2013 MyCampus Island. All rights reserved.</p>
                </div>
            </div>
        </footer> 

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- xxx slicknav mobile responsive navbar xxx -->
        <script src="js/jquery.slicknav.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#menu').slicknav();
            });
        </script>
        <!-- xxx Google Analytics xxx -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-49766018-1', 'mycampusisland.com');ga('send', 'pageview');
        </script>
    </body>
</html>