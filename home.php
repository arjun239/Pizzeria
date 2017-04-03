

<?php
#require "login.php";
session_start();
?>


<html>
   <head>
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet"> </head>

<body background="bg.jpg">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row row-header">
            <div class="col-sm-4">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <img src="img/pizzahutlogo2.png" height=30 width=100></a>

            </div>
        </div>
        <div class="col-sm-8">
            <div class="navbar-form navbar-right">

              
                 <div id="re" >   HELLO
                    <?php
if(isset($_SESSION['id']))
{
  echo $_SESSION['id'];}
?></div>
                    <br>
                     <div class="navbar-form navbar-right">
                    <a href="#"id="re" >Reorder</a>
     
                </div>
              
    </div>
</div>
<div class="container">
    <div class="row no-gutter">
        <div class="col-md-12">
            <div class="navbar-form">
               <button type="button" class="btn-pizza" ><a href="/pizzahutSiteCopy/pizzas.html">Pizza</button> 
                <button type="button" class="btn-pasta"><a href="/pizzahutSiteCopy/pasta.html">Pasta</button> 
                <button type="button" class="btn-wings"><a href="/pizzahutSiteCopy/wings.html">Wings</button> 

   <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">More  <span class="caret"></span></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Sides</a>
    <a href="#">Drinks</a>
   
  
  </div>
</div>
<button type="button" class="btn-deals">Deals</button> 


<button type="button" class="btn-1">Start Your Order</button>

</div>
</div>

</div>
</div>
      
    </nav>
    <!--<img src="http://www.johnscaffe.com/wp-content/uploads/2016/03/slider-Johns-Caffe-Pizza.jpg" style="width:100%">

 <img src="http://i.ndtvimg.com/i/2015-12/pasta_625x350_41450937320.jpg" style="width:100%">
 <img src="http://www.foodnavigator-asia.com/var/plain_site/storage/images/publications/food-beverage-nutrition/foodnavigator-asia.com/policy/sin-tax-of-40-proposed-to-cover-indian-soft-drinks/10399013-1-eng-GB/Sin-tax-of-40-proposed-to-cover-Indian-soft-drinks_strict_xxl.jpg" style="width:100%">
  -->
  <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
 <img src="http://www.johnscaffe.com/wp-content/uploads/2016/03/slider-Johns-Caffe-Pizza.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
   
 <img src="http://i.ndtvimg.com/i/2015-12/pasta_625x350_41450937320.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
<img src="http://www.foodnavigator-asia.com/var/plain_site/storage/images/publications/food-beverage-nutrition/foodnavigator-asia.com/policy/sin-tax-of-40-proposed-to-cover-indian-soft-drinks/10399013-1-eng-GB/Sin-tax-of-40-proposed-to-cover-Indian-soft-drinks_strict_xxl.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<div class="container">
  <div class="row">
        <div class="col-md-6">
          <img src="http://static.planetminecraft.com/files/avatar/1883699_0.gif"  style="width: 500px; height: 100px;float:right">
        </div>
        <div class="col-md-6">
        <img src="http://avatarbox.net/avatars/img11/batman_symbol_avatar_picture_84003.jpg" style="width: 500px; height: 100px;">
      </div>
    </div>
      
    </div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/SignInModal.js"></script>
</body>
</html>
