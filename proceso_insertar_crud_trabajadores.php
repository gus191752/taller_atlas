<?php

include('conexion_db_taller.php');  //llama al archivo conexion.php
$conn_trabajadores = new conexion_db_taller();  

	$cedula_trabajador=$_POST['cedula_trabajador'];
	$nombre_trabajador=$_POST['nombre_trabajador'];
	$telefono_trabajador=$_POST['telefono_trabajador'];
	$direccion_trabajador=$_POST['direccion_trabajador'];
	$fecha_ingreso_trabajador=$_POST['fecha_ingreso_trabajador'];
	$fecha_egreso_trabajador=$_POST['fecha_egreso_trabajador'];
	

///////////////////////////////////// INSERTAR  ///////////////////////////////////////////////
$consulta_insert_trabajadores = "INSERT INTO registro_trabajadores (cedula_trabajador, nombre_trabajador, telefono_trabajador, direccion_trabajador, fecha_ingreso_trabajador, fecha_egreso_trabajador) VALUES ('$cedula_trabajador','$nombre_trabajador','$telefono_trabajador','$direccion_trabajador','$fecha_ingreso_trabajador','$fecha_egreso_trabajador')";

$insert_trabajadores = mysqli_query($conn_trabajadores->conectartaller(),$consulta_insert_trabajadores); 

if ($insert_trabajadores)
{
	header("location:mostrarconajax_trabajadores.php");
}
else
{
	echo "no se inserto";
	header("location:mostrarconajax_trabajadores.php");
}


?>
