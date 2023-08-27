<?php
session_start();
if ($_SESSION['jerarquia']!='9')
{
    header('location:index.html');
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
					<li class="contenedor-menu-item"><a href="#productos" class="contenedor-menu-link contenedor-link">Productos y Servicios</a></li>
					<li class="contenedor-menu-item"><a href="#informacion" class="contenedor-menu-link contenedor-link">Informacion Tecnica</a></li>
					<li class="contenedor-menu-item"><a href="#bitacora" class="contenedor-menu-link contenedor-link">Bitacora de Mtto</a></li>
					<li class="contenedor-menu-item"><a href="#contacto" class="contenedor-menu-link contenedor-link ">Contactanos</a></li>
				</ul>
		</nav>
	</header>
    
    <div align="left" class="membrete">
        <h1 >Administrador </h1>
    </div>

<br>
<br>

<a href="mostrar_crud_conajax_productos.php">Servicios y Productos</a>
<br>
<a href="mostrarconajax_clientes.php">Clientes</a>
<br>
<a href="mostrarconajax_Trabajadores.php">Trabajadores</a>
<br>
<a href="mostrar_crud_conajax_usuarios.php">Usuarios</a>
<br>
    <a href="mostrar_crud_taller_ajax.php">Registro de trabajos del Taller</a>
<br>
<a href="mostrar_conajax_ventas.php">Ventas</a>

<br>
<br>
    <footer class="footer" id="contacto">
        <h4>Soluciones gm 83 c.a.</h4>
        <h4>Rif J-50411101-5</h4>
        <h4>Centro Comercial La Romana local B4, av Miranda c/c av ayacucho, Maracay</h4>
        <h4>tlf: 0412-147.19.97</h4>
        <h4>Correo: talleratlasmcy@gmail.com</h4>
        <h4>Instagram: @talleratlasmcy</h4>
    </footer>

</body>
</html>