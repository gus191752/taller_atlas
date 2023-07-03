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
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrarconajax_trabajadores.php");
}
else
{
	echo "no se inserto";
}

?>

/*


include('conexion.php');  //llama al archivo conexion.php
$conn = new conexion_db_carrito();  

//if($_SERVER['REQUEST_METHOD']=='POST')
	$codigo=$_POST['codigo'];
	$descripcion=$_POST['descripcion'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$tipo=$_POST['tipo'];
	$fecha_fabricacion=$_POST['fecha_fabricacion'];
	$imagen1=addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));
	$imagen2=addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
	$cantidad=$_POST['cantidad'];
	$precio=$_POST['precio'];

///////////////////////////////////// INSERTAR  ///////////////////////////////////////////////
$consulta_insert = "INSERT INTO productos (codigo, descripcion, marca, modelo, tipo, fecha_fabricacion, imagen1, imagen2, fecha, cantidad, precio) VALUES('$codigo','$descripcion','$marca','$modelo','$tipo','$fecha_fabricacion','$imagen1','$imagen2', NOW(),'$cantidad','$precio')";

$insert = mysqli_query($conn->conectarcarrito(),$consulta_insert); 

if ($insert)
{
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrar_crud_conajax_productos.php");
}


*/