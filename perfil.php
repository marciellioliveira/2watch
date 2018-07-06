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
<br>
<div class="container-fluid">      
  <div class="row" id="topo">   
       
    <div class="col-sm-3" id="perfil">   

      <button type="button" class="btn btn-default pull-right" id="editarPerfil">Editar Perfil</button>
          <img src="imgs/usuario/dualipa/dualipa.jpg" alt="Foto Perfil">
          <a href=""><h4>Dua Lipa</h4></a>   

           <p>Visto por último: Riverdale - Temporada 5, Epsódio 16.</p>   	
 <hr>
        <div class="list-group">

          <h4>Estatísticas</h4>
          <a href="#" class="list-group-item">Séries na grade: 56</a>
          <a href="#" class="list-group-item">Séries abandonadas: 5</a>
          <a href="#" class="list-group-item">Séries na geladeira: 12</a>
          <a href="#" class="list-group-item">Total de horas assistidas: 50hrs</a>
          <a href="#" class="list-group-item">Quantas maratonas? 3</a>
          <a href="#" class="list-group-item">Séries reassistidas: 4</a>
          <a href="#" class="list-group-item">Séries brasileiras: 2</a>
                    
          <br>
        </div>

   
    </div>

    <div class="col-sm-6  hidden-xs" id="feed">

      <div class="list-group">

        <h4>Atualizações</h4>
        <a href="#" class="list-group-item feed">Finalizei The Big Bang Theory</a>
        <a href="#" class="list-group-item feed">Comecei a maratonar The IT Crowd</a>
        <a href="#" class="list-group-item feed">Gostei do epsódio 5x3 de Riverdale</a>
        <a href="#" class="list-group-item feed">Comentei no epsódio 5x7 de Grey's Anatomy</a>
        <a href="#" class="list-group-item feed">Finalizei The Big Bang Theory</a>
        <a href="#" class="list-group-item feed">Comecei a maratonar The IT Crowd</a>
        <a href="#" class="list-group-item feed">Gostei do epsódio 5x3 de Riverdale</a>
        <a href="#" class="list-group-item feed">Comentei no epsódio 5x7 de Grey's Anatomy</a>
        <a href="#" class="list-group-item feed">Finalizei The Big Bang Theory</a>
        <a href="#" class="list-group-item feed">Comecei a maratonar The IT Crowd</a>
        <a href="#" class="list-group-item feed">Gostei do epsódio 5x3 de Riverdale</a>
        <a href="#" class="list-group-item feed">Comentei no epsódio 5x7 de Grey's Anatomy</a>
        <a href="#" class="list-group-item feed">Finalizei The Big Bang Theory</a>
        <a href="#" class="list-group-item feed">Comecei a maratonar The IT Crowd</a>
        <a href="#" class="list-group-item feed">Gostei do epsódio 5x3 de Riverdale</a>
        <a href="#" class="list-group-item feed">Comentei no epsódio 5x7 de Grey's Anatomy</a>
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