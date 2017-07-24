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
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('".$_POST["first"]."','".$_POST["last"]."','".$_POST["email"]."')";

    $result = mysqli_query($conn,$sql);
}

?>

<form action="dbform.php" method="post">
<label id="first"> First</label><br/>
<input type="text" name="first"><br/>

<label id="first">Last</label><br/>
<input type="password" name="last"><br/>

<label id="first">Email</label><br/>
<input type="text" name="email"><br/>

<button type="submit" name="save">save</button>

</form>

</body>
</html>
