
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
</br>
</br>
</br>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titlu = $_POST['title'];
    $descriere = $_POST['description'];
    $locatie = $_POST['location'];
    $tip_job = $_POST['type'];
    $companie_id = $_POST['employer_id'];

    $sql = "INSERT INTO joburi (titlu, descriere, locatie, tip_job, companie_id) 
            VALUES ('$titlu', '$locatie','$descriere' , '$tip_job', '$companie_id')";
    $result =mysqli_connect("127.0.0.1","root","");

    if ($result) {
        echo 'Job posting created successfully';
    } else {
        echo 'Error creating job posting';
    }
}


?>

<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>


</body>
</html>



