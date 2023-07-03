<?php

include('conexion_db_taller.php');  //llama al archivo conexion.php
$conn = new conexion_db_taller();  

//if($_SERVER['REQUEST_METHOD']=='POST')
	$cedula_trabajador=$_POST['cedula_trabajador'];
	$nombre_trabajador=$_POST['nombre_trabajador'];
	$telefono_trabajador=$_POST['telefono_trabajador'];
	$direccion_trabajador=$_POST['direccion_trabajador'];
	$fecha_ingreso_trabajador=$_POST['fecha_ingreso_trabajador'];
	$fecha_egreso_trabajador=$_POST['fecha_egreso_trabajador'];

///////////////////////////////////// MODIFICAR  ///////////////////////////////////////////////
$consulta_update = "UPDATE registro_trabajadores SET nombre_trabajador='$nombre_trabajador', telefono_trabajador='$telefono_trabajador', direccion_trabajador='$direccion_trabajador', fecha_ingreso_trabajador='$fecha_ingreso_trabajador', fecha_egreso_trabajador='$fecha_egreso_trabajador' WHERE cedula_trabajador='$cedula_trabajador'";//nserta datos en la tabla

$update = mysqli_query($conn->conectartaller(),$consulta_update); //inserta nuevos productos

if ($update)
{
	//echo "si se modifico";
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrarconajax_trabajadores.php");

}
else
{
	echo"no se modifico";
}


?>