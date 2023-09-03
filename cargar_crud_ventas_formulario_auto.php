<?php


session_start();
if ($_SESSION['jerarquia']!='9')
{
    header('location:index.php');
}


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
echo "dentro de php";
//echo $codigo1;
//





?>