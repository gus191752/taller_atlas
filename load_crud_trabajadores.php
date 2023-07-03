<?php 

$columnas=['cedula_trabajador', 'nombre_trabajador', 'telefono_trabajador', 'direccion_trabajador', 'fecha_ingreso_trabajador', 'fecha_egreso_trabajador'];

$tabla="registro_trabajadores";

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
		$html .= '<td>' . $row['cedula_trabajador'] . '</td>';
		$html .= '<td>' . $row['nombre_trabajador'] . '</td>';
		$html .= '<td>' . $row['telefono_trabajador'] . '</td>';
		$html .= '<td>' . $row['direccion_trabajador'] . '</td>';
		$html .= '<td>' . $row['fecha_ingreso_trabajador'] . '</td>';
		$html .= '<td>' . $row['fecha_egreso_trabajador'] . '</td>';
		$html .= '<th><a href="modificar_crud_cartera_trabajadores.php?cedula_trabajador=' . $row['cedula_trabajador'] . '">Modificar</a></th>';
		$html .= '<th><a href="proceso_eliminar_crud_trabajadores.php?cedula_trabajador=' . $row['cedula_trabajador'] . '">Eliminar</a></th>';
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
