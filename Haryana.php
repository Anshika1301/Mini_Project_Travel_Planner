<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TravelPlanner State Page</title>
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
<link rel="stylesheet" href="css/statepage.css">
<link rel="stylesheet" href="css/slideshow.css">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
    <section class="about-us deepshadow" style="position: relative;">
        <h1>HARYANA</h1>
        <div style="background-image: linear-gradient(to top, rgb(248, 248, 171), rgb(176, 176, 252)); height: 50%; width: 50%; position: absolute; left: 0%; bottom: 0%; z-index: -1;"></div>
    </section>

    <section class="about_state container">
        <div class="row">
            <div class="col-lg-12">
                <h4>About Haryana</h4>
                <p style="color: grey;">Haryana is a vibrant state that has managed to retain the best of both worlds- the ancient yet vibrant past and an exciting future to look forward to. It is a state that celebrates art and culture much like the rest of India celebrating its festivals, a panorama of vivid landscapes and exquisite archaeology. Famous not just for its historical sites, its pleasant climate and its quaint landscapes, Haryana is also renowned for being a land of immense cultural diversity, a place often praised for its cordial and amicable ambience, and a state where modern buildings and edifices are as crucial as acres and acres of green fields, vibrant sunsets, and a rich culture that radiates through every nook and cranny of the state. </p>
                <hr>
                <details>
                    <summary>Best time to visit</summary>
                    <p class="bttv">October to March is the best time to visit Haryana owing to the favourable weather conditions during this time. It starts getting colder and pleasant around this time making it a perfect time for venturing out for sightseeing</p>
                </details>
                <hr>
                <details>
                    <summary>How to reach</summary>
                    <p class="bttv"><span class="sub_t">By air :</span> The nearest airport is at Chandigarh, which is well connected with cities of North India like Delhi, Amritsar and Leh. Some cities of Haryana are located in close proximity to Indira Gandhi International Airport in Delhi, which gives the state greater access to places in India and abroad.</p>
                    <p class="bttv"><span class="sub_t">By road :</span> Haryana has an excellent road network to and from the state. Some parts of Haryana come in National Capital Region and are at a short driving distance from Delhi. A good network of National Highways and State Highways also serves other parts of the state.</p>
                </details>
                
            </div>

        </div>
    </section>

   

<!--------------- image section ------------>

<h2 class="title container" style="margin: 3rem auto; font-family: 'Oleo Script', cursive; font-size:2.5rem; text-align: center;">Places to visit in Haryana</h2>

<div class="container-slideshow">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img/khammamfort.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img/kinnerasani_wildlife.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img/narsimba.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img/palairlake.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img/jammalapuram.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img/kaman_bazar.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/khammamfort.jpg" style="width:100%" onclick="currentSlide(1)" alt="Khammam Fort">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/kinnerasani_wildlife.jpg" style="width:100%" onclick="currentSlide(2)" alt="Kinnerasani Wildlife Sanctuary">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/narsimba.jpg" style="width:100%" onclick="currentSlide(3)" alt="Narsimba Temple">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/palairlake.jpg" style="width:100%" onclick="currentSlide(4)" alt="Palair Lake">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/jammalapuram.jpg" style="width:100%" onclick="currentSlide(5)" alt="Jammalapuram">
    </div>   
    <div class="column">
      <img class="demo cursor" src="img/kaman_bazar.jpg" style="width:100%" onclick="currentSlide(6)" alt="Kaman Bazar">
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
                <img src="img/haryana.jpg">
            </div>
            <div class="top-text">
                <p>Haryana package</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=15">Read more</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="img">
                <img src="img/westbengal.jpg">
            </div>
            <div class="top-text">
                <p>West Bengal tour</p>
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
                <img src="img/J&K.jpg">
            </div>
            <div class="top-text">
                <p>Manali Trips</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=1">Read more</a>
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