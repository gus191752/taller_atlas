<?php

class conexion_db_ventas
{
	const user='root';
	const pass='';
	const db='basedatos';
	const servidor='localhost';

	public function conectarventas()
	{
		$conectar_ventas = new mysqli(self::servidor,self::user,self::pass,self::db);

		if ($conectar_ventas->connect_errno)
		{
			die("error en la conexion".$conectar_ventas->connect_error);
			echo"no conectado";
		}
		if ($conectar_ventas)
		{ 
			
			//echo"datos guardados";
			//header("location:cargar_crud_ventas.php");
		}

		return $conectar_ventas;
	}
}

?>