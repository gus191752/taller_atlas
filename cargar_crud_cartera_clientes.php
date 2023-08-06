<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de cartera de clientes</title>
</head>
<body>
    <h1>Administrador de Cartera de Clientes</h1>
    <div>
        <form action="proceso_insertar_crud_clientes.php" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="cedula_cliente" placeholder="cedula del cliente" value=""><br><br>
            <input type="text" REQUIRED name="nombre_cliente" placeholder="Nombre del cliente..." value=""><br><br>
            <input type="text" name="telefono_cliente" placeholder="Telefono del cliente..." value=""><br><br>
            <input type="text" name="direccion_cliente" placeholder="Direccion del cliente..." value=""><br><br>
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <br>
    <a href="administrador.html">Volver</a>
<br>
</body>
</html>