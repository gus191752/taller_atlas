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
    <title>cartera de Clientes</title>
</head>
<body>
    <h1>Cartera de Clientes</h1>
    <div>

        <form action="" method="POST" >
            <label for="campo_cliente"  >Buscar: </label>
            <input type="text" name="campo_cliente" id="campo_cliente">

        </form>

        <table border="2px " >
            <thead>

                <tr>
                    <th colspan="5"><a href="cargar_crud_cartera_clientes.php">Nuevo Cliente</a></th>
                </tr>
                <tr>
                    <th colspan="5"><a href="administrador.php">Volver al Administrador</a></th>
                </tr>   
                <tr>                    
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>telefono</th>
                    <th>direccion</th>
                </tr>
            </thead>
            <tbody id="contenido" ></tbody>
        </table>

        <script >

                getData()

                document.getElementById("campo_cliente").addEventListener("keyup",getData)
                function getData()
                {
                    let input= document.getElementById("campo_cliente").value
                    console.log(input)
                    let contenido= document.getElementById("contenido")
                    let url = 'load_crud_clientes.php'
                    let formulario = new FormData()
                    formulario.append('campo_cliente', input)

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