<?php

include('conexion_db_taller.php');  //llama al archivo conexion.php
$conn_taller = new conexion_db_taller();  

//if($_SERVER['REQUEST_METHOD']=='POST')
	//$id_trabajo=$_POST['id_trabajo'];
	$cedula_cliente=$_POST['cedula_cliente'];
	$placas=$_POST['placas'];
	$vin= $_POST['vin'];
	$modelo_marca=$_POST['modelo_marca'];
	$kilometraje=$_POST['kilometraje'];
	$cedula_trabajador=$_POST['cedula_trabajador'];
	$titulo_trabajo= $_POST['titulo_trabajo'];
	$descripcion_falla=$_POST['descripcion_falla'];
	$diagnostico_solucion=$_POST['diagnostico_solucion'];
	$inspeccion_final=$_POST['inspeccion_final'];
	$fecha_ingreso=$_POST['fecha_ingreso'];
	$fecha_egreso=$_POST['fecha_egreso'];
	$costo_reparacion=$_POST['costo_reparacion'];


///////////////////////////////////// INSERTAR  ///////////////////////////////////////////////
$consulta_insert_taller = "INSERT INTO registro_trabajos_taller (cedula_cliente, placas, vin , modelo_marca, kilometraje, cedula_trabajador, titulo_trabajo , descripcion_falla, diagnostico_solucion, inspeccion_final, fecha_ingreso, fecha_egreso, costo_reparacion ) VALUES ('$cedula_cliente' , '$placas' , '$vin' ,            '$modelo_marca' , '$kilometraje' , '$cedula_trabajador' , '$titulo_trabajo' ,                  '$descripcion_falla' , '$diagnostico_solucion' , '$inspeccion_final' , '$fecha_ingreso' , '$fecha_egreso' , '$costo_reparacion' )";

$consulta_insert_rendimiento_trabajador = "INSERT INTO rendimiento_trabajador ( id_trabajo, cedula_trabajador, placas , modelo_marca , titulo_trabajo, costo_reparacion , fecha_egreso ) VALUES ( '$id_trabajo' ,  '$cedula_trabajador' ,  '$placas',  '$modelo_marca' , '$titulo_trabajo' , '$costo_reparacion' , '$fecha_egreso') "; 

$insert_taller = mysqli_query($conn_taller->conectartaller(),$consulta_insert_taller); 

$insert_rendimiento_trabajador = mysqli_query($conn_taller->conectartaller(),$consulta_insert_rendimiento_trabajador);


if ($insert_taller)
{
	//header("location:mostrar_crud_cartera_productos.php");
	header("location: mostrar_crud_taller_ajax.php");
}
else
{
	echo"no se inserto";
}



?>