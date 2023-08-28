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
    <title>Mostrar cartera de productos</title>
</head>
<body>
    <h1>Mostrar Cartera de Productos</h1>
    <div>
        <table border="2" >
            <thead>
                <tr>
                    <th colspan="5"><a href="cargar_crud_cartera_productos.php">Nuevo Producto</a></th>
                </tr>
                <tr>
                    <th>Codigo</th>
                    <th>Referencia</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Marca</th>
                    <th>Imagen1</th>
                    <th>Imagen2</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    include('conexion.php');
                    $conn = new conexion_db_carrito();                          
                    $consulta_select = "SELECT * FROM productos"  ;                    
                    $query = mysqli_query($conn->conectarcarrito(),$consulta_select);
                    while($row = mysqli_fetch_object($query))
                    {                    

                ?>
                <tr>
                    <td><?php echo $row->codigo; ?></td>
                    <td><?php echo $row->referencia; ?></td>
                    <td><?php echo $row->descripcion; ?></td>
                    <td><?php echo $row->precio; ?></td>
                    <td><?php echo $row->cantidad; ?></td>
                    <td><?php echo $row->marca; ?></td>
                    <td><img height='40px' src="data:image/jpg;base64, <?php echo base64_encode($row->imagen1); ?>"></td>
                    <td><img height='40px' src="data:image/jpg;base64, <?php echo base64_encode($row->imagen2); ?>"></td>
                    
                    
                    <th><a href="modificar_crud_cartera_productos.php?codigo= <?php echo $row->codigo; ?>">Modificar</a></th>
                    <th><a href="proceso_eliminar_crud_cartera_productos.php?codigo= <?php echo $row->codigo; ?>">Eliminar</a></th>
                </tr>  
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>