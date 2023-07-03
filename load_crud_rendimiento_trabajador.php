<?php 

$columnas=[ 'id' , 'id_trabajo' , 'cedula_trabajador', 'placas' , 'modelo_marca',  'titulo_trabajo', 'costo_reparacion', 'fecha_egreso'];

$tabla="rendimiento_trabajador";

$campo_trabajador = isset($_POST['campo_trabajador']) ? $_POST['campo_trabajador'] : $campo_trabajador= "" ; //$campo = $_POST['campo_trabajadores'] ; // el error variable indefinida bloquea los datos json
//$campo='zzz'; //prueba para probar la peticion

$peticion_where='';

if ($campo_trabajador != null)
	{
		$peticion_where = "WHERE (";
		$contador_columnas=(count($columnas));
		for ($i = 0; $i < $contador_columnas; $i++)
			{
			$peticion_where .= $columnas[$i] . " LIKE '%" . $campo_trabajador . "%' OR ";
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
		$html .= '<td>' . $row['id'] . '</td>';
		$html .= '<td>' . $row['id_trabajo'] . '</td>';
		$html .= '<td>' . $row['cedula_trabajador'] . '</td>';
		$html .= '<td>' . $row['placas'] . '</td>';
		$html .= '<td>' . $row['modelo_marca'] . '</td>';
		$html .= '<td>' . $row['titulo_trabajo'] . '</td>';
		$html .= '<td>' . $row['costo_reparacion'] . '</td>';
		$html .= '<td>' . $row['fecha_egreso'] . '</td>';
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
