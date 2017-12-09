<!DOCTYPE html>
<html lang="en">
<head>
 <title>CONUSS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Style/Index.css">
  <link rel="stylesheet" href="../Style/noticias.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Cinzel|Cinzel+Decorative' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../jquery/JQuery.js"></script>
  <script src="../Script/cookie.js"></script>
  <script src="../Script/Sidebar.js"></script>

  <link rel="stylesheet" type="text/css" href="../Style/Login.css">
  <link rel="stylesheet" type="text/css" href="../Style/Registro.css">

</head>
<body>
<!--Navigation-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../index.php">CONUSS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home</a></li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Servicios <span class="caret"></span></a>
            <ul class="dropdown-menu" id="dropdown-menu">
              <li><a href="./Servicios.php#Hosting">Hosting</a></li>
              <li><a href="./Servicios.php#Alamcenamiento">Almacenamiento</a></li>
              <li><a href="./Servicios.php#Computo">Cómputo</a></li>
              <li><a href="./Servicios.php#Procesamiento">Procesamiento</a></li>
            </ul>
        </li>
        <li><a href="./Quienes-somos.php">Quiénes somos</a></li>
        <li class="active"><a href="./Noticias.php">Noticias</a></li>
        <li><a href="#" onclick="openNav()">Investigación</a></li>
        <li><a href="./Contactanos.php">Contáctanos</a></li>
        <li><a href="https://uis.edu.co" target="blank" class="UIS">UIS</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li ><a href="#" data-toggle="modal" data-target="#login-modal"><span  class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--SideNav-->
<div id="mySidenav" class="sidenav">
  <div class="nonav"></div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="./Investigacion.php">Líneas de Investigación</a>
  <a href="./Investigaciones.php">Investigaciones</a>
  <a href="./Actividades.php">Impacto de Actividades</a>
  <a href="./Recursos.php">Recursos</a>
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
          <a href="#">Forgot Password</a>
        </div>
    </div>
  </div>
</div>
<?php 
  function footer (){//footer
 ?>
 <footer class="container-fluid text-center">
  <a href="#Top">Volver Arriba &#8593; </a><a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-google"></a><a href="#" class="fa fa-youtube"></a>
</footer>
 <?php
  }
  ?>