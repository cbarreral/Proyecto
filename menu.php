<nav  class="navbar navbar-expand-lg navbar-dark bg-white  scrolling-navbar fixed-top" >
  <div class="container" id="menuChido">
  <img src="img/Oficial.png" width="50px" alt="">
  <img style="padding-left: 20px" src="img/logos.png" width="220px" alt="">
  <img src="img/cisco.png" width="90px" alt="">
  <img  style="padding-left: 20px" src="img/LOGO_TECNM.jpg" width="90px" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4 ">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item ">
          <a class="nav-link" href="index.php" style="color: dimgray ;">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Equipos.php" style="color: dimgray ;">Equipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Distracciones.php" style="color: dimgray ;">Distracciones</a>
        </li>
        <li class="nav-item ">
         
          <button type="button" class="btn btn-rounded btn-default btn-sm"data-toggle="modal" data-target="#modalLoginForm">Sesión</button>
        </li>
        <li class="nav-item">
          <h6 style="padding-left: 20%; color: darkblue;">Restan:</h6>
          <h6 id="crono" style="padding-left: 20%; color: crimson;"><span id="">00</span>:<span id="">00</span>:<span id="">00</span></h6>
       
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Incluir cronometro de prueba -->
<?php
//include_once 'cronometro.php';
?>