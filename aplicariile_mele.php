<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>JobsCentre</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>-->
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
  <style>
    .container{

      position:absolute;
      left:50%;
      top:90%;
      height: 300px;

      transform: translate(-50%,-50%)
    }
    .dropdown{

      left: auto;
      width:102px;
      height: 20px;
      line-height: 42px;
      top:0px;
      text-align: center;

      font-family: tahoma;
      margin-top: 12px;
      margin-right: 12px;
      right:120px;
      position: absolute;
      margin-bottom: 9.6rem;
      padding-bottom: 30px;
      color: rgb(51, 180, 194);
    }
  </style>
</head>
<body>




<div class="grid-x grid-padding-x">
  <div class="columns small-9 large-2"><a href="paginaPrincipala.php"> <img src="/images/logoSite2.jfif"> </a></div>
  <div class="columns small-3 large-10" style="text-align: center; ">

    <ul class="dropdown menu " data-dropdown-menu>
      <li>
        <a   style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;margin-top: 10px;"href="#">Nume Candidat</a>
        <ul class="menu">
          <li><a href="CVul_meu.php">CV-ul meu</a></li>
          <li><a href="aplicariile_mele.html">Aplicariile mele</a></li>
          <li><a href="interviuri.html">Interviuri</a></li>
          <li><a href="mesaje_candidat.html">Mesajele mele</a></li>
          <li><a href="setari_candidat.html">Setari</a></li>

          <li><a href="paginaPrincipala.php">Deconecteaza-te</a></li>
        </ul>
      </li>
    </ul>


  </div>
</div>
<div class="grid-x grid-padding-x" style="background-image:url('images/bckg.jpg' ) ;background-size: cover;background-attachment: fixed">
  <div class="columns small-12 large-12" style="background-image:url('images/bckg.jpg' ) ;background-size: cover;background-attachment: fixed">    <h1 style="text-align:left; color: #33b4c2;padding-left:70px;font-weight:bold">Aplicariile mele</h1>
  </div>


</div>
<div class="grid-x grid-padding-x" style="background-image:url('images/bckg.jpg' ) ;background-size: cover;background-attachment: fixed">

  <div class="columns small-12 large-12" style="background-image:url('images/bckg.jpg' ) ;background-size: cover;background-attachment: fixed">


    <input type="text" placeholder="Introduceți un cuvânt cheie" style="padding-left:10px;font-size:25pt;border-radius: 25px; margin-top: 50px;margin-bottom: 40px;";>



    <a href="#" class="button"  style="background-color: #33b4c2; opacity: 100%;font-size: 20px;border-radius: 20px;color:white;padding-left: 10px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px"> Caută job </a>




  </div>

</div>








</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>