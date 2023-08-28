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
    <title>Modificar cartera de productos</title>
</head>
<body>
    <?php
        include('conexion_db_taller.php');
        $conn = new conexion_db_taller(); 
        $cedula_trabajador= $_REQUEST['cedula_trabajador'];                        
        $consulta_select = "SELECT * FROM registro_trabajadores WHERE cedula_trabajador='$cedula_trabajador'"  ;                    
        $query = mysqli_query($conn->conectartaller(),$consulta_select);
        $row = mysqli_fetch_object($query);
        {               
    ?>

    <h1>Modificar Producto</h1>
    <div>
        <form action="proceso_modificar_crud_trabajadores.php?cedula_trabajador= <?php echo $row->cedula_trabajador; ?>" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="cedula_trabajador" placeholder="cedula de trabajador..." value="<?php echo $row->cedula_trabajador; ?>"><br><br>
            <input type="text" REQUIRED name="nombre_trabajador" placeholder="Descripcion Producto..." value="<?php echo $row->nombre_trabajador; ?>"><br><br>
            <input type="text" name="telefono_trabajador" placeholder="telefono de trabajador..." value="<?php echo $row->telefono_trabajador;?>"><br><br>
            <input type="text" name="direccion_trabajador" placeholder="direccion_trabajador..." value="<?php echo $row->direccion_trabajador;?>"><br><br>
            <input type="text" name="fecha_ingreso_trabajador" placeholder="Fecha de Ingreso..." value="<?php echo $row->fecha_ingreso_trabajador;?>"><br><br>
            <input type="text" name="fecha_egreso_trabajador" placeholder="Fecha de Egreso..." value="<?php echo $row->fecha_egreso_trabajador;?>"><br><br>
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <?php
        }
    ?>
</body>
</html>