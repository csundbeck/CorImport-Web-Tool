<html>
<head>
  <title>Non-Profit Name</title>
  <link rel="stylesheet" href="C:\Users\Connor\Documents\GitHub\landing\font-awesome-4.7.0\css\font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fruktur|Lobster" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php
if (empty($_POST["name"])) {
  $nonprofit_name = "The non-profit name";
} else {
  $nonprofit_name = $_POST["name"];
}

if (empty($_POST["par"])) {
  $hero_p = "We're here to save lives and make the world a better place.";
} else {
  $hero_p = $_POST["par"];
}

if (empty($_POST["bhead"])) {
  $help = "We're here to help.";
} else {
  $help = $_POST["bhead"];
}

if (empty($_POST["bpar"])) {
  $mission = "Our mission is to help those less fortunate get a second chance.";
} else {
  $mission = $_POST["bpar"];
}

$rights = "All Rights Reserved.";
$copyright = "&copy;";
?>

<div class="hero">
  <h1 class="title" style="padding-top: 100px"><?php echo $nonprofit_name; ?></h1>
  <p><?php echo $hero_p; ?></p>
</div>

<div class="aboutus">
    <img src="kids.jpg" alt="kids">
    <div class="par">
  <h4>About Us</h4>
  <h2><?php echo $help; ?></h2>
  <p><?php echo $mission; ?></p>
</div>
</div>

<div class="ways">
  <h3>Ways We Help</h3>
  <div class="box">
    <h4>Parties</h4>
    <p>Dummy text</p>
  </div>
  <div class="box">
    <h4>Events</h4>
    <p>Dummy text</p>
  </div>
  <div class="box">
    <h4>Education</h4>
    <p>Dummy text</p>
  </div>
  <div class="box">
    <h4>Belongingness</h4>
    <p>Dummy text</p>
  </div>
  <div class="box">
    <h4>Fellowship</h4>
    <p>Dummy text</p>
  </div>
  <div class="box">
    <h4>Fun</h4>
    <p>Dummy text</p>
  </div>
</div>

<footer class="footer">
  <p><?php echo $copyright ." ". date("Y") ." ". $rights; ?></p>
  <div class="facebook">
    <i class="fa fa-facebook-official" aria-hidden="true" href="https://www.facebook.com/"></i>
  </div>
  <div class="twitter">
    <i class="fa fa-twitter" aria-hidden="true" href="https://twitter.com/"></i>
  </div>
  <div class="instagram">
    <i class="fa fa-instagram" aria-hidden="true" href="https://www.instagram.com/?hl=en"></i>
  </div>
</footer>

</body>
</html>
