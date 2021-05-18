<!DOCTYPE html>
<html lang="en">
<title>OER Search Page</title>
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
      <a href="#" class="w3-bar-item w3-button w3-large">News</a>
      <a href="#" class="w3-bar-item w3-button w3-large">About</a>
      <a href="#" class="w3-bar-item w3-button w3-large">Courses</a>
      <i class="fa fa-superpowers w3-right w3-xxlarge w3-hover-opacity w3-margin-right w3-margin-left"></i>
    </div>
    <br>
    <!--Search Bar-->
    <div class="w3-container w3-round-large w3-light-grey">
        <div class="w3-row-padding">
            <div class="w3-threequarter">
              <form action="searchPage.php" method="GET">
              <input class="w3-input w3-round-large w3-margin" name="search" type="text" placeholder="Type to Search">
            </div>
              <div class="w3-quarter w3-center" id="searchBtn">
                <button type = "text" name = "btn" class= "w3-button w3-red w3-wide w3-round-large w3-margin">Search</button>
              </div> 
              </form>
        </div> 
    </div>

    <!--Search Content-->
    <?php 
      include 'searchPageDB.php';
      if(isset($_GET['search'])){
        displaySearchContent();
      }else{
        displayAllContent();
      }
    ?>

    <!--Side Bar-->
    <div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
    <h4 class="w3-bar-item"><b>Quick Links</b></h4>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">-How to use the site</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">-Certifications and Affilates</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">-Submit Articles</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">-Corona Virus 101</a>
      <button class="w3-bar-item w3-button w3-large"
      onclick="w3_close()">Close &times;</button>
    </div>

  <br>

  <!--NewsLetter-->
  <div class="w3-bar w3-center">
    <div class="w3-container w3-card-2 w3-flat-concrete w3-twothird">
      <header class="w3-flat-concrete w3-container">
        <h2>About</h2>
          <div class="w3-container w3-margin-bottom">
            <p>
              With the ever growing dependancy and expansion of the internet and new ways through which we can learn and create, we set out to create a site that can give everyone boundless knowledge at their fingertips. With an ever growing respitory of information we welcome all to our free and open site to expand their minds, and encourge them to learn what they want to, how they want to.
            </p>
          </div>
      </header>
    </div>
    <div class="w3-third w3-container w3-card-2 w3-flat-wet-asphalt">
      <h3 class="w3-margin">Subscribe to Our NewsLetter</h3>
    <p>
      <label class="w3-margin">Email</label>
      <input class="w3-input w3-border w3-round-large w3-margin-left" name="email" type="text"></p>
    <button class= "w3-button w3-light-grey w3-round-large" style="margin-bottom: 3.68%;">Submit</button>
    </div>
  </div>


  <!--Contact Us-->
  <div class="w3-container w3-card-2 w3-flat-pomegranate">
    <div class="w3-cell-row">
      <i class="material-icons w3-xlarge w3-margin">call</i>Contact Us
    </div>
    <p class="w3-margin">For any Queries or Complaints:</p>
    <div class="w3-margin">
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
    </div>
  </div>

  <!--Page Footer-->
  <footer class="w3-container w3-red">
    <h5 class="w3-center">Find Us On</h5>
    <div class="w3-xlarge w3-padding-16 w3-center">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p class="w3-center">Powered By:</p>
    <div class="w3-xlarge w3-padding-16 w3-center">
      <i class="fa fa-html5"></i>
      <i class="fa fa-css3"></i>
    </div>
  </footer>

<script>
    //Empty for Now
</script>

</body>