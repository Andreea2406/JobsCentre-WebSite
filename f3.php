
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>

<div class="row">
continut funct 3
</div>



<?php include 'footer.php'; ?>

