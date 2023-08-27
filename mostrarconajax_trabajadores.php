<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores de Taller Atlas</title>
</head>
<body>
    <h1>Trabajadores de Taller Atlas</h1>
    <div>

        <form action="" method="POST" >
            <label for="campo_trabajador"  >Buscar: </label>
            <input type="text" name="campo_trabajador" id="campo_trabajador">

        </form>
        
        <table border="2px " >
            <thead>

                <tr>
                    <th colspan="5"><a href="cargar_crud_cartera_trabajadores.php">Nuevo Trabajador</a></th>

                </tr>
                <tr>
                <th colspan="5"><a href="administrador.php">Volver al Administrador</a></th>
                </tr>
                <tr>                    
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>telefono</th>
                    <th>direccion</th>
                    <th>fecha ingreso</th>
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
                    let url = 'load_crud_trabajadores.php'
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