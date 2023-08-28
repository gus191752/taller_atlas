<?php
session_start();
if ($_SESSION['jerarquia']!='9')
{
    header('location:index.php');
}
?>
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
        <form action="proceso_insertar_crud_taller.php" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="cedula_cliente" placeholder="cedula del cliente" value=""><br><br>
            <input type="text" REQUIRED name="placas" placeholder="placas..." value=""><br><br>
            <input type="text" name="vin" placeholder="vin..." value=""><br><br>
            <input type="text" name="modelo_marca" placeholder="Modelo y Marca..." value=""><br><br>
            <input type="text" name="kilometraje" placeholder="Kilometraje..." value=""><br><br>
            <input type="text" name="cedula_trabajador" placeholder="Cedula Trabajador..." value=""><br><br>
            <input type="text" name="titulo_trabajo" placeholder="Titulo del Trabajo..." value=""><br><br>
            <input type="text" name="descripcion_falla" placeholder="Descripcion de la Falla..." value=""><br><br>
            <input type="text" name="diagnostico_solucion" placeholder="Diagnostico y Solucion..." value=""><br><br>
            <input type="text" name="inspeccion_final" placeholder="Inspeccion Final..." value=""><br><br>
            <input type="date" name="fecha_ingreso" placeholder="Fecha de Ingreso..." value=""><br><br>
            <input type="date" name="fecha_egreso" placeholder="Fecha de Egreso..." value=""><br><br>
            <input type="text" name="costo_reparacion" placeholder="Costo de la Reparacion..." value=""><br><br>
            
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <br>
    <a href="mostrar_crud_taller_ajax.php">Volver</a>
<br>
</body>
</html>