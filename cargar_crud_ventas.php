<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de ventas</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="https://kit.fontawesome.com/779ae99c75.js" crossorigin="anonymous"></script>
	<script defer src="js/animacion.js"></script>
</head>
<body>
    <h1>Administrador de Ventas</h1>
    <div>
        <form action="proceso_insertar_crud_cartera_productos.php" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="trabajador" placeholder="Nombre de Trabajador..." value="" onblur="buscar_datos_tabla_trabajadores();"><br><br>
            <input type="text" name="cedula" placeholder="Cedula..." value=""><br><br>
            <input type="text" REQUIRED name="descripcion" placeholder="Descripcion..." value="" onblur="buscar_datos_tabla_productos();"><br><br>
            <input type="text" name="codigo" placeholder="Codigo..." value=""><br><br>
            <input type="text" name="referencia" placeholder="Referencia..." value=""><br><br>
            <input type="text" name="precio" placeholder="Precio..." value=""><br><br>
            <input type="text" name="cantidad" placeholder="Cantidad..." value=""><br><br>
            <input type="text" name="total" placeholder="Total..." value=""><br><br>
            
            
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <br>
    <a href="mostrar_crud_conajax_ventas.php">Volver</a>
<br>
<script>
   function buscar_datos_tabla_trabajadores()
{
alert("perdio el foco trabajador");
} 
function buscar_datos_tabla_productos()
{
alert("perdio el foco producto");
} 

</script>

</body>
</html>