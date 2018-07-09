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


    <div class="col-sm-9" id="feed">

      <h3>Mr. Robot</h3>

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
       
       <p><strong>Temporada: 3</strong></p> 
        <table class="table">
        <thead>
          <tr>
            <th>Epsódio</th>
            <th>Nome</th>
            <th>Exibido em</th>
            <th>Assistido</th>
            <th>Nota</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>10</td>
            <td><a href="epsodio.php">shutdown -r</a> </td>
            <td>13/12/2017</td>
            <td>
              <div class="checkbox">
              <label><input type="checkbox" value="">Sim</label>
            </div>
            </td>
            <td>
             <div class="form-group">
              <select class="form-control" id="selNota">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
            </div>          
            </td>
          </tr>    

          <tr>
            <td>9</td>
            <td><a href="epsodio.php">eps3.8_stage3.torrent</a></td>
            <td>em 06/12/2017</td>
            <td>
              <div class="checkbox">
              <label><input type="checkbox" value="">Sim</label>
            </div>
            </td>
            <td>
             <div class="form-group">
              <select class="form-control" id="selNota">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
            </div>          
            </td>
          </tr> 

          <tr>
            <td>9</td>
            <td><a href="epsodio.php">eps3.8_stage3.torrent</a></td>
            <td>em 06/12/2017</td>
            <td>
              <div class="checkbox">
              <label><input type="checkbox" value="">Sim</label>
            </div>
            </td>
            <td>
             <div class="form-group">
              <select class="form-control" id="selNota">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
            </div>          
            </td>
          </tr> 

          <tr>
            <td>9</td>
            <td><a href="epsodio.php">eps3.8_stage3.torrent</a></td>
            <td>em 06/12/2017</td>
            <td>
              <div class="checkbox">
              <label><input type="checkbox" value="">Sim</label>
            </div>
            </td>
            <td>
             <div class="form-group">
              <select class="form-control" id="selNota">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
            </div>          
            </td>
          </tr> 

          <tr>
            <td>9</td>
            <td><a href="epsodio.php">eps3.8_stage3.torrent</a></td>
            <td>em 06/12/2017</td>
            <td>
              <div class="checkbox">
              <label><input type="checkbox" value="">Sim</label>
            </div>
            </td>
            <td>
             <div class="form-group">
              <select class="form-control" id="selNota">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
            </div>          
            </td>
          </tr>  
         </tbody>
      </table>
    </div>   
  </div>
</div>

</body>
</html>