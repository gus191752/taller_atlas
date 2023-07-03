<?php

include('conexion_db_taller.php');  //llama al archivo conexion.php
$conn = new conexion_db_taller();  

//if($_SERVER['REQUEST_METHOD']=='POST')
$id_trabajo= $_REQUEST['id_trabajo']; 

///////////////////////////////////// ELIMINAR  ///////////////////////////////////////

$consulta_delete = "DELETE FROM registro_trabajos_taller  WHERE id_trabajo='$id_trabajo'";//nserta datos en la tabla

$delete = mysqli_query($conn->conectartaller(),$consulta_delete); //inserta nuevos productos

if ($delete)
{
	//echo "si se elimino";
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrar_crud_taller_ajax.php");

}
else
{
	echo"no se elimino";
}


?>