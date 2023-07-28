

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
<!--<div class="grid-x grid-padding-x">-->
<!--    <div class="columns small-9 large-10"><a href="paginaPrincipala.php"> <img src="/images/logoSite2.jfif"> </a></div>-->
<!--    <div class="columns small-3 large-2" style="text-align: center; ">-->
<!---->
<!--        <ul class="dropdown menu " data-dropdown-menu>-->
<!--            <li>-->
<!--                <a   style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;margin-top: 10px;"href="#">Nume admin</a>-->
<!--                <ul class="menu">-->
<!--                    <li><a href="read.php">Lista anunturi</a></li>-->
<!--                    <li><a href="read_candidati.php">Lista candidati</a></li>-->
<!--                    <li><a href="read_companii.php">Lista companii</a></li>-->
<!--                    <li><a href="mesaje_admin.php">Mesaje utilizatori</a></li>-->
<!---->
<!--                    <li><a href="paginaPrincipala.php">Deconecteaza-te</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
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
header("Location: index.php");

if (isset($_SESSION["id"]) && $_SESSION["user_password"] != "" && $_SESSION["user_email"] != "" && $_SESSION["user_password_repeat"] != "") {

    redirect("dashboard.php");

}
include 'header.php';
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"datepersoane");
$nume =$prenume=$oras= $email=$varsta=$telefon=$parola = "";

$mode="";
$mode1="";

if (isset($_POST['mode']))
{
    $mode = $_POST['mode'];
}

if ($mode == "adaugare") {

    if ((empty($_POST["nume"]))&&(empty($_POST["prenume"]))&&(empty($_POST["oras"]))&&(empty($_POST["email"]))&&(empty($_POST["varsta"]))&&(empty($_POST["telefon"]))&&(empty($_POST["parola"]))) {
        $numeErr = "Este necesar sa introduceti datele cerute!";
        echo $numeErr;
    } else {
        $nume = $_POST["nume"];
        $prenume = $_POST["prenume"];
        $oras = $_POST["oras"];
        $email = $_POST["email"];
        $varsta= $_POST["varsta"];
        $telefon= $_POST["telefon"];
        $parola=$_POST["parola"];



        $sql="INSERT INTO candidati(nume,prenume,oras,email,varsta,telefon,parola) VALUES ('$nume','$prenume','$oras','$email','$varsta','$telefon','$parola')";
        echo $sql;

        //  echo $sql;
        echo "</br>";

        $results= mysqli_query($db,$sql);
        if (!$results) {
            die('Invalid querry:' .mysqli_error($db));}
        else{
//        {  $nume = "candidat"; $type = "2";
//            $sql1="INSERT INTO users(nume,username,password,type) VALUES('$nume','$email','$parola','$type')";
//            $results1= mysqli_query($db,$sql1);
            echo "Inregistrarea a fost adaugata.</br>";
           // if ($mode == "register") {
           // $nume=$_POST["nume"];
            $username = $_POST["nume"];
           // $email = $_POST["email"];
            $parola = $_POST["parola"];
            $repass = $_POST["re_pass"];

            $result = $db->query("SELECT * FROM users WHERE users.nume = '$username'");
            $result1 = $db->query("SELECT * FROM users WHERE users.username = '$email'");

            if (!isset($_POST['agree-term'])) {

                echo "Mai intai trebuie sa accepti termenii si conditiile";

            } else if ($result->num_rows != 0) {
                echo "You already have an account associate with this email";
            } else if ($result1->num_rows != 0) {
                echo "Exista deja un cont cu acest nume";
            } else if (empty($username)) {
                echo "Username is required";
            } else if (empty($email)) {
                echo "Email is required";
            } else if (empty($parola)) {
                echo "Password is required";
            } else if (strlen($parola) < 4) {
                echo "Parola trebuie sa contina cel putin 4 caractere";
            } else {
                if ($parola == $repass) {
                    $query = "INSERT INTO users (nume, username,password,type) VALUES ('$username','$email','$parola','2')";
                    mysqli_query($db, $query);
                    print $username;
                    $numar = "INSERT INTO drepturi(IdPage,IdUser) SELECT '3',users.Id FROM users WHERE username='$email'";
                    mysqli_query($db, $numar);
                    $numar1 = "INSERT INTO drepturi(IdPage,IdUser) SELECT '4',users.Id FROM users WHERE username='$email'";
                    mysqli_query($db, $numar1);
                    $numar2 = "INSERT INTO drepturi(IdPage,IdUser) SELECT '5',users.Id FROM users WHERE username='$email'";
                    mysqli_query($db, $numar2);
                    $numar3 = "INSERT INTO drepturi(IdPage,IdUser) SELECT '9',users.Id FROM users WHERE username='$email'";
                    mysqli_query($db, $numar3);
                    $numar4 = "INSERT INTO drepturi(IdPage,IdUser) SELECT '10',users.Id FROM users WHERE username='$email'";
                    mysqli_query($db, $numar4);
                    $numar5 = "INSERT INTO drepturi(IdPage,IdUser) SELECT '11',users.Id FROM users WHERE username='$email'";
                    mysqli_query($db, $numar5);
                    $numar6 = "INSERT INTO drepturi(IdPage,IdUser) SELECT '18',users.Id FROM users WHERE username='$email'";
                    mysqli_query($db, $numar6);

                   // redirect("prima_pag_candidat.php");
                    //$_SESSION['message'] = 'Contul a fost creat cu succes, acum te poti loga';

                } else {


                    echo "Ati introdus reintrodus parola gresit!";


                }
            }

        }}
    //}
//    if ($mode == "adaugare") {


//    }






}
?>


</script>
</br>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>