<?php 

	include ("connect.php");

	$id = $_GET['id'];

	$query ='SELECT *
			FROM markers 
			WHERE id = "' . $id .'"';

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
		<title><?php echo $field_db['address'] . ' | Bloomington | Student Housing' ;?></title>
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
        
        <!--Place php id into JS variable for use in main.js !-->
        <script> var id = <?php echo $id ?>;</script>

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- xxx Share This Buttons (Social Media Share) xxx -->
        <script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "9aa9f18f-1bd3-4e9d-a7d6-4529777ac776", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head>
	
	<body onLoad="imgOne(); setTimeout('imgOne2()', 3000); setTimeout('imgOne3()', 6000); setTimeout('imgOne4()', 9000); setTimeout('imgOne5()', 12000);" id="property-page"/>	
    	
    	<!--[if lte IE 7]><script src="js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
        
        <nav id="main-nav">
        	<div class="container">
        		<div id="logo"><img src="img/mci-logo.png" alt="MyCampus Island logo"><p class="text-center" id="logo-text">The Collegiate Reference For Housing</p></div>
                <ul id="menu">
		        	<li><a href="#">Basic Info</a></li>
		            <li><a href="gallery.php?id=<?php $id = $field_db['id']; echo $id; ?>">Gallery</a></li>
		            <li><a href="amenities.php?id=<?php $id = $field_db['id']; echo $id; ?>">Amenities</a></li>
                	<li><a href="location.php?id=<?php $id = $field_db['id']; echo $id; ?>">Location</a></li>
                </ul>
            </div>
        </nav>

<?php
	
	if (file_exists('photos/' . $field_db['id'] .'e.jpg')) {
		include ('inc/multi-image-display.php') 
	;} else {
		 echo 
		'<div id="top-container">
			<img src="photos/' . $field_db['id'] .'.jpg" id="main-photo">';}
?> 
			
			<div class="info-overlay">
				<div class="container" id="overlay-tbl">
					<div class="col-xs-8 col-md-6 col-lg-5 col-lg-offset-1 overlay-text">
						<span class="glyphicon glyphicon-map-marker pad-hor-5" aria-hidden="true"></span> <?php echo $field_db['address']; ?><span class="hidden-xs">, Bloomington, IN</span>
						<br><span class="glyphicon glyphicon-home pad-hor-5" aria-hidden="true"></span> Availability: Unknown
						<br><span class="glyphicon glyphicon-hand-right pad-hor-5" aria-hidden="true"></span> Personalized Grade: A-
					</div>
					<div class="col-md-4 col-lg-3 text-right hidden-sm hidden-xs overlay-text">
						<p class="no-margin">
							<?php  echo  $field_db['property_manager'] . '<br>' . $field_db['phone'];?> 
						</p>
					</div>					
					<div class="col-xs-4 col-md-2 col-lg-offset-1 text-right overlay-btn">
						<button class="button blue-button">Contact Us!</button>
					</div>
				</div>
			</div>
		</div>

		<section class="container" id="property-info">
			<div class="row">
				<div class="col-sm-6" id="at-a-glance">
					<div class="title-box col-xs-10 col-xs-offset-1">
						<p class="no-margin">AT A GLANCE</p>
					</div>
					<ul id="basic-info" class="col-lg-10 col-lg-offset-1 clearfix">
						<li>Rent (Total)</li>
						<li>
							$<?php if ($field_db['Price_Two'] == "") {echo $field_db['Price'];} else {
                				echo $field_db['Price']." - " . $field_db['Price_Two'];
                			}?>
                		</li>
						<li>Rent (Per Person)</li>
						<li>$<?php echo round($field_db['Price'] / $field_db['bdrms'], 2); ?></li>
						<li>Type</li>
						<li><?php echo $field_db['type'];?></li>
						<li>Availability</li>
						<li><?php echo $field_db['Available']; ?></li>
						<li>Bedrooms</li>
						<li><?php echo $field_db['bdrms']; ?></li>
						<li>Bathrooms</li>
						<li><?php echo $field_db['bath']; ?></li>
						<?php 
						if ($field_db['sqft'] !== "") { 
							echo 
							'<li>Sqft:</li>
							 <li>' . $field_db['sqft'] . '</li>';
						}?>
						<?php 
						if ($field_db['floors'] !== "") { 
							echo 
							'<li>Floors</li>
							<li>' . $field_db['floors'] . '</li>';
						}?>
						<?php 
						if ($field_db['property_manager'] !== "") { 
							echo 
							'<li>Property Manager:</li>
							<li>' . $field_db['property_manager'] . '</li>';
						}?>

					</ul>
				</div>
				
				<div class="col-sm-6 clearfix property-about">
					<div class="title-box col-xs-10 col-xs-offset-1">
						<p class="no-margin">ABOUT US</p>
					</div>
					<p><?php echo $field_db['Description']; ?></p>				
				</div>
			</div>
		</section>
    	
    	<section class="container hidden-xs" id="link-boxes">
	    	<hr>
	    	<ul class="col-sm-12" id="property-boxes">
	    		<a href="#">
	    			<li class="col-sm-4" id="gallery-box" style= <?php echo '"background-image:url(photos/' . $field_db['id'] . '.jpg)"' ?>>
	    				<p class="box-list-title">Gallery</p>
	    				<span class="glyphicon glyphicon-circle-arrow-right pad-vert-10"></span>
	    			</li>
	    		</a>
	    		<a href="">
		    		<li class="col-sm-4" id="amenities-box">
						<p class="box-list-title">Amenities</p>
		    			<span class="glyphicon glyphicon-circle-arrow-right pad-vert-10"></span>
		    		</li>
	    		</a>
	    		<a href="">
		    		<li class="col-sm-4" id="map-box">
						<p class="box-list-title">Map</p>
		    			<span class="glyphicon glyphicon-circle-arrow-right pad-vert-10"></span>
		    		</li>
	    		</a>	    	
	    	</ul>
		</section>

        <footer>
        	<div class="container">
            	<img class="img-center" src="img/mci-logo.png" alt="MyCampus Island logo">
                <hr>
                <div class="row">
                	<div class="col-xs-4 text-center mobile-width">
                    	<p class="footer-title" id="search-icon">Info</p>
                    	<div>
	                        <ul class="f-left">
	                        	<li><a href="#">Basic Info</a></li>
	                            <li><a href="#">Gallery</a></li>
	                            <li><a href="#">Amenities</a></li>
	                        </ul>
	                        <ul class="f-left">
	                            <li><a href="#">Contact</a></li>
	                            <li><a href="#">Map</a></li>
	                        </ul>
	                    </div>
                    </div>
                	<div class="col-xs-4 text-center mobile-width">
                    	<p class="footer-title" id="contact-icon">Contact</p>
                        <ul>
                        	<li><a href="#">Landlords</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">About Us</a></li>
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
            <div class="copyright">
            	<div class="container">
            		<p class="no-margin text-center">MyCampus Island &nbsp; | &nbsp; Copyright &#169; 2013 MyCampus Island. All rights reserved.</p>
                </div>
            </div>
        </footer> 

        <?php }; ?> <!-- End PHP !-->

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