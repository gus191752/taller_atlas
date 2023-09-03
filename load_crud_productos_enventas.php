<?php 

$columnas=['codigo', 'referencia', 'descripcion','precio', 'cantidad', 'marca', 'imagen1', 'imagen2'];

$tabla="productos";

$campo = isset($_POST['campo']) ? $_POST['campo'] : $campo= "" ; //$campo = $_POST['campo'] ; // el error variable indefinida bloquea los datos json
//$campo='zzz'; //prueba para probar la peticion

$peticion_where='';

if ($campo != null)
	{
		$peticion_where = "WHERE (";
		$contador_columnas=(count($columnas));
		for ($i = 0; $i < $contador_columnas; $i++)
			{
			$peticion_where .= $columnas[$i] . " LIKE '%" . $campo . "%' OR ";
			}
		$peticion_where = substr_replace($peticion_where, "", -3);
		$peticion_where .= ")"; 
	}
		
$query = "SELECT " . implode(", ", $columnas) . " FROM $tabla $peticion_where AND $columnas[4] != 0  " ; //OJO
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
		$html .= '<td>' . $row['codigo'] . '</td>';
		$html .= '<td>' . $row['referencia'] . '</td>';
		$html .= '<td>' . $row['descripcion'] . '</td>';
		$html .= '<td>' . $row['precio'] . '</td>';
		$html .= '<td>' . $row['cantidad'] . '</td>';
		$html .= '<td>' . $row['marca'] . '</td>';
		//$html .= '<td>' . $row['imagen1'] . '</td>';
		//$html .= '<td>'.'<img height="70px" src="data:image/jpg;base64,base64_encode(' .$row['codigo'] . ')">'.'</td>';  // hay q resolver este punto
		 
		
		
		$html .= '<th><a href="cargar_crud_ventas.php?codigo=' . $row['codigo'] . '">Seleccionar</a></th>';
		//$html .= '<th><a href="proceso_eliminar_crud_cartera_productos.php?codigo=' . $row['codigo'] . '">Eliminar</a></th>';
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
