<?php
session_start();
?>

<!doctype html>
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

                  <a class="SignInBtn" id="SignInBtn">Sign in &nbsp;</a>

                     <div class="SignInModal" id="SignInModal">
                    
                  <div class="SignInModal-Content" id="SignInModal-Content">
                    <p> LOGIN</p>
                    <form action="login.php" method="POST">
                      <label>Email Address:</label><br>
                      <input type="email" id="email" name="email"><br>

                      <label>Password:</label><br>
                      <input type="password" id="pwd" name="pwd"><br><br>
                    <input type="submit" name="Login" value="Login" id="Login">
</form>

                        </div>
                      </div>
                    <a href="#">Create an Account &nbsp;</a>
                    <a href="#">Find a Pizza Hut &nbsp;</a>
                    <a href="#">Espanol &nbsp;</a>
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
               <button type="button" class="btn-pizza">Pizza</button> 
                <button type="button" class="btn-pasta">Pasta</button> 
                <button type="button" class="btn-wings">Wings</button> 

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
<!--<div class="sidesPic">
    <img src="https://i.ytimg.com/vi/Se2WeG7lNI0/maxresdefault.jpg" width=1170  height=500>
</div>-->
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="http://i.imgur.com/7Li3O66.png" style="width:1000px; height:570px;">
  <div class="text">SIDES</div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
  <img src="http://i.ndtvimg.com/i/2015-12/pasta_625x350_41450937320.jpg" style="width:1000px;height:570px;">
  <div class="text">SIDES</div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="http://www.foodnavigator-asia.com/var/plain_site/storage/images/publications/food-beverage-nutrition/foodnavigator-asia.com/policy/sin-tax-of-40-proposed-to-cover-indian-soft-drinks/10399013-1-eng-GB/Sin-tax-of-40-proposed-to-cover-Indian-soft-drinks_strict_xxl.jpg" style="width:1000px;height=570px;">
  <div class="text">SIDES</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="box-side1">
                    
                    <p id="Item-Name">Tasty Stuffed Garlic Knots</p>

                    <p id="Item-Description">10 large Garlic Knots stuffed with <br>  melted cheese and finished with a<br> garlic buttery blend, grated parmesan<br> and Italian herbs</p>   
                    <img src="http://www.simplyrecipes.com/wp-content/uploads/2012/01/garlic-knots-horiz-b-1600.jpg">
              <form>
                    <input type="hidden" name="Garlic Knots">
                    <button type="submit" class="btn btn-danger">Add To Cart</button>
                     
                     <b id="dollarSign">$</b>
                     <input type="text" class="PriceOfItem"name="IndivPrice" value="2.50" readonly>
                    <select name="quantity" class="quantity">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select>
                  </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-side2">
                    <p id="Item-Name2">Breadsticks</p>
                    <p id="Item-Description2">Crispy on the outside,soft and chewy<br> on the inside. Seasoned with garlic<br> and parmesan and served with marinara <br>dipping sauce.</p>

                    <img src="http://d2gk7xgygi98cy.cloudfront.net/1022-3-large.jpg">
                        <form>
                    <button type="submit" class="btn btn-danger">Add To Cart</button>
                     <input type="text" class="NameOfItem" name="country" value="Breadsticks" readonly>
                     <input type="text" class="PriceOfItem"name="IndivPrice" value="2.50" readonly>
                        <b id="dollarSign"></b> <select name="quantity" class="quantity">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select>
                  </form>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="box-side3">
      <p id="Item-Name3">Cheese Sticks</p>
      <p id="Item-Description3">Fresh, oven-baked dough smothered<br> with cheese and sprinkled with Italian<br> seasoning. Served with marinara.</p>
      <img src="http://foodnetwork.sndimg.com/content/dam/images/food/fullset/2011/11/23/0/FNM-120111_Ina-Holiday-Appetizers-012-a_s4x3.jpg.rend.sni12col.landscape.jpeg">
  <form>
                    <button type="submit" class="btn btn-danger">Add To Cart</button>
                     <input type="text" class="NameOfItem"name="CheeseSticks" value="CheeseSticks" readonly>
                      <b id="dollarSign"></b><input type="text" class="PriceOfItem"name="IndivPrice" value="2.50" readonly>
                    <select name="quantity" class="quantity">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select>
                  </form>
</div>
</div>


  <div class="col-md-6">
    <div class="box-side4">
      <p id="Item-Name4">Fries</p>
      <p id="Item-Description3">They come on the side, but taste good<br> enough to be the main event.<br> Crunchy, crispy, and calling your name<br> - our fries come plain</p>
      <button type="button"id="MoreInfo">More...</button>
     
  <img src="http://az616578.vo.msecnd.net/files/2016/09/05/6360863754851164111585273507_French-Fries.jpg"> 
   <form>
                    <button type="submit" class="btn btn-danger">Add To Cart</button>

             <input type="text" class="NameOfItem"name="Fries" value="Fries" readonly>
              <input type="text" class="PriceOfItem"name="IndivPrice" value="2.50" readonly>
                    <b id="dollarSign"></b><select name="quantity" placeholder="Quantity" class="quantity">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select>
                  </form>
</div>
</div>

 <div id="myModal" class="modal">
 
 <div class="modal-content" id="myModal-content">
  <p>They come on the side, but taste good enough to be the main event. Crunchy, crispy, and calling your name - our fries come plain or seasoned. Want the recipe? Too bad.</p>
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
   setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/moreLink.js"></script>
    <script src="js/SignInModal.js"></script>
</body>
</html>