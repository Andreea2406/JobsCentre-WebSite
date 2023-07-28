<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
$n=$_SESSION["name"];
$email=$_SESSION["username"];

$id = $_SESSION['id'];

?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>JobsCentre</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">



</head>
<body>




<div class="grid-x grid-padding-x" style=" ;background-size: cover;background-attachment: fixed">
    <div class="columns small-12 large-12"style=" ;background-size: cover;background-attachment: fixed">

        <h1 style="color: #33b4c2;font-size: 200%;font-weight:bold;text-align: center">Ajute-ne sa te cunoastem mai bine!</h1><br><br>
    </div>


</div>

<div class="grid-x grid-padding-x"  style="  background-image:url('images/human.jpg');background-size: cover;background-attachment: fixed">
    <br><br><br><br>
    <div class="small-12 large-2 cell"
         style="background-color: rgba(255,255,255,0.73) ;background-size: cover;background-attachment: fixed;border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">
        <h1 style="text-align:center; color: #33b4c2;font-weight:bold">Meniu</h1>

        <?php require_once("headerlogged_.php");?>
    </div>
    <div class="small-12 large-2 cell">    </div>

    <div class="small-12 large-4 cell"
         style="background-color: rgba(255,255,255,0.73) ;opacity:90%; border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">
        <h1 style="text-align:left; color: #33b4c2;padding-left:70px;font-weight:bold">Despre mine</h1>
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
            $descriere = $_POST['descriere'];
            $abilitati = $_POST['abilitati'];
            $limbi_cunoscute = $_POST['limbi_cunoscute'];
            $experienta = $_POST['experienta'];
            $studii = $_POST['studii'];


            $id_candidat="SELECT id_client FROM candidati WHERE nume='$n' ";

            $q=$conn->query($id_candidat);
            $r = $q->fetch_assoc();
            $id_candidat_extras=$r['id_client'];

            // Insert the description into the database
            $sql = "INSERT INTO descriere_candidat (id_candidat,nume,descriere,abilitati,limbi_cunoscute,experienta,studii) VALUES ('$id_candidat_extras','$n','$descriere','$abilitati','$limbi_cunoscute','$experienta','$studii')";

            if ($conn->query($sql) === TRUE) {

                //echo "Description saved successfully.";
//              $row = $result->fetch_assoc();
//              $nume = $row['nume'];
//              $ocupatie = $row['ocupatie'];
//              $istorie = $row['istorie'];
//              $cautam = $row['cautam'];
//              $oferim = $row['oferim'];

                // Display the description
                //<h1 style="text-align:left; color: #33b4c2;padding-left:70px;font-weight:bold">Despre noi</h1>

                echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Descriere:</h1> " . $descriere . "<br>";
                echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Abilitati</h1>" . $abilitati . "<br>";
                echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Limbi cunoscute </h1>" . $limbi_cunoscute . "<br>";
                echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Experienta </h1> " . $experienta . "<br>";
                echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Studii </h1> " . $studii . "<br><br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Retrieve the user's description
        $sql = "SELECT * FROM descriere_candidat WHERE nume='$n'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Description exists
            $row = $result->fetch_assoc();
            $nume = $row['nume'];
            $descriere = $row['descriere'];
            $abilitati = $row['abilitati'];
            $limbi_cunoscute = $row['limbi_cunoscute'];
            $experienta = $row['experienta'];
            $studii = $row['studii'];

            echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Descriere:</h1> " . $descriere . "<br>";
            echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Abilitati</h1>" . $abilitati . "<br>";
            echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Limbi cunoscute </h1>" . $limbi_cunoscute . "<br>";
            echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Experienta </h1> " . $experienta . "<br>";
            echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Studii </h1> " . $studii . "<br><br>";


        } else {
            // Description does not exist
            ?>
            <!--          <form action="--><?php //echo $_SERVER['PHP_SELF']; ?><!--" method="POST">-->
            <form action="CVul_meu.php" method="POST">
                <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                    Descriere: <input type="text" name="descriere"  id="descriere">
                </div>
                <p class="hide"><input type="text" name="mode" value="adaugare" ></p>

                <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                    Abilitati: <input type="text" name="abilitati"  id="abilitati">
                </div>
                <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                    Limbi cunoscute : <input type="text" name="limbi_cunoscute"  id="limbi_cunoscute">
                </div>
                <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                    Experienta : <input type="text" name="experienta"  id="experienta">
                </div>
                <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                    Studii : <input type="text" name="studii"  id="studii">
                </div>

                <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
                    <button  type="submit" class="success button" name="submit"style="background-color: #fdb9ff">Adauga</button>
                </div>
            </form>
            <?php
        }


        ?>






    </div>  <div class="small-12 large-2 cell">    </div>
    <br><br><br>
    <div class="small-12 large-2 cell"
         style=" background-color: rgba(255,255,255,0.73) ;;background-size: cover;background-attachment: fixed;border-color: #33b4c2;border-width:2px;border-style:solid;border-radius: 50px;">

        <br>
        <h1 style="color: #33b4c2"> <?php echo "$n"?></h1>
        <p><img src="images/mail.png" style="height: 25px;width: 25px;"></img>&nbsp;<?php echo "$email"?></p>
        <!--        <p><img src="images/smartphone.png" style="height: 25px;width: 25px;"></img>&nbsp;numar telefon</p>-->
        <br><br>
        <!--        <p><a data-open="exampleModal7"class="button3"  style="float: right; background-color: #f3ccd5;margin-right: 10px; opacity: 100%;font-size: 25px;border-radius: 20px;color:#33b4c2;padding-left: 5px;padding-right: 15px;padding-bottom: 5px;padding-top: 5px"> Editeaza</a></p>-->
        <?php
        $db=mysqli_connect("127.0.0.1","root","");
        mysqli_select_db($db,"datepersoane");
        $oras = $varsta=$telefon = "";
        $sql = "SELECT * FROM candidati WHERE nume='$n'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            // Description exists
            $row = $result->fetch_assoc();
            $oras = $row['oras'];
            $varsta = $row['varsta'];

            $telefon = $row['telefon'];

            echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Oras:</h1> " . $oras . "<br>";
            echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Varsta</h1>" . $varsta . "<br>";
            echo "<h1 style='text-align:left; color: #33b4c2;font-weight:bold'>Telefon </h1>" . $telefon . "<br>";
        }

        ?>



        <br><br>


    </div>



<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>