<!--
Site: Assistir séries
Backend e Frontend: Marcielli Oliveira;
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>2Watch</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <nav class="avbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="pagina_inicial.php">2WATCH</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav ">
      <li><a href="perfil.php">Perfil</a></li>
      <li><a href="#">Grade</a></li>
      <li><a href="#">Amigos</a></li>
      <li><a href="#">Mensagens</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Pesquise aqui">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
            <li><a href="entrar.php">Sair</a></li>
        </ul>
      </div>
</nav>

  <div class="container-fluid">   

    <hr class="linha">


    <div class="row" id="rowCentro">          
      <div class="col-lg-6 col-sm-6 col-xs-12" >


        <div id="carouselInicio" class="carousel slide" data-ride="carousel">
         
          <ol class="carousel-indicators">
            <li data-target="#carouselInicio" data-slide-to="0" class="active"></li>
            <li data-target="#carouselInicio" data-slide-to="1"></li>
            <li data-target="#carouselInicio" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="imgs/seriestelainicial/legends-of-tomorrow.jpg" alt="Los Angeles">
            </div>

            <div class="item">
              <img src="imgs/seriestelainicial/riverdale.jpg" alt="Chicago">
            </div>
          </div>

          <a class="left carousel-control" href="#carouselInicio" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carouselInicio" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12">

        <ul class="mostrarInicio">
          <li>Marque suas séries vistas.</li>
          <li>Descubra séries novas.</li>
          <li>Assista séries junto mesmo estando longe.</li>
          <li>Faça amizades</li>
          <li>Compartilhe seu amor pela arte!</li>
        </ul>

      </div>
    <!--</div>-->

  </div> <!-- Fecha container-fluid -->

  
 
<?php

require_once 'rodape.php';

?>

</body>
</html>