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
    
    <div align="left" class="membrete">
        <h1 >Bienvenido!! a Taller Atlas </h1>
        <br>
        <img class="imagen_div" src="imagenes/logo redondo en formato png.png" alt="">
        <h2>Su taller de Confianza!!!</h2>
    </div>
    

    <div style="background-image: url(imagenes/fondo_mecanico_trabajando.png);" class="c1">
        <div  class="quienes somos">
            <h3>¿Quienes Somos?</h3>
            <h4>
                Somos un taller mecánico automotriz con más de 10 años de experiencia en el sector.
                servicios de reparación, mantenimiento y diagnóstico de vehículos de todas las marcas y modelos.
                Contamos con un equipo de profesionales cualificados y equipamiento de última generación.
                Nuestro objetivo es brindar un servicio de calidad, eficiente y garantizado a nuestros clientes.
            </h4>
        </div> 

    </div>

    <div style="background-image: url(imagenes/fondo_carro_rojo.png);" class="c2">
        <div  class="que hacemos">
            <h3>¿Que Hacemos?</h3>
            <h4>
                Realizamos todo tipo de reparaciones mecánicas, eléctricas y electrónicas de vehículos.
                Hacemos revisiones periódicas y preventivas para asegurar el buen funcionamiento y la seguridad de los vehículos.
                Detectamos y solucionamos cualquier avería o problema que pueda presentar el vehículo mediante equipos de diagnóstico avanzado.
                Asesoramos a nuestros clientes sobre el cuidado y el mantenimiento de sus vehículos.
            </h4>
        </div>
    </div>

    <div style="background-image: url(imagenes/fondo_carro_negro.png);"  class="c3">
        <div  class="por que elegirnos">
            <h3>¿Por Que Elegirnos?</h3>
            <h4>
                Porque ofrecemos un servicio personalizado y adaptado a las necesidades de cada cliente.
                Porque tenemos precios competitivos y transparentes, sin sorpresas ni costes ocultos.
                Porque garantizamos la calidad y la durabilidad de nuestras reparaciones, utilizando repuestos originales o de primeras marcas.
                Porque disponemos de un servicio de atención al cliente rápido y eficaz, que resuelve cualquier duda o incidencia que pueda surgir.
            </h4>
        </div>
    </div>

    <div style="background-image: url(imagenes/fondo_cambio_aceite1.png);"  class="c4">
        <div  class="como contactarnos">
            <h3>¿Como Contactarnos?</h3>
            <h4>
                Puedes visitarnos en nuestra dirección: av Miranda c/c av Ayacucho CC La Romana
                Puedes llamarnos al teléfono: 0412-3240846 , 0412-7101180
                Puedes enviarnos un correo electrónico a: talleratlasmcy@gmail.com
                Puedes seguirnos en nuestras redes sociales: Facebook,  Instagram. @talleratlas
            </h4>
        </div>
    </div>   

    <h2 align="center">Trabajamos con las marcas!!!.</h2>

    <div class="slider-frame">
        <ul>
            <li><img src="imagenes/chery.png" alt=""></li>
            <li><img src="imagenes/chevrolet.png" alt=""></li>
            <li><img src="imagenes/dodge.png" alt=""></li>
            <li><img src="imagenes/fiat.png" alt=""></li>
            <li><img src="imagenes/ford.png" alt=""></li>
            <li><img src="imagenes/gm.png" alt=""></li>
            <li><img src="imagenes/jeep.png" alt=""></li>
            <li><img src="imagenes/mazda.png" alt=""></li>
            <li><img src="imagenes/nissan.png" alt=""></li>
        </ul>
    </div>

    
    
    <script>

    </script>

    <h4 align="left">Direccion</h4>
    <div class="mapa" id="ubicanos">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.1128910825546!2d-67.61464002548873!3d10.252478268640463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e803b2816dcdced%3A0xadbf2fbdb47707e!2sTaller%20Atlas%20c.a.!5e0!3m2!1ses-419!2sve!4v1689728950836!5m2!1ses-419!2sve" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <footer class="footer" id="contacto">
        <h4>Soluciones gm 83 c.a.</h4>
        <h4>Rif J-50411101-5</h4>
        <h4>Centro Comercial La Romana local B4, av Miranda c/c av ayacucho, Maracay</h4>
        <h4>tlf: 0412-147.19.97 - 0412.324.08.46</h4>
        <h4>Correo: talleratlasmcy@gmail.com</h4>
        <h4>Instagram: @talleratlasmcy</h4>
    </footer>

</body>
</html>