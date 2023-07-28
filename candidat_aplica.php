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

</br>
<br><br><br><br>


<?php
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"datepersoane");
$nume =$prenume=$oras= $email=$varsta=$telefon=$parola = "";

$mode="";
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

        }
    }}
?>


</script>
</br>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>