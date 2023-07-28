
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
echo $_SESSION["titlu"];
echo $_SESSION["continut"] ;

$id = $_SESSION['id'];
$nume = $_SESSION['name'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JobsCentre</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

</head>
<body>

<div class="grid-x grid-padding-x"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed" >
    <div class="columns small-8 large-12"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed">

        <div class="columns small-12 large-12"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed">
            <br><br><br>
            <input type="text" placeholder="Cauta anunt" style="padding-left:10px;font-size:25pt;border-radius: 25px; margin-top: 50px;margin-bottom: 40px;";>
            <a href="companie_cauta_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Caută </a>
            <a href="companie_add_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Adaugare anunt nou </a>
            <a href="companie_sterge_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Sterge anunt</a>
            <a href="companie_update_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Editeaza anunt</a>

            <!--            <a href="read.php" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Vizualizare anunturi</a>-->


            <p></p>

        </div>



    </div>
</div>
<br><br>
<?php
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"datepersoane");
$nume_frima=$titlu =$nr_joburi_disponibile=$carnet_de_conducere=$tip_job=$nivel_cariera=$limbi_straine= $locatie=$descriere = "";

$start=20;
$id=1;
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];


    $sql = "SELECT * FROM users where id='$user_id' ";
}
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $start=($id);
}

$sqlv="select * from toate_joburiile inner join companii
on toate_joburiile.id_companie =companii.id_companie  where toate_joburiile.nume_firma='$nume'";

$resultv= mysqli_query($db,$sqlv);
if (!$resultv)
    die('Invalid querry:' .mysqli_error($db));
else
{
    echo "<table style='background-color: #33b4c2' class=\"unstriped\">";
    echo "  <thead style='background-color: #33b4c2'><tr><th  width=\"50\"><b>Id</b></th><th width=\"150\"><b>Nume firma</b></th><th width=\"150\"><b>Titlu job</b></th><th width=\"50\"><b>Joburi disponibile</b></th><th width=\"150\"><b>Carnet de conducere</b></th><th width=\"100\"><b>Tip job</b></th><th width=\"150\"><b>Nivel cariera</b></th><th width=\"150\"><b>Limbi straine</b></th><th width=\"150\"><b>Locatie</b></th><th><b>Descriere</b></th><th ></th></th></tr></thead> <tbody>";
    while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
    {echo "<tr style='background-color: #f7e4e1'><td>";
        echo $myrow["id"];echo "</td><td>";
        echo $myrow["nume_firma"];echo "</td><td>";
        echo $myrow["titlu"];echo "</td><td>";
        echo $myrow["nr_joburi_disponibile"];echo "</td><td>";
        echo $myrow["carnet_de_conducere"];echo "</td><td>";
        echo $myrow["tip_job"]; echo "</td><td>";
        echo $myrow["nivel_cariera"]; echo "</td><td>";
        echo $myrow["limbi_straine"]; echo "</td><td>";
        echo $myrow["locatie"]; echo "</td><td>";
        echo $myrow["descriere"]; echo "</td><td>";
     //   echo "<a href='#'>Vezi candidati</a>"; echo "</td><td>";

        echo "</td></tr>"; }

    echo " </tbody></table>";

//    $rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM add_job"));
//    $total=ceil($rows);

//    for($i=1;$i<=$total;$i++)
//    {
//        if($i==$id)
//        { echo "<li class='current'>".$i."</li>";
//        }
//        else
//        { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
//    }

}

?>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>