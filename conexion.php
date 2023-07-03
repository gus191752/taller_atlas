<?php

class conexion_db_carrito
{
	const user='root';
	const pass='';
	const db='basedatos';
	const servidor='localhost';

	public function conectarcarrito()
	{
		$conectar = new mysqli(self::servidor,self::user,self::pass,self::db);

		if ($conectar->connect_errno)
		{
			die("error en la conexion".$conectar->connect_error);
			echo"no conectado";
		}
		if ($conectar)
		{ 
			
			//echo"datos guardados";
			//header("location:mostrarconajax.php");
		}

		return $conectar;
	}
}

?>