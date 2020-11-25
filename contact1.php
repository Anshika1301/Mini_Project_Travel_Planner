<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
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
   <!-- css link -->
   <link rel="stylesheet" href="css/contactus.css">
   
   <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>TravelPlanner | contact</title>
   
    </head>
    
     <body>
      <?php include('includes/header.php');?>
         <section class="contact">
            <h1>Contact Us</h1>
            <h2>Email us and keep upto date with our latest news</h2>
         </section>

   <!-- contact section -->
         <section id="contact-section">
           <div class="container">
             <div class="contact-form">

                  <!-- First grid -->
               <div>
                 <i class="fa fa-map-marker"></i><span class="form-info">  192 City Boston Amercia #345</span><br>
                 <i class="fa fa-phone" > </i><span class="form-info">  +92 034567890</span><br>
                 <i class="fa fa-envelope"></i><span class="form-info">  travelplanner123@Gmail.com</span>
               </div>
               
                   <!-- second grid -->
            <div>        
             <form>
               <input type="text" placeholder="Your Name" required>
               <input type="text" placeholder="Last Name"><br>
               <input type="Email" placeholder="Email" required><br>
               <input type="text" placeholder="Subject of this message"><br>
               <textarea name="message" placeholder="Message" rows="5" required></textarea><br>
               <button class="submit" >Send Message</button> 
             </form>   
            </div>
             </div>
           </div>
         </section>

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
     </body>