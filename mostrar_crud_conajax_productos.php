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
            <label for="campo"  >Buscar: </label>
            <input type="text" name="campo" id="campo">

        </form>

        <table border="2px " >
            <thead>

                <tr>
                    <th colspan="5"><a href="cargar_crud_cartera_productos.php">Nuevo Producto</a></th>
                </tr>
                <tr>
                    <th colspan="5"><a href="administrador.html">Volver al Inicio</a></th>
                </tr>
                <tr>                    
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Tipo</th>
                    <th>Año</th> 
                                   
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody id="contenido" ></tbody>
        </table>

        <script >

                getData()

                document.getElementById("campo").addEventListener("keyup",getData)
                function getData()
                {
                    let input= document.getElementById("campo").value
                    console.log(input)
                    let contenido= document.getElementById("contenido")
                    let url = 'load_crud_productos.php'
                    let formulario = new FormData()
                    formulario.append('campo', input)

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