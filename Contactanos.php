<?php 
include "header.php"
?>


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

            <img src="" />



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





            <iframe src="Pagina web\Javascript\Formulario/formulario.html" height="500" width="1200"></iframe> 
            
          </div>
        </div>
      </div>
    </section>

    


