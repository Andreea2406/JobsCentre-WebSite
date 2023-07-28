<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
    <link rel="stylesheet" href="css/app.css">  <link rel="stylesheet" href="css/foundation.css">

</head>
<body>





<div class="grid-x grid-padding-x">
    <div class="columns small-9 large-10"><a href="paginaPrincipala.php"> <img src="/images/logoSite2.jfif"> </a></div>
    <div class="columns small-3 large-2" style="text-align: center; ">

        <ul class="dropdown menu " data-dropdown-menu>
            <li>
                <a   style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;margin-top: 10px;"href="#">Nume admin</a>
                <ul class="menu">
                    <li><a href="read.php">Lista anunturi</a></li>
                    <li><a href="read_candidati.php">Lista candidati</a></li>
                    <li><a href="read_companii.php">Lista companii</a></li>
                    <li><a href="mesaje_admin.php">Mesaje utilizatori</a></li>

                    <li><a href="paginaPrincipala.php">Deconecteaza-te</a></li>
                </ul>
            </li>
        </ul>


    </div>
</div>
<div class="grid-x grid-padding-x"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed" >
    <div class="columns small-12 large-12"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed">

        <div class="columns small-12 large-12"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed">
            <br><br><br>
            <input type="text" placeholder="Cauta companie dupa nume" style="padding-left:10px;font-size:25pt;border-radius: 25px; margin-top: 50px;margin-bottom: 40px;";>
            <a href="#" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Caută </a>
            <a href="adauga_companie_admin.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px">Adauga companie </a>
            <a href="delete_companii.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px">Sterge companie </a>

            <!--            <a href="read_companii.php" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Vizualizare companii </a>-->

            <p></p>

        </div>



    </div>



</div>

</br>
</br>
</br>
</br>

<?php
$nume = "";
//$id_cleint=$nume =$prenume=$oras= $varsta=$telefon = "";

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"datepersoane");


if (empty($_POST["nume"])) {
    $numeErr = "Este necesar sa introduceti numele companiei.";
   // echo $numeErr;
} else {
    $nume = $_POST["nume"];
    $result= mysqli_query($db,"DELETE FROM companii WHERE nume = '$nume'");






    if (!$result)
        die('Invalid querry:' .mysqli_error($db));
    else
    {
       // echo "   Daca exista o inregistrare cu adresa de email ".$nume." , atunci aceasta a fost stearsa";
    }
}
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"datepersoane");
$nume =$locatie= $email=$parola = "";
$start=1;
$id=1;
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $start=($id);
}

$sqlv="SELECT * FROM companii LIMIT $start";

$resultv= mysqli_query($db,$sqlv);
if (!$resultv)
die('Invalid querry:' .mysqli_error($db));
else {
    echo "<table class=\"unstriped\">";
    echo "  <thead><tr><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Nume</b></th><th width=\"150\"><b>Locatie</b></th><th width=\"150\"><b>Email</b></th><th><b>Parola</b></th></th></tr></thead> <tbody>";
    while ($myrow = mysqli_fetch_array($resultv, MYSQLI_ASSOC)) {
        echo "<tr><td>";
        echo $myrow["id_companie"];
        echo "</td><td>";
        echo $myrow["nume"];
        echo "</td><td>";
        echo $myrow["locatie"];
        echo "</td><td>";
        echo $myrow["email"];
        echo "</td><td>";
        echo $myrow["parola"];
        echo "</td><td>";
        echo "</td></tr>";
    }
    echo " </tbody></table>";

    $rows = mysqli_num_rows(mysqli_query($db, "SELECT * FROM companii "));
    $total = ceil($rows);
//
//    if($id>1)
//    {
//        echo "<a href='?id=".($id)."' class='button'>PREVIOUS </a>";
//    }
//
//    if($id!=$total)
//    {
//        echo "<a href='?id=".($id+1)."' class='button'> NEXT</a>";
//    }

//    echo "<ul class='page'>";
    for ($i = 1; $i <= $total; $i++) {
        if ($i == $id) {
            echo "<li class='current'>" . $i . "</li>";
        } else {
            echo "<li><a href='?id=" . $i . "'>" . $i . "</a></li>";
        }
    }
//echo "</ul>";
}
?>
</br>
</br>


<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>