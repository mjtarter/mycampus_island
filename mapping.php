<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Student Housing | Bloomington, Indiana</title>
        <meta name="description" content="The most comprehensive Indiana University student housing resource available for Bloomington, Indiana. View pros/cons, landlord contact, tours, amenities, and much more!">         
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
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="js/google-map.js"></script> 
	</head>
    
    <body id="mapping" onLoad="plot_map_data();">

        <!--[if lte IE 7]><script src="js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->

        <nav id="main-nav">
            <div class="container">
                <div id="logo"><img src="img/mci-logo.png" alt="MyCampus Island logo"><p class="text-center" id="logo-text">The Collegiate Reference For Housing</p></div>
                <ul id="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dorms</a></li>
                    <li><a href="#">Housing Search</a></li>
                    <li><a href="#">Landlords</a></li>
                </ul>
            </div>
        </nav>
        <div id="search-bar">
            <ul class="container text-center" id="search-table">
                <div class="row no-margin">
                    <li id="search-bar-radio">
                        <form action="mapping.php" method="GET">
                            <p class="no-margin"><input type="radio" name="housing_availability" checked="checked" value="no"> Encyclopedia <abbr class="hidden-xs" title="All housing in the database, whether listed as currently available or not."><img src="img/icon-tooltip.png" height="16"></abbr></p>
                            <p class="no-margin"><input type="radio" name="housing_availability" value="yes"> Listings <abbr class="hidden-xs" title="Housing that is listed as available for the current semester."><img src="img/icon-tooltip.png" height="16"> </abbr></p>
                    </li>
                    <li class="search-bar-dropdown">
                        <p class="no-margin">Type:</p>
                        <select name="house_type" class="form-box">
                            <option value="e">Any</option>
                            <option value="house"> House</option> 
                            <option value="apartment"> Apartment</option>
                            <option value="townhome"> Townhome</option>
                        </select>
                    </li>
                    <li class="search-bar-dropdown">
                        <p class="no-margin">Bedrooms:</p>
                        <select name="number_bdrms" class="form-box">
                            <option value="All">Any</option>
                            <option value="studio"> Studio</option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option> 
                            <option value="5"> 5</option>
                        </select>
                    </li>
                    <li class="search-bar-box">
                        <p class="no-margin">Min Price:</p>
                        <input type="number" name="min_price" value="0" class="form-box">
                    </li>
                    <li class="search-bar-box">
                        <p class="no-margin text-center">Max Price:</p>
                        <input type="number" name="max_price" value="10000" class="form-box">
                    </li>
                    <li class="search-bar-btn">
                        <input type="submit" class="button blue-button" id="search-button" name="submit" value="Search"> 
                    </form>
                    </li>
                </div>
            </ul>
        </div>        

        <div id="map">
        </div>
        
        <button id="toggle-btn" class="button blue-button" onclick="toggle()">
            <span id="toggle-text"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Refine Search</span>
        </button>

        <form action="list.php" method="GET">
            <input type='hidden' name='housing_availability' value="<?php echo $_GET['housing_availability']; ?>" />
            <input type='hidden' name='house_type' value="<?php echo $_GET['house_type']; ?>" />
            <input type='hidden' name='number_bdrms' value="<?php echo $_GET['number_bdrms']; ?>" />
            <input type='hidden' name='min_price' value="<?php echo $_GET['min_price']; ?>" />
            <input type='hidden' name='max_price' value="<?php echo $_GET['max_price']; ?>" />
            <button id="view-btn" class="button blue-button" onclick="submit();">
                <span id="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> List View</span>
            </button>
         </form>

        <?php  include ('connect.php');  
	
            $bdrms = $_GET['number_bdrms'];

            if ($bdrms == "All") {
             	$query= "select * from markers where type LIKE '%$_GET[house_type]%' and (($_GET[min_price] >= Price and $_GET[min_price] <= Price_Two) or ($_GET[max_price] >= Price and $_GET[max_price] <= Price_Two) or ($_GET[min_price] <= Price and $_GET[max_price] >= Price)) and (Available = 'yes' or Available = '$_GET[housing_availability]')";}
            	else { $query= "select * from markers where type LIKE '%$_GET[house_type]%' and bdrms LIKE '%$_GET[number_bdrms]%' and (($_GET[min_price] >= Price and $_GET[min_price] <= Price_Two) or ($_GET[max_price] >= Price and $_GET[max_price] <= Price_Two) or ($_GET[min_price] <= Price and $_GET[max_price] >= Price)) and (Available = 'yes' or Available = '$_GET[housing_availability]')";};		

            	$result = mysql_query($query, $conn) or die(mysql_error());
            			
            	$map_part1 = file_get_contents("map_part1.txt");
            	$map_part2 = $query;
            	$map_part3 = file_get_contents("map_part3.txt");	
            	$results3  = file_put_contents("map.php",$map_part1 . $map_part2 . $map_part3);
        ?>	
            
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