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
    <h1>Mostrar Cartera de Productos con Ajax</h1>
    <div>

        <form action="" method="POST" >
            <label for="campo_trabajador"  >Buscar: </label>
            <input type="text" name="campo_trabajador" id="campo_trabajador">

        </form>

        <table border="2px " >
            <thead>
                <tr>
                    <th colspan="5"><a href="mostrar_crud_taller_ajax.php">Volver</a></th>
                </tr>
                
                <tr>                    
                    <th>id</th>
                    <th>id_trabajo</th>
                    <th>cedula trabajador</th>
                    <th>placas</th>
                    <th>Modelo y/o Marca</th>
                    <th>Titulo del Trabajo</th>
                    <th>Costo de Reparacion</th>
                    <th>fecha egreso</th> 
                </tr>
            </thead>
            <tbody id="contenido" ></tbody>
        </table>

        <script >

                getData()

                document.getElementById("campo_trabajador").addEventListener("keyup",getData)
                function getData()
                {
                    let input= document.getElementById("campo_trabajador").value
                    console.log(input)
                    let contenido= document.getElementById("contenido")
                    let url = 'load_crud_rendimiento_trabajador.php'
                    let formulario = new FormData()
                    formulario.append('campo_trabajador', input)

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