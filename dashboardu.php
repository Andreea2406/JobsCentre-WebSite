
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>

<div class="row">

    <div>
<?php echo$_SESSION["titlu"] ?>
    </div>
    <div>
    <?php echo $_SESSION["continut"] ?>
</div>
<div>
       USERRRRR!!bmnvbmnbmnbmnbmn bnmnbmnbmnb
</div>
</div>



<?php include 'footer.php'; ?>

