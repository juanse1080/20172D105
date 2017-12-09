<?php 
  include("../pages/menu.php");
?>
<!--SideNav-->
<div id="mySidenav" class="sidenav">
  <div class="nonav"></div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="./Investigación.html">Líneas de Investigación</a>
  <a href="./Investigaciones.html">Investigaciones</a>
  <a href="./Actividades.html">Impacto de Actividades</a>
  <a href="./Recursos.html">Recursos</a>
</div>

<div id="Top"></div>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
  <div class="modal-dialog">
    <div class="loginmodal-container">
        <h1>Ingrese a su cuenta</h1><br>
          <input type="text" name="user" id="username" onFocusout="verifyC(value)" placeholder="Username">
          <input type="password" name="pass" id="password" placeholder="Password">
          <input onclick="alertC()" type="submit" name="login" value="Login" id="enviar" class="login loginmodal-submit">
          
        <div class="login-help">
          <a href="/20172D105/conuss/sub_pages/Registro.html">Register</a> - <a href="#">Forgot Password</a>
        </div>
    </div>
  </div>
</div>  

<div class="container-fluid">

  <div class="col-sm-2"></div>
  <div class="col-sm-8" id="center">
    <div class="row entry noticia">
      <div class="col-sm-8 text-justify">
        <h2>NUEVA PLATAFORMA</h2>
        <h4>9.10.2017</h4>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dicta explicabo ab amet expedita beatae laboriosam consequatur sunt debitis suscipit rem eligendi eos voluptatibus culpa officia nemo, modi ut minima!.</p>
      </div>
      <div class="col-sm-4 notiimg">
        <img src="../Images/web-program.png">
      </div>
    </div>

    <div class="row entry noticia">
      <div class="col-sm-8 text-justify">
        <h2>GRUPO CONNUS</h2>
        <h4>9.10.2017</h4>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis odit blanditiis quod ipsam consectetur nobis placeat magnam, ipsa veniam aliquam! Excepturi, illo amet earum ipsam corporis doloremque labore recusandae adipisci..</p>
      </div>
      <div class="col-sm-4 notiimg">
        <img src="../Images/sqlogo.jpg">
      </div>
    </div>
  </div>
  <div class="col-sm-2"></div>

</div>

<?php 
  footer();
 ?>

</body>
</html>