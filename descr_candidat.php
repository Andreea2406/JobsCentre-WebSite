


<?php

require_once("connection.php");



//include 'headerlogged.php';
//echo $_SESSION["username"];
$n=$_SESSION["name"];
$email=$_SESSION["username"];
$id = $_SESSION['id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Descriere candidat</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
<form method="POST" action="process.php">
  <label for="descriere">Name:</label>
  <input type="text" name="descriere" id="descriere" required><br>

  <label for="studies">Studies:</label>
  <input type="text" name="studies" id="studies" required><br>

  <label for="abilities">Abilities:</label>
  <textarea name="abilities" id="abilities" rows="5" required></textarea><br>

  <input type="submit" value="Submit">
</form>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>