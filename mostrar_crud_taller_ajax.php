<?php
session_start();
if ($_SESSION['jerarquia']!='9')
{
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar cartera de productos con Ajax</title>
</head>
<body>
    <h1>Mostrar sistema de trabajo con Ajax</h1>
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
                    <th colspan="5"><a href="cargar_crud_taller.php">Nuevo Trabajo</a></th>
                </tr>
                <tr>
                    <th colspan="5"><a href="mostrarconajax_rendimiento_trabajador.php">Rendimiento_trabajador</a></th>
                </tr>
                <tr>
                    <th colspan="5"><a href="administrador.php">Volver al Inicio</a></th>
                </tr>
                <tr>                    
                    <th>id_trabajo</th>
                    <th>cedula_cliente</th>
                    <th>Placas</th>
                    <th>VIN</th>
                    <th>Modelo y/o Marca</th>
                    <th>Kilometraje</th> 
                    <th>cedula_trabajador</th>                
                    <th>titulo_trabajo</th>
                    <th>descripcion_falla</th>
                    <th>diagnostico y/0 Solucion</th>
                    <th>inspeccion final</th>
                    <th>fecha_ingreso</th> 
                    <th>fecha_egreso</th>                
                    <th>costo_reparacion</th>
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
                    let url = 'load_crud_taller_ajax.php'
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