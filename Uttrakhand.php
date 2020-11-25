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
    
    <title>TravelPlanner State page</title>
    <link rel="stylesheet" href="css/statepage.css">
    <link rel="stylesheet" href="css/slideshow.css">
  </head>
  <body>
  <?php include('includes/header.php');?>
    <section class="about-us deepshadow" style="position: relative;">
        <h1>UTTRAKHAND</h1>
        <div style="background-image: linear-gradient(to top, rgb(248, 248, 171), rgb(176, 176, 252)); height: 50%; width: 50%; position: absolute; left: 0%; bottom: 0%; z-index: -1;"></div>
    </section>

    <section class="about_state container">
        <div class="row">
            <div class="col-lg-12">
                <h4>About Uttrakhand</h4>
                <p style="color: grey;">Land of untouched natural beauty and spirituality, Uttarakhand is a Himalayan state of North India, famously known as Devbhumi (or the Land of the Gods). Carved out from Uttar Pradesh, the state, formerly known as Uttaranchal, is a place that not only boasts of a scintillating view of the Himalayas but also exhibits a cultural ethos which speaks of a harmonic coexistence with nature.Uttarakhand is a popular pilgrimage site, as it is the originating spot of the Ganga and the Yamuna, two of the most sacred rivers for Hindus. Uttarakhand is home to the Char Dhams, the four most holy sites of pilgrimage revered by the Hindus - Gangotri, Yamunotri, Kedarnath, and Badrinath. Thousands of tourists visit Uttarakhand annually to pay homage to the Char Dhams.</p>
                <hr>
                <details>
                    <summary>Best time to visit</summary>
                    <p class="bttv">March to April and mid-September to mid-October are considered as the Best time to visit Uttarakhand. Trekking, Paragliding and The Char Dham Yatra are the most popular activities during Summer, which is also the Peak Season in Uttarakhand. While winters from November through February are perfect for rafting in Rishikesh and wildlife spotting in Jim Corbett National Park. Some parts of Uttarakhand like Mussoorie and Nainital experience snowfall. Although an all year round destination, it is not advisable to visit Uttarakhand during peak monsoons in July and August. However, Valley of Flowers is picture perfect during the monsoon season.</p>
                </details>
                <hr>
                <details>
                    <summary>How to reach</summary>
                    <p class="bttv"><span class="sub_t">By air :</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur numquam sequi ad facilis ab quidem soluta deserunt consectetur repellat. Blanditiis delectus nobis excepturi perferendis autem asperiores vel dolorem rem.</p>
                    <p class="bttv"><span class="sub_t">By rail :</span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto voluptatibus laudantium corrupti dignissimos neque explicabo natus iure, modi pariatur, adipisci voluptate sunt commodi excepturi voluptatum, illo esse sint delectus laborum amet accusantium itaque minus velit inventore. Quisquam, odit! Praesentium, dolor.</p>
                    <p class="bttv"><span class="sub_t">By road :</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit est delectus ea ratione. Beatae consequuntur asperiores autem laboriosam deserunt, totam sequi eius sint officiis quasi, atque quibusdam possimus quo veniam? Rerum, dolor in aperiam inventore velit reprehenderit itaque ea alias!</p>
                </details>
                
            </div>

        </div>
    </section>

   

<!--------------- image section ------------>

<h2 class="title container" style="margin: 3rem auto ; font-family: 'Oleo Script', cursive; font-size:2.5rem; text-align: center;">Places to visit in Uttrakhand</h2>

<div class="container-slideshow">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img/rafting.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img/cliff.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img/mahadevtemple.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img/laksham.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img/trivenighat.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img/laksham.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

 <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/rafting.jpg" style="width:100%" onclick="currentSlide(1)" alt="Rafting">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/cliff.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cliff climbing ">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/mahadevtemple.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mahadev Temple">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/laksham.jpg" style="width:100%" onclick="currentSlide(4)" alt="Laksham Jhula">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/trivenighat.jpg" style="width:100%" onclick="currentSlide(5)" alt="Triveni Ghat">
    </div>   
    <div class="column">
      <img class="demo cursor" src="img/laksham.jpg" style="width:100%" onclick="currentSlide(6)" alt="Laksham Jhula">
    </div>

  </div> 
</div>

<!---------------- Reviews section ---------------->

<div class="center container">
    <h2 class="title">Reviews</h2>
    <div class="stars">
        <input type="radio" id="five" name="rate" value="5">
        <label for="five"></label>
        <input type="radio" id="four" name="rate" value="4">
        <label for="four"></label>
        <input type="radio" id="three" name="rate" value="3">
        <label for="three"></label>
        <input type="radio" id="two" name="rate" value="2">
        <label for="two"></label>
        <input type="radio" id="one" name="rate" value="1">
        <label for="one"></label>
        <span class="result"></span>
    </div>
</div>



<!---------------- FAQ section ---------------->

<div class="wrapper container">
    <h2 class="title">FAQs</h2>
    <!-- Accordion Heading One -->
    <div class="parent-tab">
        <input type="radio" name="tab" id="tab-1" checked>
        <label for="tab-1">
            <span>Accordion Heading One</span>
            <div class="icon"><i class="fas fa-plus"></i></div>
        </label>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit. Quam, repellendus facere, id porro magnam blanditiiss quoteos dolores ratione quidem ipsam esse quos pariatur, repellat obcaecati!</p>
        </div>
    </div>

    <!-- Accordion Heading Two -->
    <div class="parent-tab">
      <input type="radio" name="tab" id="tab-2">
      <label for="tab-2">
        <span>Accordion Heading Two</span>
        <div class="icon"><i class="fas fa-plus"></i></div>
      </label>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit. Quam, repellendus facere, id porro magnam blanditiiss quoteos dolores ratione quidem ipsam esse quos pariatur, repellat obcaecati!</p>
      </div>
    </div>

    <!-- Accordion Heading Three -->
    <div class="parent-tab tab-3">
      <input type="radio" name="tab" id="tab-3">
      <label for="tab-3" class="tab-3">
        <span>Accordion Heading Three</span>
        <div class="icon"><i class="fas fa-plus"></i></div>
      </label>
      <div class="content">
        <!-- Sub Heading One -->
        <div class="child-tab">
          <input type="checkbox" name="sub-tab" id="tab-4">
          <label for="tab-4">
            <span>Sub Heading One</span>
            <div class="icon"><i class="fas fa-plus"></i></div>
          </label>
          <div class="sub-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>
          </div>
        </div>
        <!-- Sub Heading Two -->
        <div class="child-tab">
          <input type="checkbox" name="sub-tab" id="tab-5">
          <label for="tab-5">
            <span>Sub Heading Two</span>
            <div class="icon"><i class="fas fa-plus"></i></div>
          </label>
          <div class="sub-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Accordion Heading Four -->
    <div class="parent-tab">
      <input type="radio" name="tab" id="tab-6">
      <label for="tab-6">
        <span>Accordion Heading Four</span>
        <div class="icon"><i class="fas fa-plus"></i></div>
      </label>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit. Quam, repellendus facere, id porro magnam blanditiiss quoteos dolores ratione quidem ipsam esse quos pariatur, repellat obcaecati!</p>
       </div>
    </div>
</div>



<!---------------- You Might Also like section ---------------->
    <h2 class="title container" style="margin: 3rem auto 2.5rem;">You might also like</h2>
    <div class="container box-like">
        <div class="card">
            <div class="img">
                <img src="img/westbengal.jpg">
            </div>
            <div class="top-text">
                <p>West Bengal package</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=26">Read more</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="img">
                <img src="img/gujarat.jpg">
            </div>
            <div class="top-text">
                <p>Gujarat tour</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=21">Read more</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="img">
                <img src="img/uttrakhand.jpg">
            </div>
            <div class="top-text">
                <p>Uttrakhand Tour</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=20">Read more</a>
                </div>
            </div>
        </div>
        <div class="btn-class">
            <a href="package-list.php">More packages</a>
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



    <!----bootstrap js link------>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
 <!-- jquery link -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-----js link-------->
    <script src="state.js"></script>
    <script src="js/slideshow.js"></script>
</body>
</html>