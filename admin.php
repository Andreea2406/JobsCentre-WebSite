
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
//echo $_SESSION["titlu"];
//echo $_SESSION["continut"] ;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JobsCentre</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <style>

        .bar-graph {
            padding: 0;
            width: 100%;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-end;
            -ms-flex-align: end;
            align-items: flex-end;
            height: 425px;
            margin: 0;
        }

        .bar-graph li {
            display: block;
            padding: 1.5625rem 0;
            position: relative;
            text-align: center;
            vertical-align: bottom;
            border-radius: 4px 4px 0 0;
            max-width: 20%;
            height: 100%;
            margin: 0 1.8% 0 0;
            -webkit-flex: 1 1 15%;
            -ms-flex: 1 1 15%;
            flex: 1 1 15%;
        }

        .bar-graph .bar-graph-axis {
            -webkit-flex: 1 1 8%;
            -ms-flex: 1 1 8%;
            flex: 1 1 8%;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .bar-graph .bar-graph-label {
            margin: 0;
            /*background-color: none;*/
            color: #8a8a8a;
            position: relative;
        }

        @media print, screen and (min-width: 40em) {
            .bar-graph .bar-graph-label:before, .bar-graph .bar-graph-label:after {
                content: "";
                position: absolute;
                border-bottom: 1px dashed #8a8a8a;
                top: 0;
                left: 0;
                height: 50%;
                width: 20%;
            }
        }

        @media print, screen and (min-width: 40em) and (min-width: 64em) {
            .bar-graph .bar-graph-label:before, .bar-graph .bar-graph-label:after {
                width: 30%;
            }
        }

        @media print, screen and (min-width: 40em) {
            .bar-graph .bar-graph-label:after {
                left: auto;
                right: 0;
            }
        }

        .bar-graph .percent {
            letter-spacing: -3px;
            opacity: 0.4;
            width: 100%;
            font-size: 1.875rem;
            position: absolute;
        }

        @media print, screen and (min-width: 40em) {
            .bar-graph .percent {
                font-size: 3.875rem;
            }
        }

        .bar-graph .percent span {
            font-size: 1.875rem;
        }

        .bar-graph .description {
            font-weight: 800;
            opacity: 0.5;
            text-transform: uppercase;
            width: 100%;
            font-size: 14px;
            bottom: 20px;
            position: absolute;
            font-size: 1rem;
            overflow: hidden;
        }

        .bar-graph .bar.primary {
            border: 1px solid #1779ba;
            background: linear-gradient(#2196e3, #1779ba 70%);
        }

        .bar-graph .bar.secondary {
            border: 1px solid #767676;
            background: linear-gradient(#909090, #767676 70%);
        }

        .bar-graph .bar.success {
            border: 1px solid #3adb76;
            background: linear-gradient(#65e394, #3adb76 70%);
        }

        .bar-graph .bar.warning {
            border: 1px solid #ffae00;
            background: linear-gradient(#ffbe33, #ffae00 70%);
        }

        .bar-graph .bar.alert {
            border: 1px solid #cc4b37;
            background: linear-gradient(#d67060, #cc4b37 70%);
        }


    </style>
</head>
<body>



<div class="grid-x grid-padding-x"
     style="background-image:url('images/bluewall.jpg' ) ;background-size: cover;background-attachment: fixed">

    <br><br><br><br>
    <ul class="bar-graph">
        <li class="bar-graph-axis">
            <div class="bar-graph-label">100%</div>
            <div class="bar-graph-label">80%</div>
            <div class="bar-graph-label">60%</div>
            <div class="bar-graph-label">40%</div>
            <div class="bar-graph-label">20%</div>
            <div class="bar-graph-label">0%</div>
        </li>
        <li class="bar primary" style="height: 95%;" title="95">
            <div class="percent">95<span>%</span></div>
            <div class="description">Anunturi</div>
        </li>
        <li class="bar secondary" style="height: 90%;" title="90">
            <div class="percent">90<span>%</span></div>
            <div class="description">Candidati</div>
        </li>
        <li class="bar success" style="height: 80%;" title="80">
            <div class="percent">80<span>%</span></div>
            <div class="description">Companii</div>
        </li>

    </ul>
    <br><br><br>

    <br> <br><br><br>

    <br> <br><br><br><br> <br><br> <br><br>
    <br><br><br><br> <br><br> <br><br>
    <br><br><br>

    <br> <br><br><br>

    <br> <br><br><br><br> <br><br> <br><br>
    <br><br><br><br> <br><br> <br><br>
</div>


<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>