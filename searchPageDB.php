<?php

const servername = "localhost",
      username = "root",
      password = "",
      dbname = "oerdb";

      function displayAllContent () {
        // Create connection
        $conn = new mysqli(servername, username, password, dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      
        $sql = "SELECT * FROM `displaytemplate`";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $heading = $row["heading"];
            $author = $row["author"];
            $src = $row["src"];
            $imgsrc = $row["imgsrc"];
            $views = $row["views"];
            $type = $row["filetype"];

            echo '
            <a href= "DisplayTemplate.php?id='.$id.'">
            <div class="w3-bar w3-round-xlarge w3-light-grey w3-margin w3-hover-opacity">
            <div object-fit: "fill;">
                <img class="w3-margin w3-left w3-round-xlarge" src="'.$imgsrc.'" style="width: 8%;">
            </div>
            <p class="w3-margin w3-left " id="heading">
                '.$heading.'
            </p>
            <footer class="w3-container w3-flat-silver w3-margin w3-round-xlarge w3-right">
                By: '.$author.'
            </footer>
            <p class="w3-right">Views <span class="w3-badge w3-green">'.$views.'</span></p>
            <p class="w3-right">File Type:  <span class="w3-badge w3-green">'.$type.'</span></p>
            </div>
            </a>
            ';
        }
      
      
        $conn->close();
      }

      function displaySearchContent () {
        // Create connection
        $conn = new mysqli(servername, username, password, dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      
        $sql = "SELECT * FROM `displaytemplate` WHERE heading LIKE '%{$_GET['search']}%' or author LIKE '%{$_GET['search']}%'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $heading = $row["heading"];
            $author = $row["author"];
            $src = $row["src"];
            $imgsrc = $row["imgsrc"];
            $views = $row["views"];
            $type = $row["filetype"];
            echo '
                <a href= "DisplayTemplate.php?id='.$id.'">
                <div class="w3-bar w3-round-xlarge w3-light-grey w3-margin w3-hover-opacity">
                <div object-fit: "fill;">
                    <img class="w3-margin w3-left w3-round-xlarge" src="'.$imgsrc.'" style="width: 7%;">
                </div>
                <p class="w3-margin w3-left " id="heading">
                    '.$heading.'
                </p>
                <footer class="w3-container w3-flat-silver w3-margin w3-round-xlarge w3-right">
                    By: '.$author.'
                </footer>
                <p class="w3-right">  Views <span class="w3-badge w3-green">'.$views.'</span></p>
                <p class="w3-right">File Type:  <span class="w3-badge w3-yellow">'.$type.'</span></p>
                </div>
                </a>
            ';
        }
      
      
        $conn->close();
      }
