<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>FASHIONSHOP</title>
    <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
    <!-- BOOTSTRAP CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />

    
    
  
  </head>

  <style>

body{

background-color: black  

}
 
.space{

margin-top: 2%;

}


.contenedor{


margin-left: 15%;

}

label{

color: white; 
font-size: 20px; 

}

</style>


  <body>



      <body>

         <header class="main-header">
      <div class="background-overlay text-white py-5">
        <div class="container" 
          <div class="row d-flex h-100">
            <div
              class="col-sm-6 text-center justify-content-center align-self-center"
            >
              <h1>
                FASHIONSHOP
              </h1>
              
            </div>
            <div class="col-sm-6"></div>
          </div>
        </div>
      </div>
    </header>

   


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Servicios.php">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contactanos.php">Contactanos</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mujer
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             
            <a class="dropdown-item" href="#">Blusas</a>
            <a class="dropdown-item" href="#">Jeans</a>
            <a class="dropdown-item" href="#">Chaquetas</a>
            <a class="dropdown-item" href="#">Vestidos</a>
            <a class="dropdown-item" href="#">Accesorios</a>
            <a class="dropdown-item" href="#">Faltas y Shorts</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hombre
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             
            <a class="dropdown-item" href="#">Camisetas</a>
            <a class="dropdown-item" href="#">Jeans</a>
            <a class="dropdown-item" href="#">Chaquetas - buzos</a>
            <a class="dropdown-item" href="#">Accesorios</a>
            
          </div>
        </li>
         
      </ul>

      
      <form class="form-inline my-2 my-lg-0" action="controlador/login.php" method="post"> 
        <input class="form-control mr-sm-2" name="usuario" type="search" placeholder="Busca tu producto" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>

  
   
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Imagenes/blu1.jpg" alt="First slide">
    </div>



    <h1> HISTORIADORES DE CORAZON </h1>

    <h2> FASHIONSHOW </h2>

    <h3> Tienda de ropa para mujer, todo está en los detalles, desde la inspiración de todas las colecciones, hasta nuestra propia manera de pensar.

    En FASHIONSHOW buscamos ser auténticos, una marca que no pierde su esencia.</h3>


    <div class="carousel-item active">
      <img class="d-block w-100" src="Imagenes/blu2.jpg"  alt="First slide">
    </div>
    
  
  
</div>

    



    <!-- BOOTSTRAP SCRIPTS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
    ></script>
  </body>
</html>



<?php 
include "footer.php"
?>
