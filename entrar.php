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

  <div class="container-fluid">      

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            2WATCH
          </a>
        </div>
        <ul class="nav navbar-nav hidden">
          <li><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
          <li><a href="#">Page 3</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">          
          <li><a href="Cadastrar.php"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>
          <li><a href="entrar.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
        </ul>
      </div>
    </nav>

    <hr class="linha">


    <div class="row" id="rowCentro">          
      <div class="col-lg-6">
        <div id="carouselInicio" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carouselInicio" data-slide-to="0" class="active"></li>
            <li data-target="#carouselInicio" data-slide-to="1"></li>
            <li data-target="#carouselInicio" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="imgs/seriestelainicial/legends-of-tomorrow.jpg" alt="Los Angeles">
            </div>

            <div class="item">
              <img src="imgs/seriestelainicial/riverdale.jpg" alt="Chicago">
            </div>
          </div>

          <!-- Left and right controls -->
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
      <div class="col-lg-6">

       <!-- Entrar -->

       <form action="crud/entrarUsuario.php" method="POST">

        <img src="imgs/marca/2watch-logo.png" class="img-circle" alt="Cinque Terre" >

        <div class="form-group">
          <label for="email">Email*</label>
          <input type="text" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
          <label for="senha">Senha*</label>
          <input type="password" class="form-control" name="senha" id="senha" required>
        </div>

        <div class="checkbox">
          <label><input type="checkbox"> Lembrar senha?</label>
        </div>
        <button type="submit" class="btn btn-default pull-right">Entrar</button>

      </form>
      
    </div>
  </div>

</div> <!-- Fecha container-fluid -->


<div class="footer">
  <hr class="linha">
  <p>Footer</p>
</div> <!-- Fecha footer -->

</body>
</html>