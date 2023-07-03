<?php

include('conexion_db_clientes.php');  //llama al archivo conexion.php
$conn_cliente = new conexion_db_clientes();  

	$cedula_cliente=$_POST['cedula_cliente'];
	$nombre_cliente=$_POST['nombre_cliente'];
	$telefono_cliente=$_POST['telefono_cliente'];
	$direccion_cliente=$_POST['direccion_cliente'];
	

///////////////////////////////////// INSERTAR  ///////////////////////////////////////////////
$consulta_insert_cliente = "INSERT INTO registro_cliente_taller (cedula_cliente, nombre_cliente, telefono_cliente, direccion_cliente) VALUES ('$cedula_cliente','$nombre_cliente','$telefono_cliente','$direccion_cliente')";

$insert_cliente = mysqli_query($conn_cliente->conectarclientes(),$consulta_insert_cliente); 

if ($insert_cliente)
{
	//header("location:mostrar_crud_cartera_productos.php");
	header("location:mostrarconajax_clientes.php");
}
else
{
	echo "no se inserto";
}

?>



*/