<?php

include('conexion.php');  //llama al archivo conexion.php
$conn = new conexion_db_carrito();  

//if($_SERVER['REQUEST_METHOD']=='POST')
	$codigo=$_POST['codigo'];
	$descripcion=$_POST['descripcion'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$tipo=$_POST['tipo'];
	$fecha_fabricacion=$_POST['fecha_fabricacion'];
	//$imagen1=addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));
	//$imagen2=addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
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

?>