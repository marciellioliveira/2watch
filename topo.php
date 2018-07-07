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

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand hidden-sm hidden-lg" href="pagina_inicial.php">2WATCH</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav ">
       <li><a href="pagina_inicial.php">Página Inicial</a></li>      
      <li><a href="seguidores.php">Seguidores</a></li>
      <li><a href="#">Meus Shipps</a></li>
      <li><a href="#">Mensagens <span class="badge">42</span></a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Pesquise aqui">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
          
           <li><a href="perfil.php">Perfil</a></li>
            <li><a href="entrar.php">Sair</a></li>
        </ul>
      </div>
</nav>

  <div class="container-fluid">      

    <hr class="linha">