<?php

class conexion_db_taller
{
	const user='root';
	const pass='';
	const db='basedatos';
	const servidor='localhost';

	public function conectartaller()
	{
		$conectar_taller = new mysqli(self::servidor,self::user,self::pass,self::db);

		if ($conectar_taller->connect_errno)
		{
			die("error en la conexion".$conectar_taller->connect_error);
			echo"no conectado";
		}
		if ($conectar_taller)
		{ 
			
			echo"datos guardados";
			//header("location:mostrarconajax.php");
		}

		return $conectar_taller;
	}
}

?>