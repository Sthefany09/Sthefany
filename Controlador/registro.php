<?php
include_once 'conexion.php';	
	$con=new Conexion();
	$con=$con->conectar();	 
	if($con){      
			$sql="INSERT INTO `login` ( `usuario` , `contrasena` )
			VALUES ('$_POST[usuario]','$_POST[contrasena]')";	
                    $consulta=$con->prepare($sql);
         			$consulta->execute();  
 					header("Location: ../index.php");   
 }
?>    


		