<?php
session_start();
if (empty($_SESSION['cedula_usuario']))
{
    header('location:login.php');
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
    <link rel="stylesheet" type="text/css" href="css/estilos_tabla.css">
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
        <h2>Su taller de Confianza!!!</h2>
    </div>


    <h1>Bitacora de Mantenimiento</h1>
    <?php
    
    echo ("<div>Bienvenido") ." ".$_SESSION['nombre']." ".$_SESSION['apellido'].("</div>");
    echo "<br>";
    ?>
    <div>

        <form action="" method="POST" >
            <label for="campo_taller"  >Buscar: </label>
            <input type="text" name="campo_taller" id="campo_taller">

        </form>

        <table border="2px " >
            <thead>
                <tr>
                    <th colspan="5"><a href="administrador.php">Volver al Inicio</a></th>
                </tr>
                <tr>                    
                    
                    <th>Placas</th>
                    <th>Kilometraje</th> 
                    <th>cedula_trabajador</th>              
                    <th>descripcion_falla</th>
                    <th>diagnostico y/0 Solucion</th>
                    <th>inspeccion final</th>
                    <th>fecha_egreso</th>                
                    
                </tr>
            </thead>
            <tbody id="contenido" ></tbody>
        </table>

        <script >

                getData()

                document.getElementById("campo_taller").addEventListener("keyup",getData)
                function getData()
                {
                    let input= document.getElementById("campo_taller").value
                    console.log(input)
                    let contenido= document.getElementById("contenido")
                    let url = 'load_crud_taller_ajax_publico.php'
                    let formulario = new FormData()
                    formulario.append('campo_taller', input)

                    fetch (url , {
                        method: "POST",
                        body: formulario                        
                        }).then(response => response.json())
                    .then(data => {contenido.innerHTML = data
                    console.log("activa el fetch") })
                    .catch(err => console.log(err))

                }

        </script>

    </div>
</body>
</html>