<?php 

session_start();

$columnas=['id_trabajo', 'cedula_cliente', 'placas', 'vin', 'modelo_marca', 'kilometraje', 'cedula_trabajador', 'titulo_trabajo','descripcion_falla','diagnostico_solucion','inspeccion_final','fecha_ingreso','fecha_egreso','costo_reparacion'];

$tabla="registro_trabajos_taller";

$campo_taller = isset($_POST['campo_taller']) ? $_POST['campo_taller'] : $campo_taller= "" ;
//$campo_taller='gus'; //prueba para probar la peticion

$peticion_where='';

if ($campo_taller != null)
	{
		$peticion_where = "WHERE (";
		$contador_columnas=(count($columnas));
		for ($i = 0; $i < $contador_columnas; $i++)
			{
			$peticion_where .= $columnas[$i] . " LIKE '%" . $campo_taller . "%' OR ";
			}
		$peticion_where = substr_replace($peticion_where, "", -3);
		$peticion_where .= ")"; 
	}
	
$query = "SELECT " . implode(", ", $columnas) . " FROM $tabla $peticion_where " ; //OJO
//echo $query;
//exit;  // corta el bucle para ver la peticion
$conexion= new mysqli('localhost','root','','basedatos');
$resultado=$conexion->query($query);
$numeros_columnas = $resultado->num_rows;

$html='';

if ($numeros_columnas>0)
	{
	while($row = $resultado->fetch_assoc())
		{
		$html .= '<tr>';
		$html .= '<td>' . $row['id_trabajo'] . '</td>';
		$html .= '<td>' . $row['cedula_cliente'] . '</td>';
		$html .= '<td>' . $row['placas'] . '</td>';
		$html .= '<td>' . $row['vin'] . '</td>';
		$html .= '<td>' . $row['modelo_marca'] . '</td>';
		$html .= '<td>' . $row['kilometraje'] . '</td>';
		$html .= '<td>' . $row['cedula_trabajador'] . '</td>';
		$html .= '<td>' . $row['titulo_trabajo'] . '</td>';
		$html .= '<td>' . $row['descripcion_falla'] . '</td>';
		$html .= '<td>' . $row['diagnostico_solucion'] . '</td>';
		$html .= '<td>' . $row['inspeccion_final'] . '</td>';
		$html .= '<td>' . $row['fecha_ingreso'] . '</td>';
		$html .= '<td>' . $row['fecha_egreso'] . '</td>';
		$html .= '<td>' . $row['costo_reparacion'] . '</td>';
		$html .= '<th><a href="modificar_crud_taller.php?id_trabajo=' . $row['id_trabajo'] . '">Modificar</a></th>';
		$html .= '<th><a href="proceso_eliminar_crud_taller.php?id_trabajo=' . $row['id_trabajo'] . '">Eliminar</a></th>';
		$html .= '</tr>';

		}
	}
else
	{
		$html .= '<tr>';
		$html .= '<td colspan="8" >No Hay Resultados</td>';
		$html .= '</tr>';
	}
echo json_encode($html, JSON_UNESCAPED_UNICODE);
//echo json_last_error($html);
//echo $html;
//echo $numeros_columnas;
 ?>
