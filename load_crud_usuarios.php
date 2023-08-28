<?php 

$columnas=[ 'jerarquia' ,'correo', 'cedula_usuario', 'nombre', 'apellido', 'usuario', 'clave', 'telefono'];

$tabla="registro_usuarios";

$campo = isset($_POST['campo']) ? $_POST['campo'] : $campo= "" ; //$campo = $_POST['campo'] ; // el error variable indefinida bloquea los datos json
//$campo='zzz'; //prueba para probar la peticion

$peticion_where='';

if ($campo != null)
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
		$html .= '<td>' . $row['jerarquia'] . '</td>';
		$html .= '<td>' . $row['correo'] . '</td>';
		$html .= '<td>' . $row['cedula_usuario'] . '</td>';
		$html .= '<td>' . $row['nombre'] . '</td>';
		$html .= '<td>' . $row['apellido'] . '</td>';
		$html .= '<td>' . $row['usuario'] . '</td>';
		$html .= '<td>' . $row['clave'] . '</td>';
		$html .= '<td>' . $row['telefono'] . '</td>';
		$html .= '<th><a href="modificar_crud_usuarios.php?cedula_usuario=' . $row['cedula_usuario'] . '">Modificar</a></th>';
		$html .= '<th><a href="proceso_eliminar_crud_usuarios.php?cedula_usuario=' . $row['cedula_usuario'] . '">Eliminar</a></th>';
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
