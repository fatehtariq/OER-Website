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
    <a href="#" class="w3-bar-item w3-button w3-large">Courses</a>
    <i class="fa fa-superpowers w3-right w3-xxlarge w3-hover-opacity w3-margin-right w3-margin-left"></i>
    <a href="searchPage.php" class="material-icons w3-right w3-xxlarge w3-hover-opacity">search</i>
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

  <!--SlideShow-->
  <div class="w3-content w3-margin-top" style="max-width:800px">
  	<div class="w3-container w3-dark-grey w3-center w3-round-xxlarge">Featured Articles</div>
    <img class="mySlides w3-round-xlarge" src="images/unnamed.jpg" style="width:100%">
    <img class="mySlides w3-round-xlarge" src="images/cr.jpg" style="width:100%">
    <img class="mySlides w3-round-xlarge" src="images/Why-You-Should-Learn-To-Code.png" style="width:100%">
    <div class="w3-container w3-light-grey w3-center w3-round-xlarge">1: Learn HTML in 10 Days! <br>2: Corona Virus and You <br>3: Why you should learn to code</div>
  </div>
  
  <div class="w3-center">
    <div class="w3-section">
      <button class="w3-round-xlarge w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
      <button class="w3-round-xlarge w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
    </div>
    <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
    <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
    <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
  </div>
  <br>

  <!--Add Page Mid Content Here!-->
  <div class="w3-container w3-light-grey w3-center w3-bar">
    <h3>Featured Articles</h3>

    <div class="w3-cell-row w3-margin">
      <div class="w3-card-2 w3-container w3-quarter w3-transparent">
          <h4 class="w3-container w3-blue w3-round-xlarge">Code Camp in June 2020</h4>
        
        <div class="w3-container">
          <p>When the whole nation is on the verge of lockdown due to COVID-19 pandemic 
              and all Geeks across the country have to stay indoors,
              how would it be if you can use this free time to sharpen your skills, Registrations for a Code Camp to be 
            conducted in June 2020 Open!</p>
        </div>
      </div>
    
      <div class="w3-container w3-teal w3-cell w3-quarter">
        <h2>Registrations</h2>
        <?php 
        if(isset($_SESSION['registeration_success'])){
          echo "<script>alert(\"{$_SESSION['registeration_success']}\");</script>";
          unset($_SESSION['registeration_success']);
        }
        ?>
        <p>
        <form action="registration.php" method="post">
          <label>First Name</label>
          <input class="w3-input w3-border w3-round-large" name="first" type="text"></p>
        <p>
          <label>Last Name</label>
          <input class="w3-input w3-border w3-round-large" name="last" type="text"></p>
        <p>
          <label>Email</label>
          <input class="w3-input w3-border w3-round-large" name="remail" type="text"></p>
        <button class= "w3-button w3-light-grey w3-round-large w3-margin-bottom">Submit</button>
        </form>
      </div>
      <div class="w3-half w3-container">
        <img class="w3-round-xlarge" src="images/freecodecamp.jpeg" style="width: 90%;">
      </div>
    </div>

    <div class="w3-cell-row w3-margin">
          <div class="w3-container w3-card-3 w3-orange w3-quarter">
              <h2>Learn HTML</h2>
              <p>
              <a href="https://www.w3schools.com">
              <img src="https://img.icons8.com/material/96/000000/html-5.png"/></a>
              </p>
          </div>
          <div class="w3-container w3-card-3 w3-green w3-quarter">
              <h2>Learn CSS</h2>
              <p>
              <a href="https://www.w3schools.com">
              <img src="https://img.icons8.com/material/96/000000/css3.png"/></a>
              </p>
          </div>
          <div class="w3-container w3-card-3 w3-blue w3-quarter">
            <h2>Learn JAVASCRIPT</h2>
            <p>
              <a href="https://www.w3schools.com">
              <img src="https://img.icons8.com/ios-filled/96/000000/javascript.png"/></a>
              </p>
          </div>
          <div class="w3-container w3-card-3 w3-red w3-quarter">
            <h2>Learn PHP</h2>
            <p>
              <a href="https://www.w3schools.com">
              <img src="https://img.icons8.com/material/96/000000/php.png"/></a>
              </p>
          </div>
    </div>
  </div>

  <br>

  <!--Pagination-->
  <div class="w3-bar w3-center">
    <a href="#" class="w3-button">«</a>
    <a href="#" class="w3-button w3-red">1</a>
    <a href="#" class="w3-button">2</a>
    <a href="#" class="w3-button">3</a>
    <a href="#" class="w3-button">4</a>
    <a href="#" class="w3-button">»</a>
  </div>
  <br>
   <!--NewsLetter-->
   <div class="w3-bar w3-center">
    <div class="w3-container w3-card-2 w3-flat-concrete w3-twothird">
      <header class="w3-flat-concrete w3-container">
        <h2>About</h2>
          <div class="w3-container w3-margin-bottom">
            <p> With the ever growing dependancy and expansion of the internet and new ways through which we can learn and create, we set out to create a site that can give everyone boundless knowledge at their fingertips. With an ever growing respitory of information we welcome all to our free and open site to expand their minds, and encourge them to learn what they want to, how they want to.
            </p>
          </div>
      </header>
    </div>
    <div class="w3-third w3-container w3-card-2 w3-flat-wet-asphalt">
      <h3 class="w3-margin">Subscribe to Our NewsLetter</h3>
    <p>
      <label class="w3-margin">Email</label>
      <form action="subnewsletter.php" method="get">
        <input class="w3-input w3-border w3-round-large w3-margin-left" name="email" type="text"></p>
        <button class= "w3-button w3-light-grey w3-round-large" style="margin-bottom: 3.65%;">Submit</button>
      </form>
    </div>
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
