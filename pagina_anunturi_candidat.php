<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Locuri de muncă -Categorie</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundation for Sites</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">


  <style>

    .button1{
      width:102px;
      height: 20px;
      line-height: 42px;
      top:0px;
      text-align: center;

      font-family: tahoma;
      margin-top: 12px;
      margin-right: 12px;
      right:120px;
      position: absolute;
      margin-bottom: 9.6rem;
      padding-bottom: 30px;
      color: rgb(51, 180, 194);

    }
    .button2{
      width:102px;
      height: 20px;
      line-height: 32px;
      top:0;
      text-align: center;

      font-family: tahoma;
      margin-top: 12px;
      margin-right: 12px;
      right:0;
      position: absolute;
      margin-bottom: 9.6rem;
      padding-bottom: 30px;
      border-radius: 25px;
      background-color: #ffffff;
      color: #33b4c2;
      border: 4px solid #f3ccd5;

    }
    .button2:hover {
      background-color: #f3ccd5;
      color: #33b4c2;
    }

    .container{
      text-align: center;
    }
    .center {
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      margin: auto;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }


    .container{

      position:absolute;
      left:50%;
      top:90%;
      height: 300px;

      transform: translate(-50%,-50%)
    }
    .content {
      display: inline-block;
      vertical-align: top;
    }


  </style>


</head>




<body  style="background:#ffffff;background-repeat: no-repeat;background-color: rgb(255,255,255) ;background-size: cover;background-attachment: fixed" >


<div class="grid-x grid-padding-x">
  <div class="columns small-9 large-10"><a href="paginaPrincipala.php"> <img src="/images/logoSite2.jfif"> </a></div>
  <div class="columns small-3 large-2" style="text-align: center; ">

    <ul class="dropdown menu " data-dropdown-menu>
      <li>
        <a   style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;margin-top: 10px;"href="#">Nume Candidat</a>
        <ul class="menu">
          <li><a href="CVul_meu.php">CV-ul meu</a></li>
          <li><a href="aplicariile_mele.php">Aplicariile mele</a></li>
          <li><a href="interviuri.html">Interviuri</a></li>
          <li><a href="mesaje_candidat.html">Mesajele mele</a></li>
          <li><a href="setari_candidat.html">Setari</a></li>

          <li><a href="paginaPrincipala.php">Deconecteaza-te</a></li>
        </ul>
      </li>
    </ul>


  </div>
</div>
<div class="grid-x grid-padding-x" style="background-image:url('images/documents-with-charts-touchpad-desk.jpg' ) ;background-size: cover;background-attachment: fixed">

  <div class="columns small-12 large-12">

    <p style="color:#33b4c2;font-size: 200%;font-weight:bold;">Caută-ți jobul mult iubit!</p>     <br>

    <input type="text" placeholder="Introduceți un cuvânt cheie" style="padding-left:10px;font-size:25pt;border-radius: 25px; margin-top: 50px;margin-bottom: 40px;";>

    <input type="text" placeholder="Locație" style="padding-left:10px;font-size:25pt;margin-bottom:50px;border-radius: 25px";>


    <a href="#" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Caută job </a>




  </div>

</div>

<div class="grid-x grid-padding-x"style="background-image:url('images/documents-with-charts-touchpad-desk.jpg' ) ;background-size: cover;background-attachment: fixed" >
  <div class="columns small-4 large-3"
       style="background-color: #ffffff;border-color: #33b4c2;opacity: 60%;border-style:solid;border-radius: 50px;">
    <br>
    <form action="/action_page.php" >
      <h1 style="color: #33b4c2">Oraș:</h1>
      <select type="checkbox" ame="city" id="city" multiple style="align-content: center; ;color: #150e0e">

        <option type="checkbox" id="checkbox" multiple="multiple" value="g">Abrud</option>
        <option value="">Adjud</option>
        <option value="">Aleșd</option>
        <option value="">Alba Iulia</option>
        <option value="">Alexandria</option>
        <option value="">Arad</option>
        <option value="">Azuga</option>
        <option value="Bacău">Bacău</option>
        <option value="Maramures">Baia Mare</option>
        <option value="Maramures">Baia Sprie</option>
        <option value="">Băile Tușnad</option>
        <option value="">Bârlad</option>
        <option value="">Beclean</option>
        <option value="">Bicaz</option>
        <option value="">Bistrița</option>
        <option value="">Blaj</option>
        <option value="">Brad</option>
        <option value="">Brăila</option>
        <option value="">Brașov</option>
        <option value="">Budești</option>
        <option value="">Buzău</option>
        <option value="">Călărași</option>
        <option value="">Câmpia Turzii</option>
        <option value="">Câmpina</option>
        <option value="">Caaracal</option>
        <option value="">Carei</option>
        <option value="">Cavnic</option>
        <option value="Cluj">Cluj Napoca</option>
        <option value="">Dej</option>
        <option value="">Deva</option>
        <option value="">Drobeta-Turnu Severin</option>
        <option value="">Eforie</option>
        <option value="">Făgăraș</option>
        <option value="">Făget</option>
        <option value="">Fălticeni</option>
        <option value="">Galați</option>
        <option value="">Gherla</option>
        <option value="">Giurgiu</option>
        <option value="">Hațeg</option>
        <option value="">Hunedoara</option>
        <option value="">Iași</option>
        <option value="Salaj">Jibou</option>
        <option value="">Marghita</option>
        <option value="">Mediaș</option>
        <option value="">Miercurea Ciuc</option>
        <option value="">Negrești</option>
        <option value="">Ocna Sibiului</option>
        <option value="">Oradea</option>
        <option value="">Pașcani</option>
        <option value="">Piatra Neamț</option>
        <option value="">Predeal</option>
        <option value="">Rădăuți</option>
        <option value="">Râmnicu Vâlcea</option>
        <option value="Satu Mare">Satu Mare</option>
        <option value="">Sighișoara</option>
        <option value="">Târgu Mureș</option>
        <option value="">Timișoara</option>
      </select>
    </form>
    <br>
    <form action="/action_page.php">


      <h1 style="color: #33b4c2">Departamente:</h1>
      <select name="city" id="city1" multiple style="align-content: center; color: #150e0e">
        <option value="">Achiziții</option>
        <option value="">Administrativ/Logistică</option>
        <option value="">Agricultură</option>
        <option value="">Alimentație</option>
        <option value="">Personal calificat</option>
        <option value="">Petrol/Gaze</option>
        <option value="">Producție</option>
        <option value="">IT Software</option>
        <option value="">Juridic</option>
        <option value="">Jurnalism</option>
        <option value="">Management</option>
        <option value="">Marketing</option>
        <option value="">Medicină alternativă</option>
        <option value="">Medicină umană</option>
        <option value="">Medicină veterinară</option>
      </select>
    </form>
    <br>
    <form action="/action_page.php">
      <h1 style="color: #33b4c2">Tipul jobului:</h1>
      <select name="city" id="city3" multiple style="align-content: center; color: #150e0e">

        <option value="">Full time</option>
        <option value="">Part time</option>
        <option value="">Intership/Voluntariat</option>
        <option value="">Proiect/Sezonier</option>
      </select>
    </form>
    <br>
    <form action="/action_page.php">


      <h1 style="color: #33b4c2">Nivel studii:</h1>
      <select name="city" id="city4" multiple style="align-content: center; ;color: #150e0e">

        <option value="">Necalificat</option>
        <option value="">Calificat</option>
        <option value="">Student</option>
        <option value="">Absolvent</option>
      </select>
    </form>
    <br>
    <form action="/action_page.php">


      <h1 style="color: #33b4c2">Nivel cariera:</h1>
      <select name="city" id="city5" multiple style="align-content: center; ;color: #150e0e">

        <option value="">Fără experiență</option>
        <option value="">Entry-Level(<2ani)</option>
        <option value="">Mid-Level(2-5 ani)</option>
        <option value="">Senior Level(>5 ani)</option>
        <option value="">Manager/Executiv</option>






      </select>
      <br><br><br><br>
      <a href="#" class="button3"  style=" background-color: #f3ccd5; opacity: 100%;font-size: 25px;border-radius: 20px;color:#33b4c2;padding-left:5px;padding-right:5px;padding-bottom: 5px;padding-top: 5px"> Aplică filtre </a>
    </form>


  </div>

  <div class="column large-9 cell small-8"
       style="float:left;background:rgb(255,255,255);border-radius: 25px;text-align:center;
          border-radius: 25px; ;background-size: cover;background-attachment: fixed"  >
    <div class="large-1 cell" style="border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">
<!--      <br>-->
<!--      <h1 style="text-align: left;left:203px; top:20px;font-size: 20px;color: #33b4c2">&nbsp;&nbsp;22 Mart 2023</h1>-->
<!--      <img align="left" class="float-left" class="button"  src="images/poza_frima.PNG" style="width:90px; height:150px; align:left ;border-radius:25px;">-->
<!--      <a href="anunt_candidat.html"  style=" float: left;color:#ffb6c1;  text-align: left;font-size: 30px;">Titlu anunț</a>-->
<!--      <br><br>-->
<!--      <p style="text-align: left;right:200px;">&nbsp;&nbsp;Numele firmei</p>-->
<!--      <p style="text-align: left">&nbsp;&nbsp;Locația</p>-->
<!--      <a href="#" class="button3"  style="justify-content: left;  background-color: #f3ccd5; opacity: 100%;font-size: 25px;border-radius: 20px;color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Aplică acum </a>-->
<!--      <br><br>-->
      <div id="job-listings">
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
        // Output each row as a <div> element
        while ($row = $result->fetch_assoc()) {
        echo '<div class="job-listing">';
          echo '<h2>Job ' . $row["id"] . '</h2>';
          echo '<div class="firm-name">Firm Name: ' . $row["nume_firma"] . '</div>';
          echo '<div class="job-title">Job Title: ' . $row["titlu"] . '</div>';
          echo '<div class="available-jobs">Number of Available Jobs: ' . $row["nr_joburi_disponibile"] . '</div>';
          echo '<div class="driver-license">Driver\'s License: ' . $row["carnet_de_conducere"] . '</div>';
          echo '<div class="job-type">Job Type: ' . $row["tip_job"] . '</div>';
          echo '<div class="career-level">Career Level: ' . $row["nivel_cariera"] . '</div>';
          echo '<div class="foreign-languages">Foreign Languages: ' . $row["limbi_straine"] . '</div>';
          echo '<div class="location">Location: ' . $row["locatie"] . '</div>';
          echo '<div class="description">Description: ' . $row["descriere"] . '</div>';
          echo '</div>';
        }
        } else {
        echo "No job listings found.";
        }

        // Close the database connection
        $conn->close();
        ?>
      </div>
    </div>
    <br>
    <div class="large-1 cell" style="border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">
      <br>
<!--      <h1 style="text-align: left;left:203px; top:20px;font-size: 20px;color: #33b4c2">&nbsp;&nbsp;22 Mart 2023</h1>-->
<!--      <img align="left" class="float-left" class="button"  src="images/poza_frima.PNG" style="width:90px; height:150px; align:left ;border-radius:25px;">-->
<!--      <a href="anunt_candidat.html"  style=" float: left;color:#ffb6c1;  text-align: left;font-size: 30px;">Titlu anunț</a>-->
<!--      <br><br>-->
<!--      <p style="text-align: left;right:200px;">&nbsp;&nbsp;Numele firmei</p>-->
<!--      <p style="text-align: left">&nbsp;&nbsp;Locația</p>-->
<!--      <a href="#" class="button3"  style="justify-content: left;  background-color: #f3ccd5; opacity: 100%;font-size: 25px;border-radius: 20px;color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Aplică acum </a>      <br><br>-->




    </div>
    <br>
    <div class="large-1 cell" style="border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">
      <br>
      <h1 style="text-align: left;left:203px; top:20px;font-size: 20px;color: #33b4c2">&nbsp;&nbsp;22 Mart 2023</h1>
      <img align="left" class="float-left" class="button"  src="images/poza_frima.PNG" style="width:90px; height:150px; align:left ;border-radius:25px;">
      <a href="anunt_candidat.html"  style=" float: left;color:#ffb6c1;  text-align: left;font-size: 30px;">Titlu anunț</a>
      <br><br>
      <p style="text-align: left;right:200px;">&nbsp;&nbsp;Numele firmei</p>
      <p style="text-align: left">&nbsp;&nbsp;Locația</p>
      <a href="#" class="button3"  style="justify-content: left;  background-color: #f3ccd5; opacity: 100%;font-size: 25px;border-radius: 20px;color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Aplică acum </a>      <br><br>




    </div>
    <br>
    <div class="large-1 cell" style="border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">
      <br>
      <h1 style="text-align: left;left:203px; top:20px;font-size: 20px;color: #33b4c2">&nbsp;&nbsp;22 Mart 2023</h1>
      <img align="left" class="float-left" class="button"  src="images/poza_frima.PNG" style="width:90px; height:150px; align:left ;border-radius:25px;">
      <a href="anunt_candidat.html"  style=" float: left;color:#ffb6c1;  text-align: left;font-size: 30px;">Titlu anunț</a>
      <br><br>
      <p style="text-align: left;right:200px;">&nbsp;&nbsp;Numele firmei</p>
      <p style="text-align: left">&nbsp;&nbsp;Locația</p>
      <a href="#" class="button3"  style="justify-content: left;  background-color: #f3ccd5; opacity: 100%;font-size: 25px;border-radius: 20px;color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Aplică acum </a>      <br><br>




    </div>
    <br>
    <div class="large-1 cell" style=";border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">
      <br>
      <h1 style="text-align: left;left:203px; top:20px;font-size: 20px;color: #33b4c2">&nbsp;&nbsp;22 Mart 2023</h1>
      <img align="left" class="float-left" class="button"  src="images/poza_frima.PNG" style="width:90px; height:150px; align:left ;border-radius:25px;">

      <a href="anunt_candidat.html"  style=" float: left;color:#ffb6c1;  text-align: left;font-size: 30px;">Titlu anunț</a>
      <br><br>
      <p style="text-align: left;right:200px;">&nbsp;&nbsp;Numele firmei</p>
      <p style="text-align: left">&nbsp;&nbsp;Locația</p>
      <a href="#" class="button3"  style="justify-content: left;  background-color: #f3ccd5; opacity: 100%;font-size: 25px;border-radius: 20px;color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Aplică acum </a>      <br><br>




    </div>
    <br>





    <div class="large-1 cell" style="border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">
      <br>
      <h1 style="text-align: left;left:203px; top:20px;font-size: 20px;color: #33b4c2">&nbsp;&nbsp;22 Mart 2023</h1>
      <img align="left" class="float-left" class="button"  src="images/poza_frima.PNG" style="width:90px; height:150px; align:left ;border-radius:25px;">
      <a href="anunt_candidat.html"  style=" float: left;color:#ffb6c1;  text-align: left;font-size: 30px;">Titlu anunț</a>
      <br><br>
      <p style="text-align: left;right:200px;">&nbsp;&nbsp;Numele firmei</p>
      <p style="text-align: left">&nbsp;&nbsp;Locația</p>
      <a href="#" class="button3"  style=" background-color: #f3ccd5; opacity: 100%;font-size: 25px;border-radius: 20px;color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Aplică acum </a>
      <br><br>



    </div>
    <br><br>




  </div>

</div>
<nav aria-label="Pagination">
  <ul class="pagination text-center">
    <li class="pagination-previous disabled">Previous</li>
    <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
    <li><a href="#" aria-label="Page 2">2</a></li>
    <li><a href="#" aria-label="Page 3">3</a></li>
    <li><a href="#" aria-label="Page 4">4</a></li>
    <li class="ellipsis"></li>
    <li><a href="#" aria-label="Page 12">12</a></li>
    <li><a href="#" aria-label="Page 13">13</a></li>
    <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
  </ul>
</nav>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>

</body>
</html>