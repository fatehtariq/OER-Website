<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<title>OER Main Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>

</style>
<body>
  <!--Navigation Bar-->
  <div class="w3-bar w3-card-4 w3-red w3-round-large">
    <button class="w3-button w3-light-grey w3-large w3-left" onclick="w3_open()">&#9776;</button>
    <a href="mainWebPage.php" class="w3-bar-item w3-button w3-large">News</a>
    <a href="About.php" class="w3-bar-item w3-button w3-large">About</a>
    <a href="" class="w3-bar-item w3-button w3-large">Courses</a>
    <i class="fa fa-superpowers w3-right w3-xxlarge w3-hover-opacity w3-margin-right w3-margin-left"></i>
    <a href="searchPage.html" class="material-icons w3-right w3-xxlarge w3-hover-opacity">search</i>
  </div>

  <!--Side Bar-->
  <div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
  <h3><a class="w3-bar-item"><b>Quick Links</b></a></h3>
  <a class="w3-bar-item w3-button w3-hover-black" href="HowToUse.php">-How to use the site</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Certifications.php">-Certifications and Affilates</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="https://www.nationalgeographic.com/science/2020/03/covid-overview-coronavirus/">-Corona Virus 101</a>
    <button class="w3-bar-item w3-button w3-large"
    onclick="w3_close()">Close &times;</button>
  </div>

   <!--NewsLetter-->
   <div class="w3-bar w3-center">
    <div class="w3-container w3-card-2 w3-flat-concrete">
      <header class="w3-flat-concrete w3-container">
        <h2>About</h2>
          <div class="w3-container w3-margin-bottom">
            <p> With the ever growing dependancy and expansion of the internet and new ways through which we can learn and create, we set out to create a site that can give everyone boundless knowledge at their fingertips. With an ever growing respitory of information we welcome all to our free and open site to expand their minds, and encourge them to learn what they want to, how they want to.
            <br>
            <br>
            Site Created By: <br> Muhammed Fateh Tariq - 019 and, <br> Syed Asad Ali Hasani - 020
            </p>
            <img src="images/FatehSleeping.jpg"></img>
          </div>
      </header>
    </div>
  <!--Contact Us-->
  <div class="w3-container w3-card-2 w3-flat-pomegranate">
    <div class="w3-cell-row">
      <i class="material-icons w3-xlarge w3-margin">call</i>Contact Us
    </div>
    <p class="w3-margin">For any Queries or Complaints:</p>
    <div class="w3-margin">
     <form action="contactUS.php" method="post">
      <p>
        <label>First Name</label>
        <input class="w3-input w3-border w3-round-large" name="first" type="text"></p>
      <p>
        <label>Last Name</label>
        <input class="w3-input w3-border w3-round-large" name="last" type="text"></p>
      <p>
        <label>Email</label>
        <input class="w3-input w3-border w3-round-large" name="email" type="text"></p>
      <p>
        <label>Message</label>
        <input class="w3-input w3-border w3-round-large" name="message" type="text"></p>
      <button class= "w3-button w3-light-grey w3-round-large w3-margin-bottom">Send Message</button>
    </form>
    </div>
  </div>

  <!--Page Footer-->
  <footer class="w3-container w3-red">
    <h5 class="w3-center">Find Us On</h5>
    <div class="w3-xlarge w3-padding-16 w3-center">
 	  <a href="https://facebook.com" class="fa fa-facebook"></a>
 	  <a href="https://instagram.com" class="fa fa-instagram"></a>
 	  <a href="https://snapchat.com" class="fa fa-snapchat"></a>
 	  <a href="https://pinterest.com" class="fa fa-pinterest-p"></a>
 	  <a href="https://twitter.com" class="fa fa-twitter"></a>
 	  <a href="https://linkedin.com" class="fa fa-linkedin"></a>
    </div>
    <p class="w3-center">Powered By:</p>
    <div class="w3-xlarge w3-padding-16 w3-center">
      <i class="fa fa-html5"></i>
      <i class="fa fa-css3"></i>
    </div>
  </footer>

<script>
  // Side Bar Script
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }

  // SlideShow Script
  var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>
</body>
</html>
