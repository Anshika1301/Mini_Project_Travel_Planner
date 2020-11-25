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
        <h1>HIMACHAL PRADESH</h1>
        <div style="background-image: linear-gradient(to top, rgb(248, 248, 171), rgb(176, 176, 252)); height: 50%; width: 50%; position: absolute; left: 0%; bottom: 0%; z-index: -1;"></div>
    </section>

    <section class="about_state container">
        <div class="row">
            <div class="col-lg-12">
                <h4>About Himachal Pradesh</h4>
                <p style="color: grey;">Himachal Pradesh is an Indian state located in the northern part of the country. Endowed with lofty Himalayan mountains, ancient religious sites and a cheerful culture, Himachal Pradesh is home to famous tourist destinations like Kullu, Manali, Chamba and Shimla.Himachal Pradesh is known as the state of apples all over India. It is also known for scenic landscapes, culture, adventure sports and a variety of fairs, festivals and celebrations throughout the year. McLeod Ganj, the abode of the 14th Dalai Lama is worth visiting. Himachal Pradesh also has plenty of forts, palaces, and monasteries that are of utmost cultural and historical importance. Himachal Pradesh is located in the north of India bordering Jammu & Kashmir, Uttarakhand, Uttaranchal and Punjab and a boundary with Tibet. </p>
                <hr>
                <details>
                    <summary>Best time to visit</summary>
                    <p class="bttv">February to June (Spring and Summer) is the best time to visit Himachal. The state also undergoes a beautiful transformation during the winters, i.e., between October and February when it's the snowfall season. This is also the best time for skiing and ice skating. Places like Rohtang Pass, Kufri and Shimla are quite popular tourist destinations. Summers are an ideal time for trekking, paragliding, camping and water sports. Most treks during this time take place in Shimla, Manali and Dharamshala. During monsoons from July to September, it is suggested to avoid certain areas in Himachal that are prone to landslides.</p>
                </details>
                <hr>
                <details>
                    <summary>How to reach</summary>
                    <p class="bttv"><span class="sub_t">By air :</span>  Himachal Pradesh has three airports at Gaggal, Bhuntar and Jubbarhatti, which connect the state to Delhi and Chandigarh via regular flights by Indian Airlines, Kingfisher Red, MDLR Airlines, and Jagson Airlines.</p>
                    <p class="bttv"><span class="sub_t">By rail :</span> Kalka is the most important railway station in Himachal Pradesh. A narrow-gauge railway track connects Kalka with the capital city, Shimla. The longest railway line is from Pathankot in Punjab to Jogindernagar in Himachal Pradesh. There are a few other railway tracks also passing through important destinations in the state.</p>
                    <p class="bttv"><span class="sub_t">By road :</span> Himachal Pradesh has a very good road network, which connect all popular destinations of the state to the major cities of North India. During monsoons, a few roads are closed in fear of landslides. Himachal Pradesh operates deluxe buses and luxury coaches from all prime cities of North India.</p>
                </details>
                
            </div>

        </div>
    </section>

   

<!--------------- image section ------------>

<h2 class="title container" style="margin: 3rem auto; font-family: 'Oleo Script', cursive; font-size:2.5rem; text-align: center;">Places to visit in Himanchal Pradesh</h2>

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
                <img src="img/himanchal.jpg">
            </div>
            <div class="top-text">
                <p>Himanchal tour</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=16">Read more</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="img">
                <img src="img/jharkhand.jpg">
            </div>
            <div class="top-text">
                <p>Jharkhand tour</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=24">Read more</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="img">
                <img src="img/punjab.jpg">
            </div>
            <div class="top-text">
                <p>Punjab tour</p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!
                </div>
                <div class="btn">
                    <a href="package-details.php?pkgid=17">Read more</a>
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