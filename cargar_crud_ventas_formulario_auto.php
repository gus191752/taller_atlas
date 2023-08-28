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
/////////////////////////////////////////////////////////////////
if (isset($_POST['buscar_producto']))
{
   
    $codigo = $_POST['codigo'];
    $codigo1 = $_POST['codigo1'];
    $codigo2 = $_POST['codigo2'];
    $codigo3 = $_POST['codigo3'];
    $codigo4 = $_POST['codigo4'];
    $codigo5 = $_POST['codigo5'];  

    /*$codigo ='24628';
    $codigo4 ='';
    $codigo1 ='';
    $codigo2 ='';
    $codigo3 ='';
    $codigo5 ='';*/

    
    //$valores_productos[]=array();

    $valores_productos['existe_codigo']="0";

   
    $codigos=[$codigo,$codigo1,$codigo2,$codigo3,$codigo4,$codigo5];
//echo '$codigo1';
//echo $valores_productos[1];
    //$i=3;
    for ($i=0; $i < count($codigos) ; $i++)
    {
    $consulta_codigo=("SELECT * FROM productos WHERE codigo='$codigos[$i]'");
    $resultados_productos= mysqli_query($conn_ventas->conectarventas(), $consulta_codigo);

//echo $codigos[$i];
//echo $i;
echo count($codigos);
    while($consulta_productos = mysqli_fetch_array($resultados_productos))
        {
            $valores_productos['existe_codigo']="1";
            $valores_productos['descripcion'.$i.'']=$consulta_productos['descripcion'];
            $valores_productos['referencia'.$i.'']=$consulta_productos['referencia'];
            $valores_productos['precio'.$i.'']=$consulta_productos['precio'];
        }
    }
    
    $valores_productos=json_encode($valores_productos);
    echo $valores_productos;

}

/*


for ($i=0; $i < 5; $i++)
    {

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



 $valores_productos['precio']=$consulta_productos['precio'];
            $valores_productos['descripcion1']=$consulta_productos['descripcion1'];
            $valores_productos['referencia1']=$consulta_productos['referencia1'];
            $valores_productos['precio1']=$consulta_productos['precio1'];
            $valores_productos['descripcion2']=$consulta_productos['descripcion2'];
            $valores_productos['referencia2']=$consulta_productos['referencia2'];
            $valores_productos['precio2']=$consulta_productos['precio2'];
            $valores_productos['descripcion3']=$consulta_productos['descripcion3'];
            $valores_productos['referencia3']=$consulta_productos['referencia3'];
            $valores_productos['precio3']=$consulta_productos['precio3'];
            $valores_productos['descripcion4']=$consulta_productos['descripcion4'];
            $valores_productos['referencia4']=$consulta_productos['referencia4'];
            $valores_productos['precio4']=$consulta_productos['precio4'];
*/



?>