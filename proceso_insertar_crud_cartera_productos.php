<?php

include('conexion.php');  //llama al archivo conexion.php
$conn = new conexion_db_carrito();  

//if($_SERVER['REQUEST_METHOD']=='POST')
	$codigo=$_POST['codigo'];
	$referencia=$_POST['referencia'];
	$descripcion=$_POST['descripcion'];
	$precio=$_POST['precio'];
	$cantidad=$_POST['cantidad'];
	$marca=$_POST['marca'];
	//$imagen1=addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));
	//$imagen2=addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
	
	

///////////////////////////////////// INSERTAR  ///////////////////////////////////////////////
$consulta_insert = "INSERT INTO productos (codigo, referencia, descripcion, precio, cantidad, marca, imagen1, imagen2 ) VALUES('$codigo', '$referencia', '$descripcion','$precio', '$cantidad', '$marca', '$imagen1','$imagen2')";

$insert = mysqli_query($conn->conectarcarrito(),$consulta_insert); 

if ($insert)
{
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrar_crud_conajax_productos.php");
}

?>