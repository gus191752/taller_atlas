<?php

include('conexion_db_taller.php');  //llama al archivo conexion.php
$conn = new conexion_db_taller();  

//if($_SERVER['REQUEST_METHOD']=='POST')
$cedula_cliente= $_REQUEST['cedula_cliente']; 

///////////////////////////////////// ELIMINAR  ///////////////////////////////////////

$consulta_delete = "DELETE FROM registro_cliente_taller  WHERE cedula_cliente='$cedula_cliente'";//nserta datos en la tabla

$delete = mysqli_query($conn->conectartaller(),$consulta_delete); //inserta nuevos productos

if ($delete)
{
	//echo "si se elimino";
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrarconajax_clientes.php");

}
else
{
	echo"no se elimino";
}


?>