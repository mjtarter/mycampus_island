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
        
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- xxx Share This Buttons (Social Media Share) xxx -->
        <script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "9aa9f18f-1bd3-4e9d-a7d6-4529777ac776", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head>
	
	<body id="gallery-page">	
    	
    	<!--[if lte IE 7]><script src="js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
    
    <div class="page-wrap"> <!-- Wrapper for sticky footer !-->

    	<div id="contact-overlay">
			<section class="container" id="contact-overlay-section">
	            <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center" id="contact-overlay-box">
	                <p class="text-right"><span onclick="overlayHide()" class="glyphicon glyphicon-remove-circle exit-button"></span></p>
	                <h1 class="no-margin pad-0"><i>Contact</i></h1>
	                <p><i><?php if ($field_db['phone'] !== "") {echo '<span class="glyphicon glyphicon-phone"></span> ' . $field_db['phone'];}?></i></p>
	                <hr>
	                <form name="contactform" method="post" class="form-horizontal" action="message-sent.php">
	                    <div class="form-group">
	                        <label for="first-name">First Name *</label>
	                        <input type="text" id="first-name" name="first_name">
	                    </div>
	                    <div class="form-group">
	                        <label for="last-name">Last Name *</label>
	                        <input type="text" id="last-name" name="last_name">
	                    </div>
	                    <div class="form-group">
	                        <label for="email">Email *</label></td>
	                        <input type="text" id="email" name="email">
	                    </div>
	                    <div class="form-group">
	                        <label for="email">Phone *</label></td>
	                        <input type="text" id="phone" name="phone">
	                    </div>
	                    <div class="form-group" style="width:80%; margin-right:auto; margin-left:auto">
	                        <label for="comments" class="text-center">Message *</label>
	                        <textarea class="form-control" id="comments" name="comments" rows="5">Hello! I was searching for student housing on MyCampusIsland.com and found information about <?php if ($field_db['type'] == "apartment" or $field_db['type'] == "apartment, townhome") { echo $field_db['apt_name'];} else { echo $field_db['address'];}; ?>. Please respond at your earliest convenience to discuss availability. Thank you!</textarea>
	                    </div>
	                    <div class="form-group">
	                        <input type="submit" class="button blue-button" value="Submit">
	                    </div>
	                </form>
	            </div>          
	        </section>
		</div>

        <nav id="main-nav">
        	<div class="container">
        		<div id="logo"><img src="img/mci-logo.png" alt="MyCampus Island logo"><p class="text-center" id="logo-text">The Collegiate Reference For Housing</p></div>
                <ul id="menu">
		        	<li><a href="property.php?id=<?php $id = $field_db['id']; echo $id; ?>">Basic Info</a></li>
		            <li><a href="#">Gallery</a></li>
		            <li><a href="amenities.php?id=<?php $id = $field_db['id']; echo $id; ?>">Amenities</a></li>
                	<li><a href="location.php?id=<?php $id = $field_db['id']; echo $id; ?>">Location</a></li>
                </ul>
            </div>
        </nav>

        <section class="container">
			<div class="title-box col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
				<p class="no-margin">GALLERY</p>
			</div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			<ol class="carousel-indicators">
			    <?php 
			    	echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';

			      	if (file_exists('photos/' . $field_db['id'] .'a.jpg')) {
						echo '<li data-target="#myCarousel" data-slide-to="1"></li>';};

					if (file_exists('photos/' . $field_db['id'] .'b.jpg')) {
						echo '<li data-target="#myCarousel" data-slide-to="2"></li>';};

					if (file_exists('photos/' . $field_db['id'] .'c.jpg')) {
						echo '<li data-target="#myCarousel" data-slide-to="3"></li>';};

					if (file_exists('photos/' . $field_db['id'] .'d.jpg')) {
						echo '<li data-target="#myCarousel" data-slide-to="4"></li>';};

					if (file_exists('photos/' . $field_db['id'] .'e.jpg')) {
						echo '<li data-target="#myCarousel" data-slide-to="5"></li>';};

					if (file_exists('photos/' . $field_db['id'] .'f.jpg')) {
					echo '<li data-target="#myCarousel" data-slide-to="6"></li>'
				
				;}?>			
			</ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <?php 
			      	if (file_exists('photos/' . $field_db['id'] .'.jpg')) {
			      		echo '<img src="photos/' . $field_db['id'] . '.jpg">' 
			      	;}?>
			    </div>

			    <?php 
		      		if (file_exists('photos/' . $field_db['id'] .'a.jpg')) {
		      			echo
			    		'<div class="item">
			      			<img src="photos/' . $field_db['id'] . 'a.jpg">
			      		</div>' 
			    ;}?>

			    <?php 
		      		if (file_exists('photos/' . $field_db['id'] .'b.jpg')) {
		      			echo
			    		'<div class="item">
			      			<img src="photos/' . $field_db['id'] . 'b.jpg">
			      		</div>' 
			    ;}?>

			    <?php 
		      		if (file_exists('photos/' . $field_db['id'] .'c.jpg')) {
		      			echo
			    		'<div class="item">
			      			<img src="photos/' . $field_db['id'] . 'c.jpg">
			      		</div>' 
			    ;}?>

			    <?php 
		      		if (file_exists('photos/' . $field_db['id'] .'d.jpg')) {
		      			echo
			    		'<div class="item">
			      			<img src="photos/' . $field_db['id'] . 'd.jpg">
			      		</div>' 
			    ;}?>

			    <?php 
		      		if (file_exists('photos/' . $field_db['id'] .'e.jpg')) {
		      			echo
			    		'<div class="item">
			      			<img src="photos/' . $field_db['id'] . 'e.jpg">
			      		</div>' 
			    ;}?>

			    <?php 
		      		if (file_exists('photos/' . $field_db['id'] .'f.jpg')) {
		      			echo
			    		'<div class="item">
			      			<img src="photos/' . $field_db['id'] . 'f.jpg">
			      		</div>' 
			    ;}?>  
			</div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>
	</div> <!-- End Sticky Footer Page Wrap !-->

        <footer class="site-footer">
        	<div class="container">
            	<img class="img-center" src="img/mci-logo.png" alt="MyCampus Island logo">
                <hr>
                <div class="row">
                	<div class="col-xs-4 text-center mobile-width">
                    	<p class="footer-title" id="search-icon">Info</p>
                    	<div>
	                        <ul class="f-left">
	                        	<li><a href="property.php?id=<?php $id = $field_db['id']; echo $id; ?>">Basic Info</a></li>
	                            <li><a href="">Gallery</a></li>
	                            <li><a href="amenities.php?id=<?php $id = $field_db['id']; echo $id; ?>">Amenities</a></li>
	                        </ul>
	                        <ul class="f-left">
	                            <li><a href="#" onclick="overlayOn()">Contact</a></li>
	                            <li><a href="location.php?id=<?php $id = $field_db['id']; echo $id; ?>">Map</a></li>
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