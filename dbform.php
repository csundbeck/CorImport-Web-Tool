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

<title>test form</title>


</head>
<body>

 <?php

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO settings (name, par, bhead, bpar)
    VALUES ('".$_POST["name"]."','".$_POST["par"]."','".$_POST["bhead"]."','".$_POST["bpar"]."')";

    // $result = mysqli_query($conn,$sql);
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<form action="dbform.php" method="post">
  <label id="name"> Name</label><br/>
  <input type="text" name="name"><br/>

  <label id="par">Paragraph</label><br/>
  <textarea rows="4" cols="50" name="par"></textarea><br/>

  <label id="bhead">Body Head</label><br/>
  <input type="text" name="bhead"><br/>

  <label id="bpar">Body Paragraph</label><br/>
  <input type="textarea" name="bpar"><br/>

  <button type="submit" name="save">save</button>
</form>

</body>
</html>

<form action="dbform.php" method="post">
<label id="name">Name</label><br/>
<input type="text" name="name"><br/>

<label id="par">Paragraph</label><br/>
<textarea row="4" col="50"name="par"></textarea><br/>

<label id="bhead">Body Head</label><br/>
<input type="text" name="bhead"><br/>

<label id="bpar">Body Paragraph</label><br/>
<textarea row="4" col="50"name="bpar"></textarea><br/>

<button type="submit" name="save">save</button>

</form>

</body>
</html>
