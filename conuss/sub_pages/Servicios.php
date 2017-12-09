<?php 
  include("../pages/menu.php");
?>

<!--Content-->
<div class="container-fluid text-justify">

  <div class="col-sm-2 nonav"></div>
  <!--Content Column-->
  <div class="col-sm-8 c1" id="center">
    <!--Actual Content-->
    <div class="row nonav"></div>
    <h1 id="Hosting">Servicios</h1> <!--El título tiene el id hosting porque si se coloca más abajo, no se ve bien al ir a #Hosting. La nav lo tapa.-->

    <div>
      <div class="panel-heading"> 
        <h2 data-toggle="collapse" href="#Host">Hosting <span class="caret"></span></h2>
        <hr>
      </div>
      <div id="Host" class="panel-collapse collapse">
        <div class="panel-body">
          <p> Proveemos a nuestros usuarios un sistema para almacenar información, imágenes, vídeo, o cualquier contenido accesible vía web.</p>
        </div>
      </div>
    </div>

    <div>
      <div class="panel-heading" id="Almacenamiento">
        <h2 data-toggle="collapse" href="#Almac">Almacenamiento <span class="caret"></span></h2>
        <hr>
      </div>
      <div id="Almac" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Ofrecemos alojamiento de datos en espacios de almacenamiento virtualizados. Los operadores delcentros deprocesamiento virtualizan los recursos según los requerimientos del usuario y sólo se exhiben los entornos con los recursos requeridos. Los usuarios administran el almacenamiento y el funcionamiento de los archivos, datos o aplicaciones.</p>
        </div>
      </div>
    </div>

    <div>
      <div class="panel-heading" id="Computo">
        <h2 data-toggle="collapse" href="#Comp">Cómputo <span class="caret"></span></h2>
        <hr>
      </div>
      <div id="Comp" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Actuamos como centro de procesamiento de datos, concentrando los recursos necesarios para el procesamiento de la información. Dichos recursos consisten esencialmente en unas dependencias debidamente acondicionadas, computadoras y redes de comunicaciones.</p>
        </div>
      </div>
    </div>

    <div>
      <div class="panel-heading" id="Procesamiento">
        <h2 data-toggle="collapse" href="#Proc">Procesamiento <span class="caret"></span></h2>
        <hr>
      </div>
      <div id="Proc" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>

    <!--To fill up sopace-->
    <div class="row nonav"></div>
    <div class="row nonav"></div>
    <div class="row nonav"></div>
  <!--End of Actual Content-->
  </div>
  <div class="col-sm-2 nonav"></div>
</div>

<?php 
  footer();
 ?>
</body>
</html>