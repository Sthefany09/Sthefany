
  

    <meta charset="UTF-8" />
    <title>Contactanos</title>
    <!-- BOOTSTRAP CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
   

    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script language="javascript"> 

  function comprobar(){

  var nombre = document.formulario.nombre.value;
  var apellido = document.formulario.apellido.value;
  var edad = document.formulario.edad.value;
  var contraseña = document.formulario.contraseña.value;
  var recontraseña = document.formulario.recontraseña.value;


  if(nombre.length > 20){

    alert("Tu nombre es demasiado largo");

    return false; 

  }


  if(apellido.length > 20){

    alert("Tu apellido es demasiado grande ");

    return false; 

  }


  if(edad >= 1 && edad <= 17){

    alert("Tu eres menor de edad");

    return false; 

  }



  if(contraseña.length <  8){

    alert("Tu contraseña es muy corta");

    return false; 

  }


  if(contraseña != recontraseña){

    alert("Tu contraseña es diferente");

    return false; 

  }

}




</script>

    
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="css/estilos.css" />


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
      
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Busca tu producto" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </div>
    </nav>

    

    <!-- HEADER -->
    <header class="main-header">
      <div class="background-overlay text-white py-5">
        <div class="container">
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

    <!-- NEWSLETTER  -->
    <section id="newsletter" class="bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>CONTACTANOS</h1>
            <br /><br />
            <p>
              Gracias por su interes en FASHIONSHOP. Si tiene alguna pregunta o
              comentario acerca de productos o servicios, necesita atencion al
              cliente o desea hablar con alguno de nosotros, utilice la
              siguiente informacion de contacto y le estaremos respondiendo a la
              brevedad.
            </p>

            <img src="Imagenes/contactenosimagen.jpg" />



<form action="a" method="post" name=formulario id="formulario" onsubmit=" return comprobar()" >
  
<div class="space"></div>

<div class="contenedor">

<div class="row">

  <div class="col-10">
   

<div class="form-group">
    <label for="">Nombre</label>
    <input type="text" class="form-control"name="nombre" placeholder="Escriba su nombre">
    
  </div>

<div class="form-group">
    <label for="">Apellido</label>
    <input type="text" class="form-control"name ="apellido" placeholder="Escriba su apellido">
    
  </div>

<div class="form-group">
    <label for="">Edad</label>
    <input type="text" class="form-control"name="edad" placeholder="Escriba su edad">
    
  </div>

<div class="form-group">
    <label for="">Contraseña</label>
    <input type="password" class="form-control"name="contraseña" placeholder="Escriba su contraseña">
    
  </div>

<div class="form-group">
   <label for="">Repetir contraseña</label>
    <input type="password" class="form-control"name="recontraseña" placeholder="Repita la contraseña">
    
  </div>

  <input type="submit" value="Enviar" class="btn-primary text-uppercase">

</div>
</div>
</div>
  

</form>





            <iframe src="Pagina web\Javascript\Formulario/formulario.html" height="500" width="1200"></iframe> //Twitter
          </div>
        </div>
      </div>
    </section>

    <footer>
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
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </footer>

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
