<?php

include('conexion_usuarios.php');  //llama al archivo conexion.php
$conn_usuario = new conexion_db_usuarios();;  

//if($_SERVER['REQUEST_METHOD']=='POST')
$cedula_usuario= $_REQUEST['cedula_usuario']; 

///////////////////////////////////// ELIMINAR  ///////////////////////////////////////

$consulta_delete = "DELETE FROM registro_usuarios  WHERE cedula_usuario='$cedula_usuario'";//nserta datos en la tabla

$delete = mysqli_query($conn_usuario->conectar_usuarios(),$consulta_delete); //inserta nuevos productos

if ($delete)
{
	//echo "si se elimino";
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrar_crud_conajax_usuarios.php");

}
else
{
	echo"no se elimino";
}


?>