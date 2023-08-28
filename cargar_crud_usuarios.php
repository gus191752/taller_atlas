<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de cartera de productos</title>
</head>
<body>
    <h1>Administrador de Cartera de Productos</h1>
    <div>
        <form action="proceso_insertar_crud_usuarios.php" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="correo" placeholder="Ccorreo..." value=""><br><br>
            <input type="text" REQUIRED name="cedula_usuario" placeholder="Cedula..." value=""><br><br>
            <input type="text" REQUIRED name="nombre" placeholder="Nombre..." value=""><br><br>
            <input type="text" REQUIRED name="apellido" placeholder="Apellido..." value=""><br><br>
            <input type="text" REQUIRED name="usuario" placeholder="Usuario..." value=""><br><br>
            <input type="text" REQUIRED name="password" placeholder="Password..." value=""><br><br>
            <input type="text" name="telefono" placeholder="Telefono..." value=""><br><br>
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <br>
    <a href="administrador.php">Volver</a>
<br>
</body>
</html>