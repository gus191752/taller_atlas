<?php

	include('conexion_usuarios.php');  //llama al archivo conexion.php
	$conn_usuario = new conexion_db_usuarios();  
	$jerarquia='0';
	$correo=$_POST['correo'];
	$cedula_usuario=$_POST['cedula_usuario'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$apellido=$_POST['apellido'];
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$telefono=$_POST['telefono'];

///////////////////////////////////// MODIFICAR  ///////////////////////////////////////////////
$consulta_update = "UPDATE registro_usuarios SET jerarquia='$jerarquia',  correo='$correo', nombre='$nombre', apellido='$apellido', usuario='$usuario' , clave='$clave', telefono='$telefono' WHERE cedula_usuario='$cedula_usuario'";//nserta datos en la tabla
echo $consulta_update;
$update = mysqli_query($conn_usuario->conectar_usuarios(),$consulta_update); //inserta nuevos productos

if ($update)
{
	//echo "si se modifico";
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrar_crud_conajax_usuarios.php");

}
else
{
	echo"no se modifico";
}


?>