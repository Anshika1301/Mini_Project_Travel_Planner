<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
    </script>
    
    <title>TravelPlanner | Foreign Tour</title>
    <link rel="stylesheet" href="css/foreign.css">
  </head>
  <body>
  <?php include('includes/header.php');?>
    
    <div class="container-fluid">
        <div class="heading">
            <h1>Foreign Trips</h1>
        </div>
        <div class="row">
          
            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="images"><img src="img/Foreign/France.jpg"/>
                    <figcaption>
                      <h3 class="title2">France</h3>
                    </figcaption>
                    <a href="france.php"></a>
                  </figure>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="images"><img src="img/Foreign/Maldavis.jpg"/>
                    <figcaption>
                      <h3 class="title2">Maldavis</h3>
                    </figcaption>
                    <a href="Maldives.php"></a>
                  </figure>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="images"><img src="img/Foreign/Indonesia.jpg"/>
                    <figcaption>
                      <h3 class="title2">Indonesia</h3>
                    </figcaption>
                    <a href="Indonesia.php"></a>
                  </figure>
            </div>
                         
            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="images"><img src="img/Foreign/New Zealand.jpg"/>
                    <figcaption>
                      <h3 class="title2">New Zealand</h3>
                    </figcaption>
                    <a href="New Zealand.php"></a>
                  </figure>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="images"><img src="img/Foreign/South Africa.jpg"/>
                    <figcaption>
                      <h3 class="title2">South Africa</h3>
                    </figcaption>
                    <a href="South Africa.php"></a>
                  </figure>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="images"><img src="img/Foreign/Spain.jpg"/>
                    <figcaption>
                      <h3 class="title2">Spain</h3>
                    </figcaption>
                    <a href="Spain.php"></a>
                  </figure>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="images"><img src="img/Foreign/Thailand.jpg"/>
                    <figcaption>
                      <h3 class="title2">Thailand</h3>
                    </figcaption>
                    <a href="Thailand.php"></a>
                  </figure>
            </div>

        </div>
    </div>
      
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
      <!-------------------------------------------------------- JavaScript------------------------------------------------------------------->
      <script>
          var snippet = [].slice.call(document.querySelectorAll('.hover'));
            if (snippet.length) {
                snippet.forEach(function (snippet) {
                snippet.addEventListener('mouseout', function (event) {
                    if (event.target.parentNode.tagName === 'figure') {
                        event.target.parentNode.classList.remove('hover')
                    }             
                    else {
                        event.target.parentNode.classList.remove('hover')
                    }
                });
            });
        }
      </script>
</body>
</html>