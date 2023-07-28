<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}
//echo $_SESSION["name"];
include 'headerlogged.php';


//echo $_SESSION["id"];

$id = $_SESSION['id'];
$nume_companie = $_SESSION['name'];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <style>
        .job-box {
            border: 4px solid #ccc;
            border-radius: 50px;
            border-color: #33b4c2;
            padding: 10px;
            margin-bottom: 10px;

        }
    </style>
</head>
<body>
<!--<div class="grid-x grid-padding-x" style=" background-image:url('images/human.jpg');;background-size: cover;background-attachment: fixed">-->
<!--    <div class="columns small-12 large-4"style=" ;background-size: cover;background-attachment: fixed">-->
<!---->
<!--        --><?php //require ("headerlogged_.php");?>
<!---->
<!---->
<!--        <h1 style="color: #33b4c2;font-size: 200%;font-weight:bold;text-align: center">Ajute-ne sa te cunoastem mai bine!</h1><br><br>-->
<!--    </div>-->
<!---->
<!---->
<!--</div>-->
<div class="small-12 large-2 cell">    </div>


<?php
// Establish a database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "datepersoane";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
$sql = "SELECT * FROM toate_joburiile";
$result = $conn->query($sql);


// Check if there are any rows in the result
if ($result->num_rows > 0) {
    $_SESSION["id"] = "id";
    // Output each row as a <div> element
    while ($row = $result->fetch_assoc()) {
        // echo '<div class="column small-12 large-6" style="justify-content:right;margin-left: 15px;;border-width:2px;border-style:solid; float:left;border-style: solid ; opacity: 100%;font-size: 25px;border-radius: 20px; color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 10px;padding-top: 5px">';
        //echo '<br><br>'; echo '<br><br>';
        $id_job = $row["id"];
       // echo $id_companie;

        echo '<div class="job-box">';
        echo '<div class="job-listing">';
        echo '<h2 style="color: #33b4c2"> ' . $row["nume_firma"] . '</h2>';
        echo '<div class="firm-name">Numele firmei: ' . $row["nume_firma"] . '</div>';
        echo '<div class="job-title">Titlu job: ' . $row["titlu"] . '</div>';
        echo '<div class="available-jobs">Joburi disponibile: ' . $row["nr_joburi_disponibile"] . '</div>';
        echo '<div class="driver-license">Carnet de conducere: ' . $row["carnet_de_conducere"] . '</div>';
        echo '<div class="job-type">Tipul jobului: ' . $row["tip_job"] . '</div>';
        echo '<div class="career-level">Nivel cariera: ' . $row["nivel_cariera"] . '</div>';
        echo '<div class="foreign-languages">Limbi straine: ' . $row["limbi_straine"] . '</div>';
        echo '<div class="location">Locatia: ' . $row["locatie"] . '</div>';
        echo '<div class="description">Descriere: ' . $row["descriere"] . '</div>';
        echo '<br><br>';
        echo '</div>';
        echo '





 <a  data-open="exampleModal'.$id_job.'" style="justify-content: left;  background-color: #f3ccd5; opacity: 100%;font-size: 25px;border-radius: 20px;color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;
                padding-top: 5px"> Aplică acum </a>
                     <div class="reveal" id="exampleModal'.$id_job.'" aria-labelledby="exampleModalHeader11" data-reveal>
          <form action="file.php?id=' . $id . '&id_job=' . $id_job . '" method="post" enctype="multipart/form-data">    
          
          <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
       Descriere:     <input type="text" name=descriere value="descriere" id="descriere">
        </div><p class="hide"><input type="text" name="mode" value="adaugare" ></p>
          <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
           Mesaj:    <input type="text" name=mesaj value="mesaj" id="mesaj">
        </div>
         <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
           Data:    <input type="text" name=data_interviu value="data_interviu" id="data_interviu">
        </div>
      

          <br>
          

      

          <br>
          <br>     <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">

          Incarca-ti aici CV-ul in format pdf :
          <input  type="file"accept=".pdf" name="file" id="file" />

         <p>&nbsp;</p>    </div>

          <p>
  <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
      <button type="submit" class="success button" name="submit" ">Trimite</button>
    </div>       
     </form>
        <br>
           </div>
          
                  ';
        echo '</div>';
        ?>

        <?php
        echo '</div>';
    }
} else {
    echo "No job listings found.";
}

// Close the database connection
$conn->close();
?>

<!--</div>-->

</div>

<div class="small-12 large-2 cell">    </div>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
