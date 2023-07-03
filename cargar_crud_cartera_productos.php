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
        <form action="proceso_insertar_crud_cartera_productos.php" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="codigo" placeholder="Codigo..." value=""><br><br>
            <input type="text" REQUIRED name="descripcion" placeholder="Descripcion Producto..." value=""><br><br>
            <input type="text" name="marca" placeholder="Marca..." value=""><br><br>
            <input type="text" name="modelo" placeholder="Modelo..." value=""><br><br>
            <input type="text" name="tipo" placeholder="Tipo de Parte..." value=""><br><br>
            <input type="text" name="fecha_fabricacion" placeholder="Año..." value=""><br><br>
            <input type="file" name="imagen1"><br><br>
            <input type="file" name="imagen2"><br><br>
            <input type="text" name="cantidad" placeholder="Cantidad..." value=""><br><br>
            <input type="text" name="precio" placeholder="Precio..." value=""><br><br>
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
</body>
</html>