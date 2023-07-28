<?php


require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
echo $_SESSION["titlu"];
echo $_SESSION["continut"];

$id = $_SESSION['id'];
$nume = $_SESSION['name'];


$db = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($db, "datepersoane");
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];


    $sql = "SELECT * FROM users where id='$user_id' ";
}
if (isset($_GET['id_job'])) {
    $id_job = $_GET['id_job'];


}
$descriere=$mesaj=$data_interviu=$npdf="";


$mode="";
if (isset($_POST['mode']))
{
    $mode = $_POST['mode'];
}


if ($mode == "adaugare") {

    if ((empty($_POST["descriere"]))&&(empty($_POST["mesaj"]))&&(empty($_POST["data_interviu"]))&&(empty($_POST["npdf"]))) {
        $titluErr = "Este necesar sa introduceti datele cerute!";
        echo $titluErr;
    }
    else {
        $descriere = $_POST['descriere'];
        $mesaj = $_POST['mesaj'];
        $data_interviu= $_POST['data_interviu'];
        $npdf = $_FILES["file"]["name"];
        $fisiere_uploadate="fisiere_uploadate";


        if ($_FILES["file"]["error"] > 0) {
            echo '<script language="javascript">';
            echo 'alert("files error")';
            echo '</script>';
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        }
        else {


            echo "Fisier Uploadat: " . $_FILES["file"]["name"] . "<br />";
            echo "Tipul: " . $_FILES["file"]["type"] . "<br />";
            echo "Dimensiunea: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            echo "Fisierul temporar: " . $_FILES["file"]["tmp_name"] . "<br />";


            if (file_exists($_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " Pdf-ul exista deja! Incearca sa schimbi numele !. ";
            }
            else {
                    move_uploaded_file($_FILES["file"]["tmp_name"], $fisiere_uploadate . "/" . $_FILES["file"]["name"]);
                    $pdf = $fisiere_uploadate . "/" . $_FILES["file"]["name"];
                    ///
                // Prepare the query to retrieve the id_companie value
                $id_companie_query = "SELECT id_companie FROM toate_joburiile WHERE id = '$id_job'";

// Execute the query
                $result = mysqli_query($db, $id_companie_query);

// Check if the query was successful
                if ($result) {
                    // Fetch the result row
                    $row = mysqli_fetch_assoc($result);

                    // Retrieve the id_companie value from the fetched row
                    $id_companie = $row['id_companie'];

                    // Insert the values into the toate_joburiile table
                    $sql1 = "INSERT INTO interviuri_companie (id_job, id_candidat,descriere,mesaj,cv,data_interviu) VALUES ('$id_job','$user_id','$descriere','$mesaj','$pdf','$data_interviu')";
                    // Execute the insertion query
                    $insert_result = mysqli_query($db, $sql1);

                    // Check if the insertion was successful
                    if ($insert_result) {
                        // Insertion successful, perform any further actions or display success message
                        echo "Job inserted successfully!";
                    } else {
                        // Insertion failed
                        echo "Error: " . mysqli_error($db);
                    }
                } else {
                    // Query failed
                    echo "Error: " . mysqli_error($db);
                }

//                $sql = "INSERT INTO interviuri_companie (id_companie, id_candidat,descriere,mesaj,cv,data_interviu) VALUES ('$id_job','$id','$descriere','$mesaj','$pdf','$data_interviu')";
                    echo $sql;
                    $result = mysqli_query($db, $sql);

//                    if (!$result)
//                        die('Invalid querry:' . mysqli_error($db));
//                    else {
//                        echo "<br>Inregistrare adaugata ";
//                        $sql1 = "SELECT * FROM tabel order by nume ASC";
//                        $result1 = mysqli_query($db, $sql1);
//                        if (!$result1)
//                            die('Invalid querry:' . mysqli_error($db));
//                        else {
//                            echo "<table border=1 cellpadding=2>";
//                            echo "<tr><td><b>Nume</b></td><td><b>Prenume</b></td><td><b>Poza</b></td></tr>";
//                            while ($myrow = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
//                                echo "<tr><td>";
//                                echo $myrow["nume"];
//                                echo "</td><td>";
//                                echo $myrow["prenume"];
//                                echo "</td><td>";
//                                echo "<img src='" . $myrow["imagine"] . "' width=100% height=100%>";
//                                echo "</td></tr>";
//                            }
//                            echo "</table>";
//                        }
//
//                    }


                }
            }
        }







}

?>
