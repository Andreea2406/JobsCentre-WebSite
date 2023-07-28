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

if ((empty($_POST["titlu"]))) {
    $titluErr = "Este necesar sa introduceti titlu.";
    echo $titluErr;
}

if (!(empty($_POST["titlu"])))
{
    $titlu = $_POST["titlu"];
    $sql="SELECT * FROM add_job where titlu='$titlu' ";
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
            echo "  <thead style='background-color: #33b4c2'><tr><th  width=\"50\"><b>Id</b></th><th width=\"150\"><b>Nume firma</b></th><th width=\"150\"><b>Titlu job</b></th><th width=\"50\"><b>Joburi disponibile</b></th><th width=\"150\"><b>Carnet de conducere</b></th><th width=\"100\"><b>Tip job</b></th><th width=\"150\"><b>Nivel cariera</b></th><th width=\"150\"><b>Limbi straine</b></th><th width=\"150\"><b>Locatie</b></th><th><b>Descriere</b></th></th></tr></thead> <tbody>";
            while ($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {echo "<tr style='background-color: #f7e4e1'><td>";
                echo $myrow["id"];echo "</td><td>";
                echo $myrow["nume_firma"];echo "</td><td>";
                echo $myrow["titlu"];echo "</td><td>";
                echo $myrow["nr_joburi_disponibile"];echo "</td><td>";
                echo $myrow["carnet_de_conducere"];echo "</td><td>";
                echo $myrow["tip_job"]; echo "</td><td>";
                echo $myrow["nivel_cariera"]; echo "</td><td>";
                echo $myrow["limbi_straine"]; echo "</td><td>";
                echo $myrow["locatie"]; echo "</td><td>";
                echo $myrow["descriere"]; echo "</td><td>";
                echo "</td></tr>"; }
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
<a href="read_job_companie.php" style="background-color: cornflowerblue" class="button" >Inapoi</a>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>