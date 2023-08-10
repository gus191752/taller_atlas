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
	

///////////////////////////////////// MODIFICAR  ///////////////////////////////////////////////
$consulta_update = "UPDATE productos SET referencia='$referencia', descripcion='$descripcion',precio='$precio',  cantidad='$cantidad' , marca='$marca', imagen1='$imagen1', imagen2='$imagen2' WHERE codigo='$codigo'";//nserta datos en la tabla

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