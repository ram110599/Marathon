


<?php

$servername = "localhost";
$username = "root";
$password = "12345678";
$db_name = "books";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
mysqli_select_db($conn, $db_name);


?>  




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prasad's Book Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.footer {
   position: relative;
   font-size: 20px;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   padding: 1.07em;
}
.jumbotron {
  background: url(images.jpeg) no-repeat; 
    background-size: cover;
 background-repeat: no-repeat;

}
body
{
  background-image: url("11.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
a:link, a:visited {
    background-color: blue;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
</style>
</head>
<body>


<div class="jumbotron" style="background-color:#FF8C00;">
    <h1 style="margin-left: 100px;color:white;">Prasad's Book Store</h1>      
    <p  style="margin-left: 100px;color:white"> Read to keep yourself alive ! </p>
  </div>

  
 <div class="container">
  <img src="data1.jpeg" alt="data" style="width:500px;height:600px;float:right;"> 
  <a href="index.php" style="font-size: 20px;">Home</a><br><br>
  <a href="java1.php" style="font-size: 20px;">Javascript Books</a><br><br>
  <a href="sql1.php" style="font-size: 20px;">Mysql Books</a><br><br>
  <a href="php1.php" style="font-size: 20px;">PHP Books</a><br><br>
  <a href="about.php" style="font-size: 20px;">About</a><br><br>
 
  <br>
  <br>
  <br>
  <br>
  <h3 style="color:#8B008B;">About Me: (Prasad Kshirsagar)</h3>
  <p style="font-size:150%">
  I am a Second Year Undergraduate student at IIT ROPAR. Being having an attraction towards computers & their working, I chose to join computer Science. I always enjoyed programming & had passion to develop new. It gives me an immense pleasure to pursue my dream. 
   
   Starting from school days, I performed well in state level competitive exams & that enriched me with the confidence to crack any exam. This experience & my hard work helped me to conquer IIT-JEE and achieve my dream destination i.e. to study in IIT's.

</p>
 <p style="font-size:150%">
 I am very much interested in Web Development ,
Developing new applications & learning newer things about my field . I am fascinated by the power of computing & its ability to make the world a much better place. I also enjoy keeping political knowledge & very much keen in sports is well.

</p>
   

  


 
   <br>
   <br>
  

  <br>
<!--
  <h2>Listed students so far :</h2>
           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
-->
  
 <br>
  <br>
  <br>
  <br>

  </div>
  <div class="footer">
  <p>Contact : 2016csb1041@iitrpr.ac.in</p>
</div>




</body>
</html> 
