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
        <form action="proceso_insertar_crud_trabajadores.php" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="cedula_trabajador" placeholder="cedula del trabajador" value=""><br><br>
            <input type="text" REQUIRED name="nombre_trabajador" placeholder="Nombre del Trabajador..." value=""><br><br>
            <input type="text" name="telefono_trabajador" placeholder="Telefono del Trabajador..." value=""><br><br>
            <input type="text" name="direccion_trabajador" placeholder="Direccion del Trabajador..." value=""><br><br>
            <input type="date" name="fecha_ingreso_trabajador" placeholder="Fecha de Ingreso Trabajador..." value=""><br><br>
            <input type="date" name="fecha_egreso_trabajador" placeholder="Fecha de Ingreso Trabajador..." value=""><br><br>
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
</body>
</html>