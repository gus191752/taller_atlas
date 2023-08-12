<?php

include('conexion_db_ventas.php');  //llama al archivo conexion.php
$conn_ventas = new conexion_db_ventas();  

if (isset($_POST['buscar_cedula']))
{
    
    $cedula_trabajador = $_POST["cedula_trabajador"];
    
    //$valores_trabajadores=array();
    $valores_trabajadores['existe_cedula']="0";

    $consulta=("SELECT * FROM registro_trabajadores WHERE cedula_trabajador='$cedula_trabajador'");
    $resultados_cedula= mysqli_query($conn_ventas->conectarventas(), $consulta);

    while($consulta_cedula_trabajador = mysqli_fetch_array($resultados_cedula))
        {
            $valores_trabajadores['existe_cedula']="1";
            $valores_trabajadores['nombre_trabajador']=$consulta_cedula_trabajador['nombre_trabajador'];
        }
    $valores_trabajadores=json_encode($valores_trabajadores);
    echo $valores_trabajadores;
}
if (isset($_POST['buscar_producto']))
{
    
    $codigo = $_POST["codigo"];
    
    //$valores_trabajadores=array();
    $valores_productos['existe_codigo']="0";

    $consulta_codigo=("SELECT * FROM productos WHERE codigo='$codigo'");
    $resultados_productos= mysqli_query($conn_ventas->conectarventas(), $consulta_codigo);

    while($consulta_productos = mysqli_fetch_array($resultados_productos))
        {
            $valores_productos['existe_codigo']="1";
            $valores_productos['descripcion']=$consulta_productos['descripcion'];
            $valores_productos['referencia']=$consulta_productos['referencia'];
            $valores_productos['precio']=$consulta_productos['precio'];
        }
    $valores_productos=json_encode($valores_productos);
    echo $valores_productos;
}

?>