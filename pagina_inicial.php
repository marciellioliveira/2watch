<?php 
require_once 'topo.php';
?>


<div class="container-fluid">      
  <div class="row">
    <div class="col-sm-3" id="perfil">

      
      <!--<div class="jumbotron">-->
      	<img src="imgs/usuario/dualipa/dualipa.jpg" alt="Cinque Terre">

<!--         <img src="imgs/usuario/dualipa/dualipa.jpg" class="img-rounded" alt="Foto de Perfil">        
          <i class="fa fa-upload fa-5x"></i>       
          <input id='uploadfile' type ='file'> -->
           <a href=""><h4>Dua Lipa</h4></a>           
        

        <marquee behavior="scroll" direction="left" id="marquee"><br>
          Visto por último: Riverdale - Temporada 5, Epsódio 16.
        </marquee>
        <hr>
        <button type="button" class="btn btn-default pull-right" id="editarPerfil">Editar Perfil</button>
      <!--</div>-->
  
     

   
    </div>


    <div class="col-sm-6" id="feed">





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



<script type="text/javascript">
  $('.profile-img-container img').click(function(){
    $('#uploadfile').click();
  });
</script>

<script type="text/javascript">
  function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>

</body>
</html>