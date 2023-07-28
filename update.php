<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editare</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
    <link rel="stylesheet" href="css/app.css">  <link rel="stylesheet" href="css/foundation.css">

</head>

<body>
<div class="grid-x grid-padding-x" >
    <div class="columns small-9 large-10"><a href="paginaPrincipala.php"> <img src="/images/logoSite2.jfif"> </a></div>
    <div class="columns small-3 large-2" style="text-align: center; ">

        <ul class="dropdown menu " data-dropdown-menu>
            <li>
                <a   style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;margin-top: 10px;"href="#">Nume admin</a>
                <ul class="menu">
                    <!--          <li><a href="pagina_anunturi_admin.html">Lista anunturi</a></li>-->
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
<br><br>


</br>
<br><br><br><br>




<?php
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"datepersoane");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

//$id = $_POST['id'];

    $sql = "SELECT * FROM jobs where id='$id' ";
//$result= mysqli_query($db,$sql);
    $result = mysqli_query($db, $sql);

    $row = mysqli_fetch_array($result);
    if (!$row)
        die('Invalid querry:' . mysqli_error($db));
    $nr = $result->num_rows;

    if ($nr == 1) {
        $myrow = $row;

        echo "<form method=\"post\" action=\"update.php?id=" . $id . "\">";
        echo "<div class=\"row\">";
        echo "<div class=\"large-8 medium-8 small-12 columns\">";
//        echo "Id: <input type=\"hidden\" name=\"job_id\" value=". $myrow["id"]. ">";
        echo "Titlu:  <input type=\"text\" name=\"titlu\" value=" . $myrow["titlu"] . " >";
        echo "Locatie: <input type=\"text\" name=\"locatie\" value=" . $myrow["locatie"] . ">";
        echo "Descriere:  <input type=\"text\" name=\"descriere\" value=" . $myrow["descriere"] . " >";
        echo "Tip job: <input type=\"text\" name=\"tip_job\" value=" . $myrow["tip_job"] . ">";
        echo "</div>";
        echo "<div class=\"large-8 medium-8 small-8 columns\">";
        echo "<button style='background-color: lightpink; color: black' type=\"submit\" class=\"success button\" name=\"btnSubmit\">Modifica</button>";
        echo "</div>";
        echo "</div>";

    } else {
        echo "</br>Nu s-a gasit nici o inregistrare care sa corespunda acestui id!";
    }

    if (isset($_POST["btnSubmit"])) {
        $titlu = $_POST['titlu'];
        $locatie = $_POST['locatie'];
        $descriere = $_POST['descriere'];
        $tip_job = $_POST['tip_job'];

        $sql_upd = "UPDATE jobs SET titlu='$titlu', locatie ='$locatie',descriere='$descriere',tip_job='$tip_job' where id=$id;";

        echo "</br>";
        $result_upd = mysqli_query($db, $sql_upd);
        if (!$result_upd)
            die('Invalid querry:' . mysqli_error($db));
//        else
//            echo "Inregistrarea a fost updatata.";
    }

}
?>
<a href="read.php" style="background-color: cornflowerblue" class="button" >Inapoi</a>

</br>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>
