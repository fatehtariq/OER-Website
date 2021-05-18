<?php
const servername = "localhost",
username = "root",
password = "",
dbname = "oerdb";

// Create connection
$conn = new mysqli(servername, username, password, dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = $_GET['search']; 
 
$min_length = 3;
 
if(strlen($query) >= $min_length){ 
     
    $query = htmlspecialchars($query); 
     
    $query = mysqli_real_escape_string($conn, $query);
     
    $raw_results = $conn ->query("SELECT * FROM displaytemplate
        WHERE (`heading` LIKE '%".$query."%') OR (`author` LIKE '%".$query."%')") or die(mysql_error());
     
    if($raw_results){
         
        while($row = $raw_results->fetch_assoc()){
            $id = $row["id"];
            $heading = $row["heading"];
            $author = $row["author"];
            $src = $row["src"];
            $imgsrc = $row["imgsrc"];
            $views = $row["views"];
            echo '
            <a href= "searchPage.php?heading='.$heading.'">
            <div class="w3-container w3-quarter w3-card-4 w3-round-xlarge w3-light-grey w3-margin w3-hover-opacity" style="width: 20%;">
            <div object-fit: "fill;">
                <img class="w3-margin w3-center w3-round-xlarge" src="'.$imgsrc.'" style="width: 90%;">
            </div>
            <p class="w3-margin w3-center " id="heading">
                '.$heading.'
            </p>
            <footer class="w3-container w3-flat-silver w3-margin w3-round-xlarge w3-center">
                By: '.$author.'
            </footer>
            <p class="w3-center">Views <span class="w3-badge w3-green">'.$views.'</span></p>
            </div>
            </a>
        ';
        }
         
    }
    else{ // if there is no matching rows do following
        echo "No results";
    }
     
}