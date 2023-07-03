<?php

include('conexion_db_taller.php');  //llama al archivo conexion.php
$conn = new conexion_db_taller();;  

//if($_SERVER['REQUEST_METHOD']=='POST')
$cedula_trabajador= $_REQUEST['cedula_trabajador']; 

///////////////////////////////////// ELIMINAR  ///////////////////////////////////////

$consulta_delete = "DELETE FROM registro_trabajadores  WHERE cedula_trabajador='$cedula_trabajador'";//nserta datos en la tabla

$delete = mysqli_query($conn->conectartaller(),$consulta_delete); //inserta nuevos productos

if ($delete)
{
	//echo "si se elimino";
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrarconajax_trabajadores.php");

}
else
{
	echo"no se elimino";
}


?>