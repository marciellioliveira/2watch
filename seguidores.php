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

     <a href="perfil.php"><h4>Julia Silva</h4></a>  

     <marquee behavior="scroll" direction="left" id="marquee"><br>
      Visto por último: One day at a time - Temporada 1, Epsódio 5.
    </marquee>
    <hr>


    <div class="list-group">
     <?php 
     //echo "Bem Vindo: $logado";
     ?>     
      <p>Eu amo séries, shippo muito Sanvers e sou louca por One day at a time.</p>
       <h4>Top 5 séries que assisto!</h4>
      <a href="" class="list-group-item">One day at a time</a>
      <a href="" class="list-group-item">Supergirl</a>
      <a href="" class="list-group-item">The vampire diaries</a>
      <a href="" class="list-group-item">Gossip Girl</a>
      <a href="" class="list-group-item">The big bang theory</a>
      <br>
    </div>


  </div>
<br><br>

  <div class="col-sm-6 hidden-xs" id="feed">

    <div class="list-group">

      <h4>Seguidores</h4>

      <!-- Quando clica em @juliasilva, muda o perfil do lado esquerdo.
      Quando não tem nenhum click, ficam dados padrões -->
      <a href="#" class="list-group-item feed">@juliasilva - Eu amo séries, shippo muito Sanvers e sou louca por One day at a time.</a>
      <a href="#" class="list-group-item feed">@soueuluc - Sou fascinado por The big bang theory. Sheldon é o melhor kkkk Amo também The vampire diaries, adoro séries de vampiros.</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>
      <a href="#" class="list-group-item feed">@soueuluc</a>

    </div>


  </div>

  <div class="col-sm-3" id="series">

    <div class="list-group">

      <h4>Hoje Julia vai ver</h4>
      <a href="#" class="list-group-item">Riverdale</a>
      <a href="#" class="list-group-item">Pretty Little Liars</a>
      <a href="#" class="list-group-item">Orange is the new black</a>
      <a href="#" class="list-group-item">Legends of tomorrow</a>
      <a href="#" class="list-group-item btn" id="btn">VER MAIS</a>
      <br>
    </div>

    <div class="list-group">
      <h4>Séries ativas de Julia</h4>
      <a href="#" class="list-group-item">Riverdale</a>
      <a href="#" class="list-group-item">Pretty Little Liars</a>
      <a href="#" class="list-group-item">Orange is the new black</a>
      <a href="#" class="list-group-item">Legends of tomorrow</a>
      <a href="#" class="list-group-item btn" id="btn">VER MAIS</a>
    </div>

    <div class="list-group">
      <h4>Séries Canceladas de Julia</h4>
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