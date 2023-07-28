
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
echo $_SESSION["titlu"];
echo $_SESSION["continut"] ;
$user_id = $_SESSION['id'];
$email = $_SESSION['username'];

$n = $_SESSION["name"];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JobsCentre</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundation for Sites</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>
<body >

<!---->
<!--<div class="grid-x grid-padding-x">-->
<!--  <div class="columns small-9 large-10"><a href="paginaPrincipala.php"> <img src="/images/logoSite2.jfif"> </a></div>-->
<!--  <div class="columns small-3 large-2" style="text-align: center; ">-->
<!---->
<!--    <ul class="dropdown menu " data-dropdown-menu>-->
<!--      <li>-->
<!--        <a   style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;margin-top: 10px;"href="#">Nume Companie</a>-->
<!--        <ul class="menu">-->
<!--          <li><a href="read_job_companie.php">Adauga job</a></li>-->
<!--          <li><a href="joburiileMele_Companie.html">Joburiile mele</a></li>-->
<!--          <li><a href="cautareCandidati_companie.html">Cauta candidati</a></li>-->
<!--          <li><a href="mesaje_companie.html">Mesajele mele</a></li>-->
<!---->
<!--          <li><a href="interviuri_companie.html">Programeaza un interviu</a></li>-->
<!--          <li><a href="setari_companie.html">Setari</a></li>-->
<!---->
<!--          <li><a href="paginaPrincipala.php">Deconecteaza-te</a></li>-->
<!--        </ul>-->
<!--      </li>-->
<!--    </ul>-->
<!---->
<!---->
<!--  </div>-->
<!--</div>-->

<div class="grid-x grid-padding-x">
  <div class="columns small-12 large-12">    <h1 style="text-align:center; color: #33b4c2;padding-left:70px;font-weight:bold"><?php echo  "$n"?></h1>
  </div>


</div>

<br><br>


<div class="grid-x grid-padding-x" style="background-image:url('images/businessman-blurred-background-with-people-connection-icon-business-leadership-chart.jpg' ) ;background-size: cover;background-attachment: fixed">
  <br><br><br><br>
  <div class="small-12 large-3 cell"
       style="background-color: #ffffff;opacity:90%;  border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">


    <h1 style="color: #33b4c2">Despre firma:</h1>

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
      //$sql = "select * from companii
      //inner join users on users.username=companii.email ";
      //$result = $conn->query($sql);

      $stmt = $conn->prepare("SELECT * FROM companii WHERE email = ?  ");
      $stmt->bind_param("s", $email);
      //$result = $conn->query($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      // Check if there are any rows in the result
      if ($result->num_rows > 0 ) {
          //$_SESSION["id"] = "id";
          // Output each row as a <div> element
          // while ($row = $result->fetch_assoc()) {
          // echo '<div class="column small-12 large-6" style="justify-content:right;margin-left: 15px;;border-width:2px;border-style:solid; float:left;border-style: solid ; opacity: 100%;font-size: 25px;border-radius: 20px; color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 10px;padding-top: 5px">';
          //echo '<br><br>'; echo '<br><br>';
          $row = $result->fetch_assoc();
          $id_companie = $row["id_companie"];

          // $id_companie = $row["id"];
          // echo $id_companie;
          echo '<div class="job-box">';
          echo '<div class="job-listing">';
          echo '<h2 style="color: #33b4c2"> ' . $row["nume"] . '</h2>';
          echo '<form method="POST" action="companie_edit.php?id_companie=' . $id_companie . '">';
          echo '<div class="firm-name">Nume: ' . $row["nume"] . '</div>';

          echo '<div class="firm-name">Locatie: ' . $row["locatie"] . '</div>';
          echo '<div class="job-title">Email: ' . $row["email"] . '</div>';
          echo '<div class="available-jobs">Parola: ' . $row["parola"] . '</div>';


          echo '<br><br>';

          echo '</form>';
          echo '<br><br>';
          echo '</div>';

          ?>

          <?php
          echo '</div>';

      } else {
          echo "No job listings found.";
      }

      // Close the database connection
      $conn->close();
      ?>



  </div>
  <div class="column large-3 "></div>

  <div class="small-12 large-6 cell"
       style="background-color: #ffffff;opacity:90%; border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">
    <h1 style="text-align:left; color: #33b4c2;padding-left:70px;font-weight:bold">Despre noi</h1>
    <br>

      <?php
      // Connect to the database
      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "datepersoane";

      $conn = new mysqli($servername, $username, $password, $dbname);
      //$mode=$_POST['mode'];
      $mode="";
      if (isset($_POST['mode']))
      {
          $mode = $_POST['mode'];
      }
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Check if the form was submitted
      if ($mode== "adaugare") {
          // Retrieve user input
          $ocupatie = $_POST['ocupatie'];
          $istorie = $_POST['istorie'];
          $cautam = $_POST['cautam'];
          $oferim = $_POST['oferim'];

          $id_compani="SELECT id_companie FROM companii WHERE nume='$n' ";

            $q=$conn->query($id_compani);
          $r = $q->fetch_assoc();
          $id_companie_extras=$r['id_companie'];

          // Insert the description into the database
          $sql = "INSERT INTO descriere_companie (id_companie,nume,ocupatie,istorie,cautam,oferim) VALUES ('$id_companie_extras','$n','$ocupatie','$istorie','$cautam','$oferim')";

          if ($conn->query($sql) === TRUE) {

              echo "Description saved successfully.";
//              $row = $result->fetch_assoc();
//              $nume = $row['nume'];
//              $ocupatie = $row['ocupatie'];
//              $istorie = $row['istorie'];
//              $cautam = $row['cautam'];
//              $oferim = $row['oferim'];

              // Display the description
              //<h1 style="text-align:left; color: #33b4c2;padding-left:70px;font-weight:bold">Despre noi</h1>

              echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Numele firmei :</h1> " . $n . "<br>";
              echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Cu ce ne ocupam noi?</h1><br>" . $ocupatie . "<br>";
              echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Istoria firmei </h1>" . $istorie . "<br>";
              echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Ce cautam? </h1><br> " . $cautam . "<br>";
              echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Ce oferim? </h1> <br>" . $oferim . "<br>";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }

      // Retrieve the user's description
      $sql = "SELECT * FROM descriere_companie WHERE nume='$n'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // Description exists
          $row = $result->fetch_assoc();
          $nume = $row['nume'];
          $ocupatie = $row['ocupatie'];
          $istorie = $row['istorie'];
          $cautam = $row['cautam'];
          $oferim = $row['oferim'];


          echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Numele firmei :</h1> " . $n . "<br>";
          echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Cu ce ne ocupam noi?</h1><br>" . $ocupatie . "<br>";
          echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Istoria firmei </h1>" . $istorie . "<br>";
          echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Ce cautam? </h1><br> " . $cautam . "<br>";
          echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Ce oferim? </h1> <br>" . $oferim . "<br>";

      } else {
          // Description does not exist
          ?>
<!--          <form action="--><?php //echo $_SERVER['PHP_SELF']; ?><!--" method="POST">-->
          <form action="paginaPrincipalaCompanie.php" method="POST">
              <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                  Cu ce ne ocupam noi?: <input type="text" name="ocupatie"  id="ocupatie">
              </div>
              <p class="hide"><input type="text" name="mode" value="adaugare" ></p>

              <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                  Istorie firma: <input type="text" name="istorie"  id="istorie">
              </div>
              <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                  Ce cautam? : <input type="text" name="cautam"  id="cautam">
              </div>
              <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                  Ce oferim? : <input type="text" name="oferim"  id="oferim">
              </div>

              <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                  <button  type="submit" class="success button" name="submit"style="background-color: #fdb9ff">Adauga</button>
              </div>
          </form>
          <?php
      }


      ?>






  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>




<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>