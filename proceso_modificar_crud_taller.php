<?php

include('conexion_db_taller.php');  //llama al archivo conexion.php
$conn_taller = new conexion_db_taller();  

//if($_SERVER['REQUEST_METHOD']=='POST')
	$id_trabajo=$_POST['id_trabajo'];
	$cedula_cliente=$_POST['cedula_cliente'];
	$placas=$_POST['placas'];
	$vin=$_POST['vin'];
	$modelo_marca=$_POST['modelo_marca'];
	$kilometraje=$_POST['kilometraje'];
	$cedula_trabajador=$_POST['cedula_trabajador'];
	$titulo_trabajo=$_POST['titulo_trabajo'];
	$descripcion_falla=$_POST['descripcion_falla'];
	$diagnostico_solucion=$_POST['diagnostico_solucion'];
	$inspeccion_final=$_POST['inspeccion_final'];
	$fecha_ingreso=$_POST['fecha_ingreso'];
	$fecha_egreso=$_POST['fecha_egreso'];
	$costo_reparacion=$_POST['costo_reparacion'];

///////////////////////////////////// MODIFICAR  ///////////////////////////////////////////////
$consulta_update = "UPDATE registro_trabajos_taller SET cedula_cliente ='$cedula_cliente', placas ='$placas', vin='$vin', modelo_marca='$modelo_marca', kilometraje = '$kilometraje', cedula_trabajador ='$cedula_trabajador', titulo_trabajo ='$titulo_trabajo', descripcion_falla = '$descripcion_falla', diagnostico_solucion = '$diagnostico_solucion', inspeccion_final = '$inspeccion_final' , fecha_ingreso = '$fecha_ingreso' , fecha_egreso= '$fecha_egreso', costo_reparacion = '$costo_reparacion' WHERE id_trabajo='$id_trabajo'";//nserta datos en la tabla

$update = mysqli_query($conn_taller->conectartaller(),$consulta_update); //inserta nuevos productos

if ($update)
{
	//echo "si se modifico";
	header("location:mostrar_crud_taller_ajax.php");

}
else
{
	echo"no se modifico";
}


?>