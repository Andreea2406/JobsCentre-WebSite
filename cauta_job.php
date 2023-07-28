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
    $sql="SELECT * FROM jobs where titlu='$titlu' ";
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
            echo "  <thead><tr><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Titlu</b></th><th width=\"150\"><b>Locatie</b></th><th width=\"150\"><b>Descriere</b></th><th><b>Tip_job</b></th></th></tr></thead> <tbody>";
            while ($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {echo "<tr><td>";
                echo $myrow["id"];
                echo "</td><td>";
                echo $myrow["titlu"];
                echo "</td><td>";
                echo $myrow["locatie"]; echo "</td><td>";
                echo $myrow["descriere"]; echo "</td><td>";
                echo $myrow["tip_job"]; echo "</td><td>";
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
<a href="read.php" style="background-color: cornflowerblue" class="button" >Inapoi</a>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>