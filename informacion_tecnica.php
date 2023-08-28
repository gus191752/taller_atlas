
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
					<li class="contenedor-menu-item"><a href="#informacion" class="contenedor-menu-link contenedor-link">Informacion Tecnica</a></li>
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
    
    <div align="left" class="membrete">
        <h1 >Taller Atlas </h1>
        <br>
        <h1>Te obsequia los siguientes libros</h1>
        <br>
        <h2>Su taller de Confianza!!!</h2>
        <br>
        
<a href="https://drive.google.com/file/d/1C_88V15ihVSqPeifIkxP7U4QPk5f3pqa/view?usp=drive_link">1.  10 PASOS PARA REPARAR UN AUTO QUE NO ENCIENDE</a>
<br>
<a href="https://drive.google.com/file/d/1CcWRF12DJcyj47ibmw3goxBWwnxFEJQW/view?usp=drive_link">2.  DIAGNOSTICO AUTOMOTRIZ CON OSCILOSCOPIO</a>
<br>
<br>
<br>
<a href="index.php">Volver al Inicio</a>
<br>
    </div>
    

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