<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}
//echo $_SESSION["name"];
include 'headerlogged.php';


//echo $_SESSION["id"];

$id = $_SESSION['id'];
$email = $_SESSION['username'];

?>


<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <style>
        .job-box {
            border: 4px solid #ccc;
            border-radius: 50px;
            border-color: #33b4c2;
            padding: 10px;
            margin-bottom: 10px;

        }
    </style>
</head>
<body>
<div class="grid-x grid-padding-x" style="background-image: url('images/pas.jpg');background-size:
cover;background-attachment: fixed">
    <br>
</div>
<div class="grid-x grid-padding-x" style="background-image: url('images/pas.jpg');background-size: cover;background-attachment: fixed">
    <br>  <br>
<?php
// Establish a database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "datepersoane";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
//$sql = "select * from companii
//inner join users on users.username=companii.email ";
//$result = $conn->query($sql);

$stmt = $conn->prepare("SELECT * FROM companii WHERE email = ?  ");
$stmt->bind_param("s", $email);
//$result = $conn->query($sql);
$stmt->execute();
$result = $stmt->get_result();
// Check if there are any rows in the result
if ($result->num_rows > 0 ) {
    $_SESSION["id"] = "id";
    // Output each row as a <div> element
   // while ($row = $result->fetch_assoc()) {
        // echo '<div class="column small-12 large-6" style="justify-content:right;margin-left: 15px;;border-width:2px;border-style:solid; float:left;border-style: solid ; opacity: 100%;font-size: 25px;border-radius: 20px; color:#33b4c2;padding-left: 10px;padding-right: 10px;padding-bottom: 10px;padding-top: 5px">';
        //echo '<br><br>'; echo '<br><br>';
$row = $result->fetch_assoc();
    $id_companie = $row["id_companie"];

       // $id_companie = $row["id"];
        // echo $id_companie;
        echo '<div class="job-box"style="background-color: rgba(255,255,255,0.73)">';
        echo '<div class="job-listing">';
        echo '<h2 style="color: #33b4c2"> ' . $row["nume"] . '</h2>';
    echo '<form method="POST" action="companie_edit.php?id_companie=' . $id_companie . '">';
    echo '<div class="firm-name">Nume: ' . $row["nume"] . '</div>';

    echo '<div class="firm-name">Locatie: ' . $row["locatie"] . '</div>';
        echo '<div class="job-title">Email: ' . $row["email"] . '</div>';
        echo '<div class="available-jobs">Parola: ' . $row["parola"] . '</div>';


    echo '<br><br>';
    echo '<div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
      <button type="submit" class="success button" name="submit" ">Editeaza</button>
    </div>  ';
    echo '</form>';
        echo '<br><br>';
        echo '</div>';

        ?>

        <?php
        echo '</div>';

} else {
    echo "No job listings found.";
}

// Close the database connection
$conn->close();
?>

</div>
<div class="grid-x grid-padding-x"
     style="background-image: url('images/pas.jpg');background-size: cover;background-attachment: fixed">
    <br><br>    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br>


</div>


<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
