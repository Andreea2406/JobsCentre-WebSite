
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
echo $_SESSION["titlu"];
echo $_SESSION["continut"] ;
$nume_companie = $_SESSION['name'];


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
            <input type="text" style="padding-left:10px;font-size:25pt;border-radius: 25px; margin-top: 50px;margin-bottom: 40px;";>
            <a href="companie_cauta_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Caută </a>
<!--            <a href="companie_add_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Adaugare anunt nou </a>-->
<!--            <a href="companie_del_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Sterge anunt</a>-->
<!--            <a href="companie_edit_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Editeaza anunt</a>-->

            <!--            <a href="read.php" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Vizualizare anunturi</a>-->


            <p></p>

        </div>



    </div>
</div>
<br><br>
<?php

$db = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($db, "datepersoane");
$id_interviu=$id_job=$id_candidat=$descriere=$mesaj=$CV=$data_interviu="";
if(isset($_GET['id_interviu']))
{
    $id_interviu=$_GET['id_interviu'];

}
//
//$q1="SELECT username FROM users
//inner join interviuri_companie on users.id=interviuri_companie.id_candidat ";
//$resultq1= mysqli_query($db,$q1);$len1=mysqli_num_rows($resultq1);
//if($resultq && $resultq1){
//$row = mysqli_fetch_array($resultq);$len=mysqli_num_rows($resultq);
$id_interviu=1;


$id_companie="SELECT nume, prenume FROM candidati WHERE id_candidat='$nume_companie'";


$id_companie="SELECT id_companie FROM companii WHERE nume='$nume_companie'";


$q=$db->query($id_companie);
$r = $q->fetch_assoc();
$id_companie_extras=$r['id_companie'];
$sql="SELECT interviuri_companie.id_interviu, candidati.nume, toate_joburiile.titlu, interviuri_companie.descriere, interviuri_companie.mesaj, interviuri_companie.cv,interviuri_companie.data_interviu FROM interviuri_companie INNER JOIN candidati ON candidati.id_client=interviuri_companie.id_candidat INNER JOIN toate_joburiile ON toate_joburiile.id=interviuri_companie.id_job where toate_joburiile.id_companie='$id_companie_extras'";

//$q="SELECT titlu FROM toate_joburiile inner join interviuri_companie
//on toate_joburiile.id=interviuri_companie.id_job  ";
$result= mysqli_query($db,$sql);


$sqlv="SELECT * FROM interviuri_companie ";

$resultv= mysqli_query($db,$sqlv);
if (!$resultv)
    die('Invalid querry:' .mysqli_error($db));
else
{


    echo "<table style='background-color: #33b4c2' class=\"unstriped\">";
    echo "  <thead style='background-color: #33b4c2'><tr><th  width=\"50\"><b>Id</b></th><th width=\"150\"><b>Client</b></th><th width=\"150\"><b>Titlu job</b></th><th width=\"150\"><b>Descriere</b></th><th width=\"50\"><b>Mesaj</b></th><th width=\"150\"><b>CV</b></th><th width=\"50\"><b>Data</b></th></th></th></tr></thead> <tbody>";
    while ($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC) )
    {
        echo "<tr style='background-color: #f7e4e1'><td>";

        echo $myrow['id_interviu'];echo "</td><td>";
        //echo $row1["username"];
//        mysqli_data_seek($resultq1, 0); // Reset the result pointer
//        while ($row1 = mysqli_fetch_array($resultq1, MYSQLI_ASSOC)) {
//            if ($row1['username'] >=$len1) {
//                echo isset($row1['username']) ? $row1['username'] : '';
//                break;
//            }
//        }
//
//        echo "</td><td>";
//        mysqli_data_seek($resultq, 0); // Reset the result pointer
//        while ($row2 = mysqli_fetch_array($resultq, MYSQLI_ASSOC)) {
//            if ($row2['titlu']>=$len) {
//                echo isset($row2['titlu']) ? $row2['titlu'] : '';
//                break;
//            }
//        }
        //
        //echo $q1;
        // echo $row2;
        // echo "</td><td>";
        //echo "</td><td>";


        //echo "<td>" . $row['id_interviu'] . "</td>";
        //echo "<td>" . $row2['id_job'] . "</td>";
        // echo $["id_interviu"];echo "</td><td>";
        //echo $id_job;echo "</td><td>";
          // echo $id_candidat;echo "</td><td>";
        echo $myrow["nume"];echo "</td><td>";
        echo $myrow["titlu"];echo "</td><td>";
        echo $myrow["descriere"];echo "</td><td>";
        echo $myrow["mesaj"];echo "</td><td>";
        echo $myrow["cv"]; echo "</td><td>";
        echo $myrow["data_interviu"]; echo "</td><td>";


        echo "</td></tr>"; }

    echo " </tbody></table>";
//    while ($row1 = mysqli_fetch_array($resultq, MYSQLI_ASSOC)) {
//        // Echo the columns from $row1
//        echo isset($row1['username']) ? $row1['username'] : ''; // Replace 'column_name' with the actual column name
//
//        //echo $row1["username"];
//    }
//
//    while ($row2 = mysqli_fetch_array($resultq1, MYSQLI_ASSOC)) {
//        // Echo the columns from $row2
//        // echo $row2['nume_firma'];
//        echo isset($row2['nume_firma']) ? $row2['nume_firma'] : ''; // Replace 'column_name' with the actual column name
//
//    }

    //$rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM add_job"));
    //$total=ceil($rows);

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

