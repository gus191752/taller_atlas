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
	$clave=$_POST['password'];
	$telefono=$_POST['telefono'];

///////////////////////////////////// INSERTAR  ///////////////////////////////////////////////
$consulta_insert_usuario = "INSERT INTO registro_usuarios (jerarquia,correo, cedula_usuario, nombre, apellido, usuario, clave, telefono) VALUES ('$jerarquia', '$correo','$cedula_usuario','$nombre','$apellido','$usuario','$clave','$telefono')";
//echo $consulta_insert_usuario;
$insert_usuario = mysqli_query($conn_usuario->conectar_usuarios(),$consulta_insert_usuario); 

if ($insert_usuario)
{
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrar_crud_conajax_usuarios.php");
}
else
{
	echo "no se inserto";
}


?>