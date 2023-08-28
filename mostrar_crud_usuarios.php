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
                    
                    <th>jerarquia</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Password</th>
                    <th>telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('conexion.php');
                    $conn = new conexion_db_carrito();                          
                    $consulta_select = "SELECT * FROM registro_usuarios"  ;                    
                    $query = mysqli_query($conn->conectarcarrito(),$consulta_select);
                    while($row = mysqli_fetch_object($query))
                    {                    

                ?>
                <tr>
                    
                    <td><?php echo $row->jerarquia; ?></td>
                    <td><?php echo $row->correo; ?></td>
                    <td><?php echo $row->cedula_usuario; ?></td>
                    <td><?php echo $row->nombre; ?></td>
                    <td><?php echo $row->apellido; ?></td>
                    <td><?php echo $row->usuario; ?></td>
                    <td><?php echo $row->password; ?></td>
                    <td><?php echo $row->telefono; ?></td>
                    <th><a href="modificar_crud_usuarios.php?cedula_usuario= <?php echo $row->cedula_usuario; ?>">Modificar</a></th>
                    <th><a href="proceso_eliminar_crud_usuarios.php?cedula_usuario= <?php echo $row->cedula_usuario; ?>">Eliminar</a></th>
                </tr>  
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>