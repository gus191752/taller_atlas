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
    <title>Modificar cartera de clientes</title>
</head>
<body>
    <?php
        include('conexion_db_clientes.php');
        $conn_cliente = new conexion_db_clientes(); 
        $cedula_cliente= $_REQUEST['cedula_cliente'];                        
        $consulta_select = "SELECT * FROM registro_cliente_taller WHERE cedula_cliente='$cedula_cliente'"  ;                    
        $query = mysqli_query($conn_cliente->conectarclientes(),$consulta_select);
        $row = mysqli_fetch_object($query);
        {               
    ?>

    <h1>Modificar Registro del Cliente</h1>
    <div>
        <form action="proceso_modificar_crud_clientes.php?cedula_cliente= <?php echo $row->cedula_cliente; ?>" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="cedula_cliente" placeholder="cedula de cliente..." value="<?php echo $row->cedula_cliente; ?>"><br><br>
            <input type="text" REQUIRED name="nombre_cliente" placeholder="Nombre del Cliente..." value="<?php echo $row->nombre_cliente; ?>"><br><br>
            <input type="text" name="telefono_cliente" placeholder="telefono de cliente..." value="<?php echo $row->telefono_cliente;?>"><br><br>
            <input type="text" name="direccion_cliente" placeholder="direccion_cliente..." value="<?php echo $row->direccion_cliente;?>"><br><br>
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <?php
        }
    ?>
</body>
</html>