<?php

include('conexion.php');  //llama al archivo conexion.php
$conn = new conexion_db_carrito();;  

//if($_SERVER['REQUEST_METHOD']=='POST')
$codigo= $_REQUEST['codigo']; 

///////////////////////////////////// ELIMINAR  ///////////////////////////////////////

$consulta_delete = "DELETE FROM productos  WHERE codigo='$codigo'";//nserta datos en la tabla

$delete = mysqli_query($conn->conectarcarrito(),$consulta_delete); //inserta nuevos productos

if ($delete)
{
	//echo "si se elimino";
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrarconajax.php");

}
else
{
	echo"no se elimino";
}


?>