<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar trabajos de taller</title>
</head>
<body>
    <?php
        include('conexion_db_taller.php');
        $conn = new conexion_db_taller(); 
        $id_trabajo= $_REQUEST['id_trabajo'];                        
        $consulta_select = "SELECT * FROM registro_trabajos_taller WHERE id_trabajo='$id_trabajo'"  ;                    
        $query = mysqli_query($conn->conectartaller(),$consulta_select);
        $row = mysqli_fetch_object($query);
        {               
    ?>

    <h1>Modificar Producto</h1>
    <div>
        <form action="proceso_modificar_crud_taller.php?id_trabajo= <?php echo $row->id_trabajo; ?>" method="POST" enctype="multipart/form-data"><br><br>
            <input type="text" REQUIRED name="id_trabajo" placeholder="id_trabajo..." value="<?php echo $row->id_trabajo; ?>"><br><br>
            <input type="text" REQUIRED name="cedula_cliente" placeholder="cedula del cliente..." value="<?php echo $row->cedula_cliente; ?>"><br><br>
            <input type="text" name="placas" placeholder="placas..." value="<?php echo $row->placas;?>"><br><br>
            <input type="text" name="vin" placeholder="vin..." value="<?php echo $row->vin;?>"><br><br>
            <input type="text" name="modelo_marca" placeholder="modelo y/o marca..." value="<?php echo $row->modelo_marca;?>"><br><br>
            <input type="text" name="kilometraje" placeholder="kilometraje..." value="<?php echo $row->kilometraje;?>"><br><br>
            <input type="text" name="cedula_trabajador" placeholder="Cedula trabajador..." value="<?php echo $row->cedula_trabajador;?>"><br><br>
            <input type="text" name="titulo_trabajo" placeholder="titulo trabajo..." value="<?php echo $row->titulo_trabajo;?>"><br><br>
            <input type="text" name="descripcion_falla" placeholder="descripcion_falla..." value="<?php echo $row->descripcion_falla;?>"><br><br>
            <input type="text" name="diagnostico_solucion" placeholder="diagnostico_solucion..." value="<?php echo $row->diagnostico_solucion;?>"><br><br>
            <input type="text" name="inspeccion_final" placeholder="inspeccion_final..." value="<?php echo $row->inspeccion_final;?>"><br><br>
            <input type="text" name="fecha_ingreso" placeholder="fecha_ingreso..." value="<?php echo $row->fecha_ingreso;?>"><br><br>
            <input type="text" name="fecha_egreso" placeholder="fecha_egreso..." value="<?php echo $row->fecha_egreso;?>"><br><br>
            <input type="text" name="costo_reparacion" placeholder="costo_reparacion..." value="<?php echo $row->costo_reparacion;?>"><br><br>

            <input type="submit" value="Aceptar"><br><br>
        </form>
    </div>
    <br>
    <a href="mostrar_crud_taller_ajax.php">Volver</a>
<br>
    <?php
        }
    ?>
</body>
</html>