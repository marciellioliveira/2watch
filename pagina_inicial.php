<?php 

session_start();  

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {


  //unset($_SESSION['email']);
  //unset($_SESSION['senha']);
  session_destroy();
} 

$logado = $_SESSION['email'];

require_once 'topo.php';

?>

<div class="container-fluid">      
  <div class="row" id="topo">
    <div class="col-sm-3" id="perfil">

     <img src="imgs/usuario/dualipa/dualipa.jpg" alt="Foto Perfil">
     
     <button type="button" class="btn btn-default pull-right" id="editarPerfil">Editar Perfil</button>

     <a href="perfil.php"><h4>Dua Lipa</h4></a>  

     <marquee behavior="scroll" direction="left" id="marquee"><br>
      Visto por último: Riverdale - Temporada 5, Epsódio 16.
    </marquee>
    <hr>


    <div class="list-group ">
     <?php 
     //echo "Bem Vindo: $logado";
     ?>
      <h4>Eu shippo e vc?</h4>
      <p>Crie um grupo para seu shippe, várias pessoas podem entrar e shippar com você. É mais legal shippar junto, ne? </p>
      <a href="" class="list-group-item">Camren</a>
      <a href="" class="list-group-item">Wayhaught</a>
      <a href="" class="list-group-item">Delena</a>
      <a href="" class="list-group-item">Sanvers</a>
      <a href="#" class="list-group-item btn" id="btn">VER MAIS</a>
      <a href="#" class="list-group-item btn" id="btn">CRIAR GRUPO</a>
      <br>
    </div>
  </div>
<br class="hidden-lg"><br class="hidden-lg"><br class="hidden-lg">

  <div class="col-sm-6" id="feed">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#atualizacoes">Feed</a></li>
      <li><a data-toggle="tab" href="#minhasSeries">Séries Hoje</a></li>
      <li><a data-toggle="tab" href="#shipps">Shipps</a></li>
      <li><a data-toggle="tab" href="#mensagens">Mensagens</a></li>
      <li><a data-toggle="tab" href="#seguidores">Seguidores</a></li>
    </ul>

    <div class="tab-content">
      <div id="atualizacoes" class="tab-pane fade in active">
       <div class="list-group">
        <br>
          <a href="#" class="list-group-item feed">Dener finalizou The Big Bang Theory</a>
          <a href="#" class="list-group-item feed">Vinicius começou a maratonar The IT Crowd</a>
          <a href="#" class="list-group-item feed">Janaina gostou do epsódio 5x3 de Riverdale</a>
          <a href="#" class="list-group-item feed">Marcelo comentou no epsódio 5x7 de Grey's Anatomy</a>
          <a href="#" class="list-group-item feed">Dener finalizou The Big Bang Theory</a>
          <a href="#" class="list-group-item feed">Vinicius começou a maratonar The IT Crowd</a>
          <a href="#" class="list-group-item feed">Janaina gostou do epsódio 5x3 de Riverdale</a>
          <a href="#" class="list-group-item feed">Marcelo comentou no epsódio 5x7 de Grey's Anatomy</a>
          <a href="#" class="list-group-item feed">Dener finalizou The Big Bang Theory</a>
          <a href="#" class="list-group-item feed">Vinicius começou a maratonar The IT Crowd</a>
          <a href="#" class="list-group-item feed">Janaina gostou do epsódio 5x3 de Riverdale</a>
          <a href="#" class="list-group-item feed">Marcelo comentou no epsódio 5x7 de Grey's Anatomy</a>
          <a href="#" class="list-group-item feed">Dener finalizou The Big Bang Theory</a>
          <a href="#" class="list-group-item feed">Vinicius começou a maratonar The IT Crowd</a>
          <a href="#" class="list-group-item feed">Janaina gostou do epsódio 5x3 de Riverdale</a>
          <a href="#" class="list-group-item feed">Marcelo comentou no epsódio 5x7 de Grey's Anatomy</a>
        </div>
      </div>
      <div id="minhasSeries" class="tab-pane fade">
       <div class="list-group">
        <br>
          <a href="#" class="list-group-item feed">The big bang theory</a>
          <a href="#" class="list-group-item feed">The IT Crowd</a>
          <a href="#" class="list-group-item feed">Riverdale</a>
          <a href="#" class="list-group-item feed">Grey's Anatomy</a>
          <a href="#" class="list-group-item feed">The big bang theory</a>
          <a href="#" class="list-group-item feed">The IT Crowd</a>
          <a href="#" class="list-group-item feed">Riverdale</a>
          <a href="#" class="list-group-item feed">Grey's Anatomy</a>
          <a href="#" class="list-group-item feed">The big bang theory</a>
          <a href="#" class="list-group-item feed">The IT Crowd</a>
          <a href="#" class="list-group-item feed">Riverdale</a>
          <a href="#" class="list-group-item feed">Grey's Anatomy</a>
        </div>
      
      </div>
      <div id="shipps" class="tab-pane fade">
        <br>
        <h4>Shipps</h4>
      </div>
      <div id="mensagens" class="tab-pane fade">
        <br>
        <h4>Mensagens</h4>
      </div>
      <div id="seguidores" class="tab-pane fade">
        <br>
        <h4>Seguidores</h4>
      </div>
    </div>

  </div>

  <div class="col-sm-3" id="series">

    <div class="list-group">

      <h4>Hoje</h4>
      <a href="#" class="list-group-item">Riverdale</a>
      <a href="#" class="list-group-item">Pretty Little Liars</a>
      <a href="#" class="list-group-item">Orange is the new black</a>
      <a href="#" class="list-group-item">Legends of tomorrow</a>
      <a href="#" class="list-group-item btn" id="btn">VER MAIS</a>
      <br>
    </div>

    <div class="list-group">
      <h4>Ativas</h4>
      <a href="#" class="list-group-item">Riverdale</a>
      <a href="#" class="list-group-item">Pretty Little Liars</a>
      <a href="#" class="list-group-item">Orange is the new black</a>
      <a href="#" class="list-group-item">Legends of tomorrow</a>
      <a href="#" class="list-group-item btn" id="btn">VER MAIS</a>
    </div>

    <div class="list-group">
      <h4>Canceladas</h4>
      <a href="#" class="list-group-item">Riverdale</a>
      <a href="#" class="list-group-item">Pretty Little Liars</a>
      <a href="#" class="list-group-item">Orange is the new black</a>
      <a href="#" class="list-group-item">Legends of tomorrow</a>
      <a href="#" class="list-group-item btn" id="btn">VER MAIS</a>
    </div>

  </div>
</div>


</div>

</body>
</html>