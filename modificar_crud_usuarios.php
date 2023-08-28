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
    <title>Modificar Usuarios</title>
</head>
<body>
    <?php
        include('conexion_usuarios.php');
        $conn_usuario = new conexion_db_usuarios(); 
        $cedula_usuario= $_REQUEST['cedula_usuario'];                        
        $consulta_select = "SELECT * FROM registro_usuarios WHERE cedula_usuario='$cedula_usuario'"  ;                    
        $query = mysqli_query($conn_usuario->conectar_usuarios(),$consulta_select);
        $row = mysqli_fetch_object($query);
        {               
    ?>

    <h1>Modificar Producto</h1>
    <div>
        <form action="proceso_modificar_crud_usuarios.php?cedula_usuario= <?php echo $row->cedula_usuario; ?>" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="jerarquia" placeholder="Jerarquia..." value="<?php echo $row->jerarquia; ?>"><br><br>
            <input type="text" REQUIRED name="cedula_usuario" placeholder="Cedula..." value="<?php echo $row->cedula_usuario; ?>"><br><br>
            <input type="text" name="nombre" placeholder="Nombre..." value="<?php echo $row->nombre;?>"><br><br>
            <input type="text" name="apellido" placeholder="Apellido..." value="<?php echo $row->apellido;?>"><br><br>
            <input type="text" name="usuario" placeholder="Usuario..." value="<?php echo $row->usuario;?>"><br><br>
            <input type="text" name="clave" placeholder="Password..." value="<?php echo $row->clave;?>"><br><br>
            <input type="text" name="telefono" placeholder="telefono..." value="<?php echo $row->telefono;?>"><br><br>
            
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <?php
        }
    ?>
</body>
</html>