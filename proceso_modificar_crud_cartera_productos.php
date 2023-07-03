<?php

include('conexion.php');  //llama al archivo conexion.php
$conn = new conexion_db_carrito();  

//if($_SERVER['REQUEST_METHOD']=='POST')
	$codigo= $_REQUEST['codigo']; 
	$descripcion=$_POST['descripcion'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$tipo=$_POST['tipo'];
	$fecha_fabricacion=$_POST['fecha_fabricacion'];
	//$imagen1=addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));
	//$imagen2=addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
	$cantidad=$_POST['cantidad'];
	$precio=$_POST['precio'];

///////////////////////////////////// MODIFICAR  ///////////////////////////////////////////////
$consulta_update = "UPDATE productos SET descripcion='$descripcion', marca='$marca', modelo='$modelo', tipo='$tipo', fecha_fabricacion='$fecha_fabricacion', imagen1='$imagen1', imagen2='$imagen2', fecha=NOW(), cantidad='$cantidad', precio='$precio' WHERE codigo='$codigo'";//nserta datos en la tabla

$update = mysqli_query($conn->conectarcarrito(),$consulta_update); //inserta nuevos productos

if ($update)
{
	//echo "si se modifico";
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrar_crud_conajax_productos.php");

}
else
{
	echo"no se modifico";
}


?>