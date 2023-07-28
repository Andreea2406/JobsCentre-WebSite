
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
 <form  name="adaugare" id="adaugare" method="post"  action=<?php '"add_descriere_candidat.php?id=' . $id . '"'?>>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Despre mine: <input type="text" name="descriere"  id="descriere">
</div>
<p class="hide"><input type="text" name="mode" value="adaugare" ></p>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Abilitati: <input type="text" name="abilitati"  id="abilitati">
</div>
<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
    Limbi cunoscute: <input type="text" name="limbi_cunoscute"  id="limbi_cunoscute">
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