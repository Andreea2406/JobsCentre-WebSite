
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
echo $_SESSION["titlu"];
echo $_SESSION["continut"] ;

$id = $_SESSION['user_id'];
$nume = $_SESSION['name'];

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
<div class="grid-x grid-padding-x">
    <div class="columns small-8 large-10"><a href="paginaPrincipala.php"> <img src="/images/logoSite2.jfif"> </a></div>
    <div class="columns small-4 large-2" style="text-align: center; ">

        <ul class="dropdown menu " data-dropdown-menu>
            <li>
                <a   style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;margin-top: 10px;"href="#">Nume Companie</a>
                <ul class="menu">
                    <li><a href="adauga_job_companie.html">Adauga job</a></li>
                    <li><a href="joburiileMele_Companie.html">Joburiile mele</a></li>
                    <li><a href="cautareCandidati_companie.html">Cauta candidati</a></li>
                    <li><a href="interviuri_companie.html">Programeaza un interviu</a></li>
                    <li><a href="setari_companie.html">Setari</a></li>

                    <li><a href="paginaPrincipala.php">Deconecteaza-te</a></li>
                </ul>
            </li>
        </ul>


    </div>
</div>
<div class="grid-x grid-padding-x"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed" >
    <div class="columns small-8 large-12"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed">

        <div class="columns small-12 large-12"style="background-image:url('images/aplic.jpg' ) ;background-size: cover;background-attachment: fixed">
            <br><br><br>
            <input type="text" placeholder="Cauta anunt" style="padding-left:10px;font-size:25pt;border-radius: 25px; margin-top: 50px;margin-bottom: 40px;";>
            <a href="#" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Caută </a>
            <a href="adauga.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Creare anunt nou </a>
            <a href="delete_job.html" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Sterge anunt</a>

            <!--            <a href="read.php" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Vizualizare anunturi</a>-->




            <p></p>

        </div>



    </div>
</div>
</br>
<br><br><br><br>






    <?php
    $db=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($db,"datepersoane");
    $nume_firma=$titlu =$nr_joburi_disponibile=$carnet_de_conducere=$tip_job=$nivel_cariera=$limbi_straine= $locatie=$descriere = "";

    $mode="";
    if (isset($_POST['mode']))
    {
        $mode = $_POST['mode'];
    }

    if ($mode == "adaugare") {

        if ((empty($_POST["nume_firma"]))&& (empty($_POST["titlu"]))&&(empty($_POST["nr_joburi_disponibile"]))&&(empty($_POST["carnet_de_conducere"]))&&(empty($_POST["tip_job"]))&&(empty($_POST["nivel_cariera"]))&&(empty($_POST["limbi_straine"]))&&(empty($_POST["locatie"]))&&(empty($_POST["descriere"]))) {
            $titluErr = "Este necesar sa introduceti datele cerute!";
            echo $titluErr;
        } else {
            $nume_firma = $nume;
            $titlu = $_POST["titlu"];
            $nr_joburi_disponibile = $_POST["nr_joburi_disponibile"];
            $carnet_de_conducere = $_POST["carnet_de_conducere"];
            $tip_job = $_POST["tip_job"];
            $nivel_cariera = $_POST["nivel_cariera"];
            $limbi_straine = $_POST["limbi_straine"];

            $locatie = $_POST["locatie"];
            $descriere = $_POST["descriere"];
            $id_companie="SELECT id_companie  FROM companii WHERE nume ='$nume'";

// Prepare the query to retrieve the id_companie value
            $id_companie_query = "SELECT id_companie FROM companii WHERE nume = '$nume'";

// Execute the query
            $result = mysqli_query($db, $id_companie_query);

// Check if the query was successful
            if ($result) {
                // Fetch the result row
                $row = mysqli_fetch_assoc($result);

                // Retrieve the id_companie value from the fetched row
                $id_companie = $row['id_companie'];

                // Insert the values into the toate_joburiile table
                $sql1 = "INSERT INTO toate_joburiile (id_companie, nume_firma, titlu, nr_joburi_disponibile, carnet_de_conducere, tip_job, nivel_cariera, limbi_straine, locatie, descriere) 
  VALUES ('$id_companie', '$nume_firma', '$titlu', '$nr_joburi_disponibile', '$carnet_de_conducere', '$tip_job', '$nivel_cariera', '$limbi_straine', '$locatie', '$descriere')";

//            mysqli_query($db,$sql1);
                $insert_result = mysqli_query($db, $sql1);

                // Check if the insertion was successful
                if ($insert_result) {
                    // Insertion successful, perform any further actions or display success message
                    echo "Job inserted successfully!";
                    $sql2 = "INSERT INTO add_job ( nume_firma, titlu, nr_joburi_disponibile, carnet_de_conducere, tip_job, nivel_cariera, limbi_straine, locatie, descriere) 
  VALUES ($nume_firma', '$titlu', '$nr_joburi_disponibile', '$carnet_de_conducere', '$tip_job', '$nivel_cariera', '$limbi_straine', '$locatie', '$descriere')";
                    // Execute the insertion query
                    $results= mysqli_query($db,$sql2);
                } else {
                    // Insertion failed
                    echo "Error: " . mysqli_error($db);
                }
            } else {
                // Query failed
                echo "Error: " . mysqli_error($db);
            }


//
//            $sql="INSERT INTO add_job (nume_firma,titlu,nr_joburi_disponibile,carnet_de_conducere,tip_job,nivel_cariera,limbi_straine,locatie,descriere) VALUES ('$nume_firma','$titlu','$nr_joburi_disponibile','$carnet_de_conducere','$tip_job','$nivel_cariera','$limbi_straine','$locatie','$descriere')";
//            echo $sql;
//            $sql1="INSERT INTO toate_joburiile (id_companie,nume_firma,titlu,nr_joburi_disponibile,carnet_de_conducere,tip_job,nivel_cariera,limbi_straine,locatie,descriere) VALUES ('$id_companie','$nume_firma','$titlu','$nr_joburi_disponibile','$carnet_de_conducere','$tip_job','$nivel_cariera','$limbi_straine','$locatie','$descriere')";
//
//
//
//            //  echo $sql;
//            echo "</br>";
//
//            $results= mysqli_query($db,$sql);
//            mysqli_query($db,$sql1);
//            if (!$results)
//                die('Invalid querry:' .mysqli_error($db));
//            else
//            {
//                echo "Inregistrarea a fost adaugata.</br>";
//            }
        }}
    ?>


</br>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>