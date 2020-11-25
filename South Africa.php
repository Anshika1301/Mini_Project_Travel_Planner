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
        <h1>SOUTH AFRICA</h1>
        <div style="background-image: linear-gradient(to top, rgb(248, 248, 171), rgb(176, 176, 252)); height: 50%; width: 50%; position: absolute; left: 0%; bottom: 0%; z-index: -1;"></div>
    </section>

    <section class="about_state container">
        <div class="row">
            <div class="col-lg-12">
                <h4>About South Africa</h4>
                <p style="color: grey;">South Africa is a country that is as well known for its wildlife and safaris as it is for its beaches and Winelands. It has been given the name of 'Rainbow Country', as it is very culturally diverse. South Africa has a lot of big, popular cities such as Cape Town and Johannesburg, which in turn have a lot to offer to tourists. It shares its northern borders with countries like Namibia, Botswana, Mozambique and Zimbabwe. The country has also been listed as one of the most megadiverse nations in the world, regarding its biodiversity.

</p>
                <hr>
                <details>
                    <summary>Best time to visit</summary>
                    <p class="bttv">The period between May and September is considered ideal visiting time. This is because the weather conditions are extremely pleasant. Improper or poor weather can often interfere with wildlife safaris. But you can rest assured that during these months, your tours and safaris can go on undisturbed.</p>
                </details>
                <hr>
                <details>
                    <summary>How to reach</summary>
                  
                    <p class="bttv"><span class="sub_t">By air :</span>There is a whopping total of 10 international airports in South Africa. However, the two major ones are Cape Town International Airport and OR Tambo International Airport, Johannesburg. Flights travel on a highly frequent basis to and from Cairo, Dar es Salaam, Lusaka, Mauritius, Nairobi and more. There are direct flights here from major European areas such as London, Paris, Athens, Amsterdam, Istanbul, Zurich, Lisbon, Munich, Madrid, and Frankfurt. Apart from those, direct flights are also available from New York, Atlanta, Abu Dhabi, Dubai, Washington D.C., Doha, Mumbai, Buenos Aires, Hong Kong, Singapore and more.</p>
                    
                </details>
                
            </div>

        </div>
    </section>

   

<!--------------- image section ------------>

<h2 class="title container" style="margin: 3rem auto; font-family: 'Oleo Script', cursive; font-size:2.5rem; text-align: center;">Places to visit in South Africa</h2>

<div class="container-slideshow">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img/Foreign/South Africa/Blyde river.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img/Foreign/South Africa/cape pennisula.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img/Foreign/South Africa/cape town.png" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img/Foreign/South Africa/Hermanus.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img/Foreign/South Africa/Kruger national park.png" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img/Foreign/South Africa/garden route.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/Foreign/South Africa/Blyde river.png" style="width:100%" onclick="currentSlide(1)" alt="Blyde river">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/Foreign/South Africa/cape pennisula.png" style="width:100%" onclick="currentSlide(2)" alt="Cape Pennisula">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/Foreign/South Africa/cape town.png" style="width:100%" onclick="currentSlide(3)" alt="Cape town">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/Foreign/South Africa/Hermanus.png" style="width:100%" onclick="currentSlide(4)" alt="Hermanus">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/Foreign/South Africa/Kruger national park.png" style="width:100%" onclick="currentSlide(5)" alt="Kruger National Park">
    </div>   
    <div class="column">
      <img class="demo cursor" src="img/Foreign/South Africa/garden route.jpg" style="width:100%" onclick="currentSlide(6)" alt="Garden route">
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
                <img src="img/Foreign/Indonesia.jpg">
            </div>
            <div class="top-text">
                <p>Indonesia Package</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=6">Read more</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="img">
                <img src="img/Foreign/France.jpg">
            </div>
            <div class="top-text">
                <p>France Package</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=27">Read more</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="img//Foreign/Japan.jpg">
            </div>
            <div class="top-text">
                <p>Japan package</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=28">Read more</a>
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