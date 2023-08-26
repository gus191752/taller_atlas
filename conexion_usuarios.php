<?php

class conexion_db_usuarios
{
	const user='root';
	const pass='';
	const db='basedatos';
	const servidor='localhost';

	public function conectar_usuarios()
	{
		$conectar_usuarios = new mysqli(self::servidor,self::user,self::pass,self::db);

		if ($conectar_usuarios->connect_errno)
		{
			die("error en la conexion".$conectar_usuarios->connect_error);
			echo"no conectado";
		}
		if ($conectar_usuarios)
		{ 
			
			//echo"datos guardados";
			//header("location:mostrarconajax.php");
		}

		return $conectar_usuarios;
	}
}

?>