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


    <div class="list-group">
     <?php 
     //echo "Bem Vindo: $logado";
     ?>
      <h4>Eu shippo e vc?</h4>
      <p>Crie uma grupo para seu shippe, várias pessoas podem entrar e shippar com você. É mais legal shippar junto, ne? </p>
      <a href="" class="list-group-item">Camren</a>
      <a href="" class="list-group-item">Wayhaught</a>
      <a href="" class="list-group-item">Delena</a>
      <a href="" class="list-group-item">Sanvers</a>
      <a href="#" class="list-group-item btn" id="btn">VER MAIS</a>
      <a href="#" class="list-group-item btn" id="btn">CRIAR GRUPO</a>
      <br>
    </div>


  </div>
<br><br>

  <div class="col-sm-6 hidden-xs" id="feed">

    <div class="list-group">

      <h4>Atualizações</h4>

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