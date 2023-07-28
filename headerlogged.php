<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title...</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="../../../Users/Andreea's%20PC/Desktop/Facultate/dezvoltareWeb/curs9.1/css/app.css">
</head>
<body>
<?php
require_once("connection.php");
$page=basename($_SERVER['PHP_SELF']);
$IdUser=$_SESSION["id"];
$querry="SELECT pagini.Meniu, pagini.nume_meniu, pagini.pagina FROM pagini INNER JOIN drepturi ON drepturi.IdPage=pagini.Id WHERE drepturi.IdUser='$IdUser'";

$sql1 = mysqli_query($db,$querry);


$rows= mysqli_num_rows($sql1);



if ($rows > 0) {
    echo "<ul>";



    /* Daca sw ramane 0 inseamna ca userul nu are drepturi pe pagina respectiv daca $myrow["Meniu"] e 1 inseamna ca pagina respectiva trebuie sa apara in meniu, daca e 0 inseamna ca are drepturi dar nu trebuie sa apara*/

    $sw=0;
    echo ' <div class="grid-x grid-padding-x">
    <div class="columns small-3 large-10"><a href="paginaPrincipala.php"> <img src="/images/logoSite2.jfif"> </a></div> <div class="columns small-9 large-2" style="text-align: left; ">
<ul class="dropdown menu " data-dropdown-menu>
            <li>
                <a style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;margin-top: 10px;"
                   href="#"> '.$_SESSION["name"].'</a>
                <ul class="menu">';
    while ($myrow=mysqli_fetch_array($sql1,MYSQLI_ASSOC))
    {
        if ($myrow["pagina"]==$page)
        { $sw=1;}
        if ($myrow["Meniu"]==1)
        {
            echo "<li><a href='".$myrow["pagina"]."'>".$myrow["nume_meniu"]."</a></li>";




        }

    }echo'</li>  </ul> </div></div></div>';
    echo "</ul>";
}

if ($sw==0)
{
    redirect("logout.php");
}


?>

        
        