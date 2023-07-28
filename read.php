<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';



?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <style>


        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #D6EEEE;
        }
    </style>
</head>
<body>

<div class="grid-x grid-padding-x"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed" >
    <div class="columns small-8 large-12"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed">

        <div class="columns small-12 large-12"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed">
            <br><br><br>
            <input type="text" placeholder="Cauta anunt" style="padding-left:10px;font-size:25pt;border-radius: 25px; margin-top: 50px;margin-bottom: 40px;";>
            <a href="cauta_joburi.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Caută </a>
            <a href="adauga.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Creare anunt nou </a>
            <a href="delete_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Sterge anunt</a>
            <a href="EDIT_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Editeaza anunt</a>

            <!--            <a href="read.php" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Vizualizare anunturi</a>-->


            <p></p>

        </div>



    </div>
</div>
</br>

<?php
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"datepersoane");
$titlu = $locatie=$descriere=$tip_job = "";

$start=20;
$id=1;
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $start=($id);
}

$sqlv="SELECT * FROM jobs LIMIT $start";

$resultv= mysqli_query($db,$sqlv);
if (!$resultv)
    die('Invalid querry:' .mysqli_error($db));
else
{
    echo "<table class=\"unstriped\">";
    echo "  <thead><tr><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Titlu</b></th><th width=\"150\"><b>Locatie</b></th><th width=\"150\"><b>Descriere</b></th><th><b>Tip_job</b></th></th></tr></thead> <tbody>";
    while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
    {echo "<tr><td>";
       echo $myrow["id"];
        echo "</td><td>";
        echo $myrow["titlu"];
        echo "</td><td>";
        echo $myrow["locatie"]; echo "</td><td>";
        echo $myrow["descriere"]; echo "</td><td>";
        echo $myrow["tip_job"]; echo "</td><td>";
        echo "</td></tr>"; }

    echo " </tbody></table>";

    $rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM jobs "));
    $total=ceil($rows);

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
</br>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>