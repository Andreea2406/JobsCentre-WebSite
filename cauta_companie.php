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

if ((empty($_POST["numar"]))) {
    $numeErr = "Este necesar sa introduceti un nume.";
    echo $numeErr;
}

if (!(empty($_POST["nume"])))
{
    $nume = $_POST["nume"];
    $sql="SELECT * FROM companii where nume='$nume' ";
    //echo  $sql;
    $SW=1;
}
//if ((!empty($_POST["titlu"])))
//{
//    $titlu = $_POST["titlu"];
//    $sql="SELECT * FROM datepersoane where titlu='$titlu' ";
//    $SW=1;
//}


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
            echo "  <thead><tr><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Nume</b></th><th width=\"150\"><b>Locatie</b></th><th width=\"150\"><b>Email</b></th>><th><b>Parola</b></th></th></tr></thead> <tbody>";
            while ($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {echo "<tr><td>";
                echo $myrow["id_companie"];
                echo "</td><td>";
                echo $myrow["nume"];
                echo "</td><td>";
                echo $myrow["locatie"]; echo "</td><td>";
                echo $myrow["email"]; echo "</td><td>";
                echo $myrow["parola"]; echo "</td><td>";
                echo "</td></tr>";  }
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
<a href="read_companii.php" class="button">Inapoi</a>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>