<?php

include('conexion_db_clientes.php');  //llama al archivo conexion.php
$conn_cliente = new conexion_db_clientes();  

//if($_SERVER['REQUEST_METHOD']=='POST')
	$cedula_cliente=$_POST['cedula_cliente'];
	$nombre_cliente=$_POST['nombre_cliente'];
	$telefono_cliente=$_POST['telefono_cliente'];
	$direccion_cliente=$_POST['direccion_cliente'];

///////////////////////////////////// MODIFICAR  ///////////////////////////////////////////////
$consulta_update = "UPDATE registro_cliente_taller SET nombre_cliente='$nombre_cliente', telefono_cliente='$telefono_cliente', direccion_cliente='$direccion_cliente' WHERE cedula_cliente='$cedula_cliente'";//nserta datos en la tabla

$update = mysqli_query($conn_cliente->conectarclientes(),$consulta_update); //inserta nuevos productos

if ($update)
{
	//echo "si se modifico";
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrarconajax_clientes.php");

}
else
{
	echo"no se modifico";
}


?>