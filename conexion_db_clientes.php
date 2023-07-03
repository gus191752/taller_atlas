<?php

class conexion_db_clientes
{
	const user='root';
	const pass='';
	const db='basedatos';
	const servidor='localhost';

	public function conectarclientes()
	{
		$conectar_clientes = new mysqli(self::servidor,self::user,self::pass,self::db);

		if ($conectar_clientes->connect_errno)
		{
			die("error en la conexion".$conectar_clientes->connect_error);
			echo"no conectado";
		}
		if ($conectar_clientes)
		{ 
			
			echo"datos guardados";
			//header("location:mostrarconajax.php");
		}

		return $conectar_clientes;
	}
}

?>