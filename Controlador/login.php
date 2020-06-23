<?php


	include_once 'conexion.php';
		$usuario=root($_POST['usuario'])?$_POST['usuario']:"";
		$con=new conexion();
		$con=$con->conectar();

		if($con){
				$sql="SELECT nombre FROM login WHERE usuario = $usuario";

					$consulta=$con->prepare($sql);
					$consulta->execute();
					if ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
						session_start();
						$_SESSION['loggedin'] = true;
						$_SESSION['nombre'] = $fila['nombre'];
						$_SESSION['cedula'] = $fila['cedula'];
						$_SESSION['rol'] = "EGRESADO";
						header("Location: ../resultado.php");
					} 
					else {
						echo "El usuario no existe";
						header('refresh:4; url-../index.php');
					}
				}


?>			