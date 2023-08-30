<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" type="text/css" href="css/estilos_login.css">
 
   <title>Inicio de sesión</title>
</head>

<body>
   
   <div class="container">
      <div class="img">
         <img height="120px" width="120px" src="imagenes/logo redondo en formato png.png">
      </div>
      <div class="login-content">
         <form method="post" action="">
            <img height="50px" width="50px" src="imagenes/vehiculo.png">
            <h2 class="title">BIENVENIDO</h2>
            <?php
            include('login_controlador.php');
            //include ('proceso_insertar_crud_usuarios_publico.php');
            ?>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input id="usuario" type="text" class="input" name="usuario">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="clave">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>

            <div class="text-center">
               <a class="font-italic isai5" href="">Olvidé mi contraseña</a>
               <a class="font-italic isai5" href="cargar_crud_usuarios.php">Registrarse</a>
            </div>
            <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
            <a class="font-italic isai5" href="index.php">Volver al Inicio</a>
         </form>
      </div>
   </div>
  

</body>

</html>


