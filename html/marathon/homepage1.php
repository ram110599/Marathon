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
</style>
</head>
<body>

<div class="container">
	<div class = "section">
  <h1>NEWSY</h1>
  <div class="btn-group btn-group-justified">
    <div class="btn-group">
      <a href="homepage1.php" button type="button" class="btn btn-primary">Home</button></a>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Latest News</button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Sort By</button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>Name</button>
    </div>
    <div class="btn-group">
      <a href="form.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
    </div>
    <!--<a href="#" class="btn btn-primary">Apple</a> -->
  </div>    
</div>

<div class = "section">

<div class="floating-box">
  <div class="container">
    <h4><b>News</b></h4> 
    <p>description</p>
    <p a href = "$rows[readme]">readme</p> 
  </div>
</div>

<div div class="floating-box">
  <div class="container">
    <h4><b>$rows['title']</b></h4> 
    <p>$rows['description']</p>
    <p a href = "$rows[readme]">readme</p> 
  </div>
</div>

<div class="floating-box">
  <div class="container">
    <h4><b>$rows['title']</b></h4> 
    <p>$rows['description']</p>
    <p a href = "$rows[readme]">readme</p> 
  </div>
</div>

<div class="floating-box">
  <div class="container">
    <h4><b>$rows['title']</b></h4> 
    <p>$rows['description']</p>
    <p a href = "$rows[readme]">readme</p> 
  </div>
</div>

<div class="floating-box">
  <div class="container">
    <h4><b>$rows['title']</b></h4> 
    <p>$rows['description']</p>
    <p a href = "$rows[readme]">readme</p> 
  </div>
</div>

<div class="floating-box">
  <div class="container">
    <h4><b>$rows['title']</b></h4> 
    <p>$rows['description']</p>
    <p a href = "$rows[readme]">readme</p> 
  </div>
</div>

</div>
</div>
</body>
</html>