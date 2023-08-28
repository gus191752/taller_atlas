<?php
session_start();
if (empty($_SESSION['cedula_usuario']))
{
   // header('location:login.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Atlas</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="https://kit.fontawesome.com/779ae99c75.js" crossorigin="anonymous"></script>
	<script defer src="js/animacion.js"></script>
</head>

<body class="contenedorTotal">
    <header class="cabezera">
		<nav class="contenedor">
			<a href="#" class="logo contenedor-link">Taller Atlas</a>
			<button class="contenedor-boton aria-label="Abrir menú"><i class="fa-solid fa-bars"></i>
			</button>
				<ul class="contenedor-menu">
					<li class="contenedor-menu-item"><a href="#ubicanos" class="contenedor-menu-link contenedor-link">Ubicanos</a></li>
					<li class="contenedor-menu-item"><a href="mostrar_crud_conajax_productos_publico.php" class="contenedor-menu-link contenedor-link">Productos y Servicios</a></li>
					<li class="contenedor-menu-item"><a href="informacion_tecnica.php" class="contenedor-menu-link contenedor-link">Informacion Tecnica</a></li>
					<li class="contenedor-menu-item"><a href="mostrar_crud_taller_ajax_publico.php" class="contenedor-menu-link contenedor-link">Bitacora de Mtto</a></li>
					<?php 
                    if (empty($_SESSION['cedula_usuario'])){
                    echo '<li class="contenedor-menu-item"><a href="login.php" class="contenedor-menu-link contenedor-link ">Abrir Sesion</a></li>';  
                    
                    }
                    else
                    {
                    echo '<li class="contenedor-menu-item"><a href="login_cerrar_sesion.php" class="contenedor-menu-link contenedor-link ">Cerrar Sesion</a></li>';
                    
                    }
                    ?>
                    </ul>
		</nav>
	</header>
    <h1>Registrar Nuevo Usuario</h1>
    <div class='formulario_usuario'>
        <form action="proceso_insertar_crud_usuarios.php" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="correo" placeholder="Correo..." value=""><br><br>
            <input type="text" REQUIRED name="cedula_usuario" placeholder="Cedula..." value=""><br><br>
            <input type="text" REQUIRED name="nombre" placeholder="Nombre..." value=""><br><br>
            <input type="text" REQUIRED name="apellido" placeholder="Apellido..." value=""><br><br>
            <input type="text" REQUIRED name="usuario" placeholder="Usuario..." value=""><br><br>
            <input type="text" REQUIRED name="password" placeholder="Password..." value=""><br><br>
            <input type="text" name="telefono" placeholder="Telefono..." value=""><br><br>
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <br>
    <a href="administrador.php">Volver</a>
<br>
</body>
</html>