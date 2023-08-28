<?php 
session_start();

include('conexion_usuarios.php');

if(!empty($_POST['btningresar']))
{
    if ((!empty($_POST['usuario'])) and (!empty($_POST['clave'])))
    {
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        $conn_usuarios = new conexion_db_usuarios(); 
        $consulta_select_usuarios = "SELECT * FROM registro_usuarios WHERE usuario='$usuario' and clave='$clave' "  ;                    
        //echo $consulta_select_usuarios;
        $query = mysqli_query($conn_usuarios->conectar_usuarios(),$consulta_select_usuarios);
        
            if ($datos=$query->fetch_object())
                {
                    $_SESSION['cedula_usuario']=$datos->cedula_usuario;
                    $_SESSION['nombre']=$datos->nombre;
                    $_SESSION['apellido']=$datos->apellido;
                    $_SESSION['jerarquia']=$datos->jerarquia;
                    
                    if ($_SESSION['jerarquia']=='9')
                        {
                        header('location:administrador.php');
                        }
                    else
                        {
                        header('location:mostrar_crud_taller_ajax_publico.php');
                        }    
                    
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