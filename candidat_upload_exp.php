
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
<?php ' <form  name="adaugare" id="adaugare" method="post"  action="add_experienta_candidat.php?id=' . $id . '"'?>>
<p class="hide"><input type="text" name="mode" value="adaugare1" ></p>

<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    <label>De la:</label>
    <input type="date" id="datei" name="datei" max="2023-03-09">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">

    <label>Pana la :</label>
    <input type="date" id="datef" name="datef" max="2023-03-09">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Functia ocupata: <input type="text" name="functie"  id="functie">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Numele companiei: <input type="text" name="nume_companie"  id="nume_companie">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Oras: <input type="text" name="oras"  id="oras">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Departament: <input type="text" name="departament"  id="departament">
</div>

<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Industrie: <input type="text" name="industrie"  id="industrie">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Salariu net lunar(optional): <input type="text" name="salariu"  id="salariu">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    <button  type="submit" class="success button" name="submit"style="background-color: #fdb9ff"></a>Adauga</button>
</div>
<!--                        <button class="close-button" data-close aria-label="Close reveal" type="button">-->
<!--                            <span aria-hidden="true">&times;</span>-->
<!--                        </button>-->
</form>
</script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>