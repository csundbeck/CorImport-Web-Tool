<html>
<head>
  <title>Non-Profit Name</title>
  <link rel="stylesheet" href="C:\Users\Connor\Documents\GitHub\landing\font-awesome-4.7.0\css\font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fruktur|Lobster" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

  <?php /// confusing about index.php and also which lines to delete, etc. ?>

<?php include 'connect.php'; ?>

<?php
      $sql = "SELECT id, name, par, bhead, bpar FROM settings WHERE id='6'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["bpar"]. " " . $row["bhead"]. " " .  $row["bpar"]. "<br>";
              $import_name = $row["name"];
              $import_par = $row["par"];
              $import_bpar = $row["bpar"];
              $import_bhead = $row["bhead"];
          }
      } else {
          echo "0 results";
      }
?>

<?php $conn->close(); ?>

<?php
if (empty($import_name)) {
  $nonprofit_name = "The non-profit name";
} else {
  $nonprofit_name = $import_name;
}

if (empty($import_bpar)) {
  $hero_p = "We're here to save lives and make the world a better place.";
} else {
  $hero_p = $import_bpar;
}

if (empty($import_name)) {
  $help = "We're here to help.";
} else {
  $help = $import_bhead;
}

if (empty($import_par)) {
  $mission = "Our mission is to help those less fortunate get a second chance.";
} else {
  $mission = $import_par;
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
