<?php
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "abhi12345";
    $dbName = "News_articles";

    $conn = mysqli_connect($dbServer ,$dbUsername,$dbPassword,$dbName);
    
    
  //  $conn = new mysqli($dbServer ,$dbUsername,$dbPassword,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
