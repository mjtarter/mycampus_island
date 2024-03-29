<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "mjtarter@openmindwebs.com";
 
    $email_subject = "Student Housing";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||

        !isset($_POST['phone']) ||
    
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');         
 
    }
   
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required

    $phone = $_POST['phone']; // required
 
    $comments = $_POST['comments']; // not required

     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  } 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }


 
    $email_message .= "Name: ".clean_string($first_name). " " .clean_string($last_name)."\n";
  
    $email_message .= "Phone: ".clean_string($phone)."\n\n";  
 
    $email_message .= clean_string($comments)."\n";
  
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Student Housing | Bloomington Indiana</title>
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
    <body id="contact-form">
      <!--[if lte IE 7]><script src="js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
        
    <div class="page-wrap"> <!-- Wrapper for sticky footer !-->

        <nav id="main-nav">
          <div class="container">
            <div id="logo"><img src="img/mci-logo.png" alt="MyCampus Island logo"><p class="text-center" id="logo-text">The Collegiate Reference For Housing</p></div>
                <ul id="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="housing-search.html">Housing Search</a></li>
                    <li><a href="dorms.html">Dorms</a></li>
                    <li><a href="landlords.html">Landlords</a></li>
                </ul>
            </div>
        </nav>
        
        <section class="container text-center">
            <p>Your message has been sent. Thank you!</p> 
            <p><a href="javascript:history.back()">Back to Property Page</a></p>

        </section>       
        
    </div> <!-- End Sticky Footer Page Wrap !-->       

        <footer class="site-footer">
            <div class="container">
                <img class="img-center" src="img/mci-logo.png" alt="MyCampus Island logo">
                <hr>
                <div class="row">
                    <div class="col-xs-4 text-center mobile-width">
                        <p class="footer-title" id="search-icon">Search</p>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="housing-search.html">Housing Properties</a></li>
                            <li><a href="dorms.html">Dorms</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-4 text-center mobile-width">
                        <p class="footer-title" id="contact-icon">Contact</p>
                        <ul>
                            <li><a href="landlords.html">Landlords</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-4 text-center hide-mobile">
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
 
 
<?php
 
}
 
?>