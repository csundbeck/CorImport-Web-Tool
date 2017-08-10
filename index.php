<?php

$conn=mysqli_connect("localhost","root","root","landing");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}

?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">

<title>Start Form</title>


</head>
<body>

<div class="style">
<link rel="stylesheet" type="text/css" href="form.css">
<form action="result.php" method="post" enctype="multipart/form-data">
  <label id="name"> Name</label><br/>
  <input type="text" name="name"><br/>

  <label id="par">Paragraph</label><br/>
  <textarea rows="4" cols="50" name="par"></textarea><br/>

  <label id="bhead">Body Head</label><br/>
  <input type="text" name="bhead"><br/>

  <label id="bpar">Body Paragraph</label><br/>
  <textarea type="textarea" name="bpar"></textarea><br/>

  <input type="file" name="fileToUpload" id="fileToUpload">

  <input type="submit" value="Generate" name="submit">
</form>
</div>

</body>
</html>
