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
    $db=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($db,"datepersoane");
    $descriere=$abilitati=$limbi_cunoscute= "";
    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];


        $sql = "SELECT * FROM users where id='$user_id' ";
    }
    $mode="";
    if (isset($_POST['mode']))
    {
        $mode = $_POST['mode'];
    }

    if ($mode == "adaugare") {

        if ((empty($_POST["descriere"]))&&(empty($_POST["abilitati"]))&&(empty($_POST["limbi_cunoscute"]))) {
            $titluErr = "Este necesar sa introduceti datele cerute!";
            echo $titluErr;
        } else {


            $descriere = $_POST["descriere"];
            $abilitati = $_POST["abilitati"];
            $limbi_cunoscute = $_POST["limbi_cunoscute"];



            $sql="INSERT INTO descriere_candidat(id_candidat,descriere,abilitati,limbi_cunoscute) VALUES ('$user_id','$descriere','$abilitati','$limbi_cunoscute')";
           //redirect("candidat_upload_exp.php");
            echo $sql;

            //  echo $sql;
            echo "</br>";

            $results= mysqli_query($db,$sql);
            if (!$results)
                die('Invalid querry:' .mysqli_error($db));
            else
            {
                echo "Inregistrarea a fost adaugata.</br>";
            }
        }}
    ?>


</br>
<!--<script>-->
<!--    document.getElementById('adaugare').addEventListener('submit', function(event) {-->
<!--        event.preventDefault(); // Prevent the default form submission-->
<!---->
<!--        // Get the form values-->
<!--        var descriere = document.getElementById('descriere').value;-->
<!--        var abilitati = document.getElementById('abilitati').value;-->
<!--        var limbi_cunoscute = document.getElementById('limbi_cunoscute').value;-->
<!---->
<!--        // Create an AJAX request to submit the form data-->
<!--        var xhr = new XMLHttpRequest();-->
<!--        xhr.onreadystatechange = function() {-->
<!--            if (xhr.readyState === XMLHttpRequest.DONE) {-->
<!--                if (xhr.status === 200) {-->
<!--                    // Print the response on the page-->
<!--                    document.getElementById('form-container').innerHTML = xhr.responseText;-->
<!--                } else {-->
<!--                    // Handle error-->
<!--                }-->
<!--            }-->
<!--        };-->
<!---->
<!--        xhr.open('POST', 'add_descriere_candidat.php', true);-->
<!--        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');-->
<!--        xhr.send('descriere=' + encodeURIComponent(descriere) +-->
<!--            '&abilitati=' + encodeURIComponent(abilitati) +-->
<!--            '&limbi_cunoscute=' + encodeURIComponent(limbi_cunoscute));-->
<!--    });-->
<!--</script>-->
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>


</body>
</html>