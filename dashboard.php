
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}
include 'header.php';

//include 'headerlogged.php';
//include 'admin.php'

?>

<div class="row">

    <div>
<?php echo$_SESSION["titlu"] ?>
    </div>
    <div>
    <?php echo $_SESSION["continut"] ?>
</div>
<div>

</div>
</div>


<?php include 'footer.php'; ?>

