<!DOCTYPE html>
<html lang="en">
<head>
  <title>News Share</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
.floating-box {
    float: left;
    width: 355px;
    height: 200px;
    margin: 10px;
    border: 3px solid #73AD21;  
}

.after-box {
    clear: left;
    border: 3px solid red;      
}
{box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

</style>
</head>
<body>
  
<div class="container">
	<div class = "section">
  <h1>NEWSY</h1>
  <div class="btn-group btn-group-justified">
    <div class="btn-group">
      <a href="rhomepage.php" button type="button" class="btn btn-primary">Home</button></a>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Latest News</button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Sort By</button>
    </div>
    <div class="btn-group">
     <a href="login.php" button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>Sign In</button></a>
    </div>
    <div class="btn-group">
      <a href="form.php" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span>Sign Up</a>
    </div>
    <!--<a href="#" class="btn btn-primary">Apple</a> -->
  </div>    
</div>
<div class="slideshow-container">

<div>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images.jpg" style="width:50%" align="middle">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images1.jpg" style="width:50%" align="middle">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images2.jpg" style="width:50%" align="middle">
  <div class="text">Caption Three</div>
</div>
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

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<!--
<div class = "section">

<div class="floating-box">
  <div class="container">
    <h4><b>News0</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>

<div div class="floating-box">
  <div class="container">
    <h4><b>News1</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>

<div class="floating-box">
  <div class="container">
    <h4><b>News2</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>

<div class="floating-box">
  <div class="container">
    <h4><b>News3</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>

<div class="floating-box">
  <div class="container">
    <h4><b>News4</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>

<div class="floating-box">
  <div class="container">
    <h4><b>News5</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>
</div>
-->
</body>
</html>
