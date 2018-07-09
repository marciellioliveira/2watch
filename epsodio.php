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
    <div class="col-sm-3" id="perfilSerie">

      	<img src="imgs/usuario/dualipa/dualipa.jpg" alt="Foto Perfil">


        <a href=""><h4>Mr. Robot</h4></a>
        <hr>

        <div class="list-group">       
          <a href="" class="list-group-item feed">Adicionar na Grade</a>
          <a href="" class="list-group-item feed">Adicionar na Geladeira</a>
          <a href="" class="list-group-item feed">Marcar como vista</a>
          <a href="" class="list-group-item feed">Iniciar Maratona</a>
          <br>
          <h4>Temporada</h4>
          <p>Escolha uma temporada e comece a assistir! </p>
          <a href="" class="list-group-item feed">Temporada 5</a>
          <a href="" class="list-group-item feed">Temporada 4</a>
          <a href="" class="list-group-item feed">Temporada 3</a>
          <a href="" class="list-group-item feed">Temporada 2</a>
          <a href="" class="list-group-item feed">Temporada 1</a>
          <br>
        </div>     
      
           
    </div>

<br class="hidden-lg"><br class="hidden-lg">
    <div class="col-sm-9" id="feed">

      <h3>Epsodio: 3x14 - eps3.8_stage3.torrent</h3>

     <table class="table">
        <thead>
          <tr>
            <th>Status</th>
            <th>Início</th>
            <th>Canal</th>
            <th>Duração Eps</th>
            <th>Fim</th>
            <th>País</th>
            <th>Próximo Eps</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Renovada</td>
            <td>Maio/2015</td>
            <td>USA</td>
            <td>60min</td>
            <td>-</td>
            <td>US</td>
            <td>Indefinido</td>
          </tr>        
        </tbody>
      </table>

      <div class="page-header">
        <h4>Sinopse</h4>
        <h5>Elliot (Rami Malek) é um jovem programador que sofre de uma desordem mental que o torna antissocial. Ele trabalha como técnico de segurança virtual durante o dia, e como hacker vigilante durante a noite. Elliot se vê numa encruzilhada quando o líder (Christian Slater) de um misterioso grupo de hackers o recruta para destruir a firma que ele é pago para proteger. Motivado pelas suas crenças pessoais, mesmo tendo noção do expressivo controle que essa corporação exerce sobre a sociedade mundial ele tenta resistir à oportunidade de destruir os CEOs dessa multinacional.</h5>
      </div>
       
       <p><strong>Comentários</strong></p> 

       <form class="form-inline" action="/action_page.php">
        <div class="form-group">
          <textarea class="form-control " rows="5" cols="117" id="comentario"></textarea>
        </div>     
        <button type="submit" class="btn btn-default">Comentar</button>
      </form>

        <br>

        <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title" data-toggle="collapse" data-target="#collapse1">
              Marcielli
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
              <img src="imgs/usuario/dualipa/dualipa.jpg" alt="Foto Perfil">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat.</p>
              <img src="imgs/icons/curtiComentario.png" alt="Curti" id="curtiComentario">
          </div>
          </div>
        </div>
      </div>

       <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title" data-toggle="collapse" data-target="#collapse2">
              Marcielli
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse in">
            <div class="panel-body">
              <img src="imgs/usuario/dualipa/dualipa.jpg" alt="Foto Perfil">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat.</p>
              <img src="imgs/icons/curtiComentario.png" alt="Curti" id="curtiComentario">
          </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

</body>
</html>