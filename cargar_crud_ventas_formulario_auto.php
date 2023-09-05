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

    if (empty($_POST['codigo_temporal']) || empty($_POST['cantidad']))
    {
        echo 'error detalle temporal';
    }
    else
    {
        $codigo_temporal=$_POST['codigo_temporal'];
        $cantidad= $_POST['cantidad'];
        $token_cedula_trabajador=md5($_SESSION['cedula_usuario']);

        $query_iva=mysqli_query($conn_ventas->conectarventas(),"SELECT iva FROM configuracion");
        $resultado_iva=mysqli_num_rows($query_iva);

        $query_detalle_temporal= mysqli_query($conn_ventas->conectarventas(),"CALL add_detalle_factura_temporal($codigo_temporal,$cantidad,'$token_cedula_trabajador')");
        $resultado= mysqli_num_rows($query_detalle_temporal);

        $detalle_tabla='';
        $sub_total=0;
        $iva=0;
        $total=0;
        $array_datos=array();

        if ($resultado>0)
        {
            if ($resultado_iva>0)
                {
                    $info_iva=mysqli_fetch_assoc($query_iva);
                    $iva=$info_iva['iva'];
                }
                while($data=mysqli_fetch_assoc($query_detalle_temporal))
                    {
                        $precio_total=round($data['cantidad']*$data['precio_venta'],2);
                        $sub_total=round(($sub_total+$precio_total),2);
                        $total=round(($total+$precio_total),2);

                        $detalle_tabla .='
                            <tr>
                            <td>1</td>
                            <td>'.$data['codigo_temporal'].'</td>
                            
                            <td>'.$data['descripcion'].'</td>
                            <td>'.$data['precio_venta'].'</td>
                            
                            <td>'.$data['cantidad'].'</td>
                            <td>'.$precio_total.'</td>
                            <td><a class="link_delete" href="a" onclick="event.preventDefault(); eliminar_detalle_producto('.$data['codigo_temporal'].');">Eliminar</td>
                            </tr>
                        ';
                    }
                $impuesto= round($sub_total*($iva/100),2);
                $total_siniva= round(($sub_total-$impuesto),2);
                $total=round(($total_siniva+$impuesto),2);

                $detalle_totales='
                    <tr>
                    <td class="text_right">SubTotal</td>
                    <td class="text_right">'.$total_siniva.'</td>
                    </tr>
                    <tr>
                    <td class="text_right">Iva (12%)</td>
                    <td class="text_right">'.$impuesto.'</td>
                    </tr>
                    <tr>
                    <td class="text_right">Total</td>
                    <td class="text_right">'.$total.'</td>
                    </tr>
                    ';
                $array_datos['detalles']=$detalle_tabla;
                $array_datos['totales']=$detalle_totales;

                echo json_encode($array_datos,JSON_UNESCAPED_UNICODE);
        }
        else{
            echo'error';
        }
        mysqli_close($conn_ventas->conectarventas());
    }
    exit;
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
//echo "dentro de php";
//echo $codigo1;
//





?>