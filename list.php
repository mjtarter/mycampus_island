<?php  	
	
	include ('connect.php');  

	$bdrms = $_GET['number_bdrms'];

	// find out how many rows are in the table 
	if ($bdrms == "All") {
		$query="select COUNT(*) from markers where type LIKE '%$_GET[house_type]%' and (($_GET[min_price] >= Price and $_GET[min_price] <= Price_Two) or ($_GET[max_price] >= Price and $_GET[max_price] <= Price_Two) or ($_GET[min_price] <= Price and $_GET[max_price] >= Price)) and (Available = 'yes' or Available = '$_GET[housing_availability]')";}
	else { $query= "select COUNT(*) from markers where type LIKE '%$_GET[house_type]%' and bdrms LIKE '%$_GET[number_bdrms]%' and (($_GET[min_price] >= Price and $_GET[min_price] <= Price_Two) or ($_GET[max_price] >= Price and $_GET[max_price] <= Price_Two) or ($_GET[min_price] <= Price and $_GET[max_price] >= Price)) and (Available = 'yes' or Available = '$_GET[housing_availability]')";};

	$result = mysql_query($query, $conn) or die(mysql_error());
	$r = mysql_fetch_row($result);
	$numrows = $r[0];

	// number of rows to show per page
	$rowsperpage = 10;  
	// find out total pages
	$totalpages = ceil($numrows / $rowsperpage);

	// get the current page or set a default
	if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
	   // cast var as int
	   $currentpage = (int) $_GET['currentpage'];
	} else {
	   // default page num
	   $currentpage = 1;  
	} // end if

	// if current page is greater than total pages...
	if ($currentpage > $totalpages) {
	   // set current page to last page
	   $currentpage = $totalpages;
	} // end if
	// if current page is less than first page...
	if ($currentpage < 1) {
	   // set current page to first page
	   $currentpage = 1;
	} // end if

	// the offset of the list, based on current page 
	$offset = ($currentpage - 1) * $rowsperpage;

	// get the info from the db 
	$bdrms = $_GET['number_bdrms'];

	if ($bdrms == "All") {
		$query= "select * from markers where type LIKE '%$_GET[house_type]%' and (($_GET[min_price] >= Price and $_GET[min_price] <= Price_Two) or ($_GET[max_price] >= Price and $_GET[max_price] <= Price_Two) or ($_GET[min_price] <= Price and $_GET[max_price] >= Price)) and (Available = 'yes' or Available = '$_GET[housing_availability]')LIMIT $offset, $rowsperpage; ";}
		else { $query= "select * from markers where type LIKE '%$_GET[house_type]%' and bdrms LIKE '%$_GET[number_bdrms]%' and (($_GET[min_price] >= Price and $_GET[min_price] <= Price_Two) or ($_GET[max_price] >= Price and $_GET[max_price] <= Price_Two) or ($_GET[min_price] <= Price and $_GET[max_price] >= Price)) and (Available = 'yes' or Available = '$_GET[housing_availability]')LIMIT $offset, $rowsperpage; ";};

	$result = mysql_query($query, $conn) or die(mysql_error());
		
	$data = array('house_type'=>$_GET['house_type'],
				  'number_bdrms'=>$_GET['number_bdrms'],
				   'min_price'=>$_GET['min_price'],
				  'max_price'=>$_GET['max_price'],
				  'housing_availability'=>$_GET['housing_availability'],
				   'submit'=>'Search');   

	$qs = http_build_query($data) . "\n";
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Student Housing | Bloomington Indiana</title>
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
        <!-- xxx Share This Buttons (Social Media Share) xxx -->
        <script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "9aa9f18f-1bd3-4e9d-a7d6-4529777ac776", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head>
    <body id="list-page">
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
                        <form action="list.php" method="GET">
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

        <section id="list-results">
        	<div class="container">
        		<div class="row" id="display-buttons">
			        <button class="button blue-button" onclick="toggle()">
			            <span id="toggle-text"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Refine Search</span>
			        </button>
			        <form id="view-form" action="mapping.php" method="GET">
			            <input type='hidden' name='housing_availability' value="<?php echo $_GET['housing_availability']; ?>" />
			            <input type='hidden' name='house_type' value="<?php echo $_GET['house_type']; ?>" />
			            <input type='hidden' name='number_bdrms' value="<?php echo $_GET['number_bdrms']; ?>" />
			            <input type='hidden' name='min_price' value="<?php echo $_GET['min_price']; ?>" />
			            <input type='hidden' name='max_price' value="<?php echo $_GET['max_price']; ?>" />
			            <button class="button blue-button" onclick="submit();">
			                <span id="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Map View</span>
			            </button>
			        </form> 
			    </div>
		        <div class="row">   
					<div class="col-xs-12 text-center" id="results-title">
						<strong>SEARCH RESULTS</strong>
					</div>
			    </div>
			</div>
		</section>

		<div class="container">

			<?php

			function iconColor ($type) {
				if ($type == "house") {
					return "#00CED1";
				} else if ($type == "apartment" or $type == "apartment, townhome") {
					return "#D2B48C";
				} else if ($type == "townhome") {
					return "#8080E6";
				}
			};

			function priceRange ($Price_Two) {
				if ($Price_Two !== "") {
					return " - " . $Price_Two;				}
			}

			while ($newArray = mysql_fetch_array($result)) {
			$id = $newArray['id'];
			$page_id = $newArray['page_id'];
			$name = $newArray['name'];
			$address  = $newArray['address'];
			$lat = $newArray['lat'];
			$lng = $newArray['lng'];
			$type  = $newArray['type'];
			$bdrms  = $newArray['bdrms'];
			$bath  = $newArray['bath'];
			$Price  = $newArray['Price'];
			$Price_Two  = $newArray['Price_Two'];
			$Description  = $newArray['Description'];
			$Available  = $newArray['Available'];
			$apt_name = $newArray['apt_name'];


		echo "<div class='row' id='results'>\n";
			echo 
				"<div class='col-xs-12 col-md-4 pad-vert-5 results-col'>
					<img src='photos/" . $id . ".jpg' id='list-photo'>
				</div>\n
				<div class='col-xs-12 col-md-6 pad-vert-10 results-col'>
					<div class='text-center'>
						<span class='glyphicon glyphicon-map-marker' style='color:" . iconColor($type) . "'></span>
						<strong><a target = '_blank' href='property.php?id=".$id."'>$apt_name $address</a></strong>
					</div>
					<p class='no-margin' id='description'>$Description</p>
					<p class='text-center no-margin'>
						<button class='button blue-button margin-hor-10' style='background-color:" . iconColor($type) . "'> <span class='glyphicon glyphicon-circle-arrow-right'></span> More Info</button>
						<button class='button blue-button' style='background-color:" . iconColor($type) . "'><span class='glyphicon glyphicon-envelope'></span> Contact</button>
					</p>
				</div>\n
				<ul class='col-xs-12 col-md-2 results-col pad-vert-10' id='basic-info-list'>
					<li><span class='glyphicon glyphicon-chevron-right' style='color:" . iconColor($type) . "'></span>&nbsp;&nbsp;<strong>$type</strong></li>
					<li><span class='glyphicon glyphicon-chevron-right' style='color:" . iconColor($type) . "'></span>&nbsp;&nbsp;<strong>$$Price" . priceRange($Price_Two) . "</strong></li>  
					<li><span class='glyphicon glyphicon-chevron-right' style='color:" . iconColor($type) . "'></span>&nbsp;&nbsp;<strong>$bath Baths</strong></li>
					<li><span class='glyphicon glyphicon-chevron-right' style='color:" . iconColor($type) . "'></span>&nbsp;&nbsp;<strong>$bdrms Bedrooms</strong></li>
				</ul>\n	
			</div>\n";
			}?>
			
			<div class="row">
	    		<div class="pagination col-xs-12 text-center pad-vert-5">
					<?php
			            /******  build the pagination links ******/
			        // range of num links to show
			        $range = 3;

					// if not on page 1, don't show back links
					if ($currentpage > 1) {
					   // show << link to go back to page 1
					   echo " <a href='?currentpage=1&$qs'><<</a> ";
					   // get previous page num
					   $prevpage = $currentpage - 1;
					   // show < link to go back to 1 page
					   echo " <a href='?currentpage=$prevpage&$qs'><</a> ";
					} // end if 

					// loop to show links to range of pages around current page
					for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
					   // if it's a valid page number...
					   if (($x > 0) && ($x <= $totalpages)) {
						  // if we're on current page...
						  if ($x == $currentpage) {
							 // 'highlight' it but don't make a link		
							 echo " [<b>$x</b>] ";
						  // if not current page...
						  } else {
							 // make it a link
							 echo " <a href='?currentpage=$x&$qs'>$x</a> ";
						  } // end else
					   } // end if 
					} // end for
			                 
					// if not on last page, show forward and last page links        
					if ($currentpage != $totalpages) {
					   // get next page
					   $nextpage = $currentpage + 1;
						// echo forward link for next page 
					   echo " <a href='?currentpage=$nextpage&$qs'>></a> ";
					   // echo forward link for lastpage
					   echo " <a href='?currentpage=$totalpages&$qs'>>></a> ";
					} // end if?>   
				</div>
			</div>
		</div> <!-- End Container !-->

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