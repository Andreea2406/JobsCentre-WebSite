<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugare</title>
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
        $user_id = $_GET['id'];


        $sql = "SELECT * FROM users where id='$user_id' ";
    }
    if (isset($_GET['id_companie'])) {
        $id_companie = $_GET['id_companie'];

//$id = $_POST['id'];

        $sql = "SELECT * FROM companii where id_companie='$id_companie' ";
//$result= mysqli_query($db,$sql);
        $result = mysqli_query($db, $sql);

        $row = mysqli_fetch_array($result);
        if (!$row)
            die('Invalid querry:' . mysqli_error($db));
        $nr = $result->num_rows;

        if ($nr == 1) {
            $myrow = $row;

            echo "<form method=\"post\" action=\"companie_edit.php?id_companie=" . $id_companie . "\">";
            echo "<div class=\"row\">";
            echo "<div class=\"large-8 medium-8 small-12 columns\">";
            //        echo "Id: <input type=\"hidden\" name=\"job_id\" value=". $myrow["id"]. ">";
            echo "Nume:  <input type=\"text\" name=\"nume\" value=" . $myrow["nume"] . " >";
            echo "Locatie: <input type=\"text\" name=\"locatie\" value=" . $myrow["locatie"] . ">";
            echo "Email: <input type=\"text\" name=\"email\" value=" . $myrow["email"] . ">";

            echo "Parola: <input type=\"text\" name=\"parola\" value=" . $myrow["parola"] . ">";

            echo "</div>";
            echo "<div class=\"large-8 medium-8 small-8 columns\">";
            echo "<button  type=\"submit\" class=\"success button\" name=\"btnSubmit\">Modifica</button>";
            echo "</div>";
            echo "</div>";

        } else {
            echo "</br>Nu s-a gasit nici o inregistrare care sa corespunda acestui id!";
        }

        if (isset($_POST["btnSubmit"])) {

            $nume = $_POST['nume'];
            $locatie = $_POST['locatie'];

            $email = $_POST['email'];

            $parola = $_POST['parola'];

            $sql_upd = "UPDATE companii SET nume='$nume', locatie ='$locatie',email='$email',parola='$parola' where id_companie='$id_companie';";

            echo "</br>";
            $result_upd = mysqli_query($db, $sql_upd);
//$sql_upd2="UPDATE users SET nume='$nume',username='$email', password='$parola' ";
//    $result_upd2 = mysqli_query($db, $sql_upd2);
            if (!$result_upd)
                die('Invalid querry:' . mysqli_error($db));
            else
            { echo "Inregistrarea a fost updatata.";


            }
        }

    }
    ?>

</br>
<a href="setari_companie.php" class="button">Inapoi</a>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>
