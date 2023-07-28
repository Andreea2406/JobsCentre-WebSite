<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Foundation for Sites</title>

<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="css/app.css">

<body >
<?php
echo  $_GET['id'] ;
?>
<div class="grid-x grid-padding-x">
  <div class="columns small-12 large-2"> <a href="paginaPrincipala.php"> <img src="/images/LogoSite2.jfif"> </a></div>


</div>

<div class="grid-x grid-padding-x" style="background-image:url('images/bluetone.jpg' ) ;align-content: center;  background-size: cover;background-attachment: fixed;">



  <div class="column small-12 large-6" style="background-image:url('images/bluetone.jpg' ) ;align-content: center;  background-size: cover;background-attachment: fixed;">


      <div ><br><br> <h1>Aplica acum:</h1>
          <form action="file.php" method="post" enctype="multipart/form-data">
            <p class="hide"><input type="text" name="mode" value="adaugare" ></p>


              <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
              Descriere:     <input type="text" name=descriere value="descriere" id="descriere">
            </div>
            <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
              Mesaj:    <input type="text" name=mesaj value="mesaj" id="mesaj">
            </div>
            <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
              Data:    <input type="text" name=data_interviu value="data_interviu" id="data_interviu">
            </div>
            <br>
            <br>     <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">

            Incarca-ti aici CV-ul in format pdf :
            <input  type="file"accept=".pdf" name="file" id="file" />

            <p>&nbsp;</p>    </div>

            <p>
            <div class="columns large-centered large-5 medium-5 medium-centered small-12 small-centered cell">
              <a href ="file.php?user_id=$user_id">Trimite</a>
            </div>
          </form>
          <br>
        </div>
        <br>
      </div>
</div>
</div></div>


</script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
