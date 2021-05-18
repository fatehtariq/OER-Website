<?php
const servername = "localhost",
      username = "root",
      password = "",
      dbname = "oerdb";

function displayTempDB () {
  // Create connection
  $conn = new mysqli(servername, username, password, dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT * FROM `displaytemplate` WHERE id = {$_GET['id']}";
$result = $conn->query($sql);
$new = 0;
  while($row = $result->fetch_assoc()) {
      $id = $row["id"];
      $heading = $row["heading"];
      $author = $row["author"];
      $src = $row["src"];
      $desc = $row["description"];
      $views = $row["views"];
      $new = $views;
      echo'
            <title>'.$heading.'</title>
      ';

      echo '
          <div class="w3-container w3-light-grey w3-round-xlarge w3-margin">
            <h1>'.$heading.'</h1>
            <p class="w3-text-grey">By: '.$author.'</p>
          </div>
          <div class="w3-container w3-light-grey w3-round-xlarge w3-margin">
            <iframe class="w3-margin w3-round-xlarge w3-center" src="'.$src.'" width="98%" height="700px">
            </iframe>
            <br>
            <br>
            <div class = "w3-center">
            <p>
              '.$desc.'
            </p>
            </div>
          </div>
      ';
  }
      $new = $new + 1;
      $sql = "UPDATE displaytemplate SET views = '$new' WHERE id = '$id'";
      $rs = mysqli_query($conn, $sql) or die("Could not Happen!");

      $conn->close();
  }


