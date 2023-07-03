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
        include('conexion.php');
        $conn = new conexion_db_carrito(); 
        $codigo= $_REQUEST['codigo'];                        
        $consulta_select = "SELECT * FROM productos WHERE codigo='$codigo'"  ;                    
        $query = mysqli_query($conn->conectarcarrito(),$consulta_select);
        $row = mysqli_fetch_object($query);
        {               
    ?>

    <h1>Modificar Producto</h1>
    <div>
        <form action="proceso_modificar_crud_cartera_productos.php?codigo= <?php echo $row->codigo; ?>" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="codigo" placeholder="Codigo..." value="<?php echo $row->codigo; ?>"><br><br>
            <input type="text" REQUIRED name="descripcion" placeholder="Descripcion Producto..." value="<?php echo $row->descripcion; ?>"><br><br>
            <input type="text" name="marca" placeholder="Marca..." value="<?php echo $row->marca;?>"><br><br>
            <input type="text" name="modelo" placeholder="Modelo..." value="<?php echo $row->modelo;?>"><br><br>
            <input type="text" name="tipo" placeholder="Tipo de Parte..." value="<?php echo $row->tipo;?>"><br><br>
            <input type="text" name="fecha_fabricacion" placeholder="Año..." value="<?php echo $row->fecha_fabricacion;?>"><br><br>
            <img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row->imagen1);?>"><br><br>
            <img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row->imagen2);?>"><br><br>
            <input type="text" name="cantidad" placeholder="Cantidad..." value="<?php echo $row->cantidad;?>"><br><br>
            <input type="text" name="precio" placeholder="Precio..." value="<?php echo $row->precio;?>"><br><br>
            <input type="file" name="imagen1"><br><br>
            <input type="file" name="imagen2"><br><br>
            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <?php
        }
    ?>
</body>
</html>