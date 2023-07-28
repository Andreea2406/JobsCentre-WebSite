
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
echo $_SESSION["username"];
$n=$_SESSION["name"];
$email=$_SESSION["username"];
$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

</body>
</html>
<?php ' <form  name="adaugare" id="adaugare" method="post"  action="add_studii_candidat.php?id=' . $id . '"'?>>
<p class="hide"><input type="text" name="mode" value="adaugare" ></p>

<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    <label>De la:</label>
    <input type="date" id="datein" name="datemin" max="2023-03-09">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">

    <label>Pana la :</label>
    <input type="date" id="datefn" name="datemax" max="2023-03-09">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Tip institutie: <input type="text" name="tip_institutie"  id="tip_institutie">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Specializarea/Profil: <input type="text" name="specializare"  id="specializare">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Denumire institutie: <input type="text" name="denumire_institutie"  id="denumire_institutie">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Locatie: <input type="text" name="locatie"  id="locatie">
</div>


<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    <button  type="submit" class="success button" name="submit"style="background-color: #fdb9ff"></a>Adauga</button>
</div>
</form>


</script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>