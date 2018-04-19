<!--
Site: Assistir séries
Backend e Frontend: Marcielli Oliveira;
-->
<?php

  require_once 'topo.php';

?>


    <div class="row" id="rowCentro">          
      <div class="col-lg-6" >
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

        <ul class="mostrarInicio">
          <li>Marque suas séries vistas.</li>
          <li>Descubra séries novas.</li>
          <li>Assista séries junto mesmo estando longe.</li>
          <li>Faça amizades</li>
          <li>Compartilhe seu amor pela arte!</li>
        </ul>

      </div>
    </div>

  </div> <!-- Fecha container-fluid -->

  
<?php

  require_once 'rodape.php';

?>

</body>
</html>