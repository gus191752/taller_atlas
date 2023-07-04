<?php
$nombre= $_POST['nombre'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['nombre']=$nombre;
include('conexion.php');
$conn= new conexion_db_carrito();
$consulta_login= "SELECT * FROM registro_usuarios WHERE nombre='$nombre' and contraseña='$contraseña' ";
$resultado_login= mysqli_query($conn->conectarcarrito(),$consulta_login);

$filas= mysqli_num_rows($resultado_login);

if ($filas)
{
    header("location: mostrarconajax_trabajadores.php");
    echo "validacion correcta";
}
else{
    echo "no se autentico";
    header("location: login.php");
}



?>