<?php 
include('conexion_usuarios.php');

if(!empty($_POST['btningresar']))
{
    if ((!empty($_POST['usuario'])) and (!empty($_POST['password'])))
    {
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $conn_usuarios = new conexion_db_usuarios(); 
        $consulta_select_usuarios = "SELECT * FROM registro_usuarios WHERE usuario='$usuario' and password='$password' "  ;                    
        $query = mysqli_query($conn_usuarios->conectar_usuarios(),$consulta_select_usuarios);
        
            if ($datos=$query->fetch_object())
                {
                    header('location:mostrar_crud_taller_ajax.php');
                }
            else
                {
                    echo "<div>Acceso Denegado</div>";
                }   
    }
    else
    {

    }
    
}


?>