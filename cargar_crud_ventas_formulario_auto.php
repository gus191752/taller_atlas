<?php
include('conexion_db_ventas.php');  //llama al archivo conexion.php
$conn_ventas = new conexion_db_ventas();  

session_start();
if ($_SESSION['jerarquia']!='9')
{
    header('location:index.php');
}


////////////////////detalle de la factura temporal/////////////////////////////////////////
if ($_POST['action']=='add_detalle_producto')
{
    //print_r($_POST);  metodo para visualizar el array que manda el ajax
    //exit;
    if (empty($_POST(['codigo_temporal'])) || empty($_POST['cantidad']))
    {
        echo 'error';
    }
    else{
        $codigo_temporal=$_POST['codigo'];
        $cantidad= $_POST['cantidad'];
        $token=$_SESSION['cedula_trabajador'];

        $query_detalle_temporal= mysqli_query($conn_ventas->conectarventas(),"CALL add_detalle_factura_temporal($codigo_tempral,$cantidad,'$token_cedula_trabajador')");
        $resultado= mysqli_num_rows($query_detalle_temporal);


    }
}
/////////////////////////////////////////////////////////////////////////////////////////////



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