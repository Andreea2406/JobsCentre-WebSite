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
                <a   style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;margin-top: 10px;"href="#">Nume companie</a>
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
    $id ="" ;
    //$sql = "DELETE FROM jobs WHERE id = $id";
    //$result =mysqli_connect("127.0.0.1","root","");
    //mysqli_select_db($result,"datepersoane");
    //if ($result) {
    //    echo 'Job posting deleted successfully';
    //} else {
    //    echo 'Error deleting job posting';
    //}
    $db=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($db,"datepersoane");

    //$id = "";
    if (empty($_POST["id"])) {
        $idErr = "Este necesar sa introduceti un id existent.";
        // echo $idErr;
    } else {
        $id = $_POST["id"];
        $result=mysqli_query($db,"DELETE FROM add_job WHERE id = $id");
//    $result= mysqli_query($db,"CALL stergere('$id')");
        if (!$result)
            die('Invalid querry:' .mysqli_error($db));
        else
        {//$sql = "DELETE FROM jobs WHERE id = $id";

            echo "   Daca exista o inregistrare cu adresa de email ".$id." , atunci aceasta a fost stearsa";
        }
    }

    $db=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($db,"datepersoane");
    $nume_frima=$titlu =$nr_joburi_disponibile=$carnet_de_conducere=$tip_job=$nivel_cariera=$limbi_straine= $locatie=$descriere = "";

    $start=15;
    $id=1;
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $start=($id);
    }

    $sqlv="SELECT * FROM add_job LIMIT $start";

    $resultv= mysqli_query($db,$sqlv);
    if (!$resultv)
        die('Invalid querry:' .mysqli_error($db));
    else
    {
        echo "<table class=\"unstriped\">";
        echo "  <thead><tr><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Nume firma</b></th><th width=\"150\"><b>Titlu job</b></th><th width=\"150\"><b>Joburi disponibile</b></th><th width=\"150\"><b>Carnet de conducere</b></th><th width=\"150\"><b>Tip job</b></th><th width=\"150\"><b>Nivel cariera</b></th><th width=\"150\"><b>Limbi straine</b></th><th width=\"150\"><b>Locatie</b></th><th><b>Descriere</b></th></th></tr></thead> <tbody>";
        while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
        {echo "<tr><td>";
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

        echo " </tbody></table>";

        $rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM add_job "));
        $total=ceil($rows);

        for($i=1;$i<=$total;$i++)
        {
            if($i==$id)
            { echo "<li class='current'>".$i."</li>";
            }
            else
            { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
        }

    }



    ?>
</br>
</br>

</br>




<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>