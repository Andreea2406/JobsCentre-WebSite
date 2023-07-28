<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forme</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

</br>
</br>
</br>
<?php

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"datepersoane");
$SW=0;

if ((empty($_POST["nume"]))&&(empty($_POST["prenume"])) ) {
    $numeErr = "Este necesar sa introduceti u nume nsau prenume ";


    echo $numeErr;
}

if ((empty($_POST["nume"]))&&(!empty($_POST["prenume"])))
{     $nume = $_POST["nume"];
    //$prenume = $_POST["prenume"];

    //$email = $_POST["email"];
    $sql="SELECT * FROM candidati where nume='$nume' ";
    $SW=1;
}
if ((!empty($_POST["nume"]))&&(empty($_POST["prenume"])))
{
    $prenume = $_POST["prenume"];
    $sql="SELECT * FROM candidati where prenume='$prenume' ";
    $SW=1;
}
if ((!empty($_POST["nume"]))&&(!empty($_POST["prenume"])))
{
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $sql="SELECT * FROM candidati where prenume='$prenume' and nume='$nume'; ";
    $SW=1;
//    echo $sql;
}

if ($SW==1)
{
    $result= mysqli_query($db,$sql);
    $nr=$result->num_rows;

    if (!$result)
        die('Invalid querry:' .mysqli_error($db));

    if ($nr>0)
    {
        {
            echo "<table class=\"unstriped\">";
            echo "  <thead><tr><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Nume</b></th><th width=\"150\"><b>Preume</b></th><th width=\"150\"><b>Oras</b></th><th width=\"150\"><b>Email</b></th><th width=\"150\"><b>Varsta</b></th><th><b>Telefon</b></th></th></tr></thead> <tbody>";
            while ($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {echo "<tr><td>";
                echo $myrow["id_client"];echo "</td><td>";
                echo $myrow["nume"]; echo "</td><td>";
                echo $myrow["prenume"]; echo "</td><td>";
                echo $myrow["oras"]; echo "</td><td>";
                echo $myrow["email"]; echo "</td><td>";
                echo $myrow["varsta"]; echo "</td><td>";
                echo $myrow["telefon"]; echo "</td><td>";

               }
            echo "</tbody></table>";
        }
    }
    else
    {
        echo "</br>Nu s-a gasit nici o inregistrare care sa corespunda cautarii!";
    }
}
?>
</br>
<a href="read_candidati.php" class="button">Inapoi</a>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>