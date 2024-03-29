<?php
session_start();
if ($_SESSION['jerarquia']!='9')
{
    header('location:index.php');
}
echo md5($_SESSION['cedula_usuario'])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de ventas</title>
	  <script src="https://kit.fontawesome.com/779ae99c75.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src="js/funciones.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/estilos_venta.css">
    <link rel="stylesheet" type="text/css" href="css/estilos_tabla.css">
</head>

<body>

  <section id="contenedor_pag">
  <div class="titulo_pag">
    <h1><i class="fa-solid fa-box"></i>   Ventas</h1>
  </div>
  <div class="datos_cliente">
    <div class="accion_cliente">
      <h1>Datos del Cliente</h1>
   
      
      <form >
        <input type="text" REQUIRED name="cedula" placeholder="Cedula..." value="" id="cedula"  onblur="buscar_datos_tabla_trabajadores();">
        <input type="text"  name="trabajador" placeholder="Nombre de Trabajador..." id="vendedor" >
      </form>
    </div>
  </div>


  <div class="datos_compra">
  <h1>Detalle de la Compra</h1>
      
    <table class="tabla_venta">
    <tbody id="contenido">
     <!-- Contenido del buscador -->
      </tbody>
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Referencia</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Existencia</th>
          <th>Marca</th>
          <th>Cantidad</th>
          <th>Precio Total</th>
          <th>Accion</th>
        </tr>
        <tr>
        <form action="" method="POST" >
            <label for="campo"  >Buscar: </label>
            <input type="text" name="campo" id="campo">
      </form>

        <?php

        include('conexion.php');
        $conn = new conexion_db_carrito(); 
        //$codigo= $_REQUEST['codigo']; 
        $codigo = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : $codigo= "" ;
        
        $consulta_select = "SELECT * FROM productos WHERE codigo='$codigo'"  ;                    
        $query = mysqli_query($conn->conectarcarrito(),$consulta_select);
        $row = mysqli_fetch_object($query);
        {               
        ?>
        <td ><input id="texto_codigo_producto" type="text" REQUIRED name="codigo" placeholder="Codigo..." value="<?php echo $row->codigo; ?>"></td>
        <td ><input id="texto_referencia" type="text" REQUIRED name="referencia" placeholder="Referencia..." value="<?php   echo $row->referencia;  ?>"></td>
        <td ><input id="texto_descripcion" type="text" REQUIRED name="descripcion" placeholder="Descripcion Producto..." value="<?php echo $row->descripcion; ?>"></td>
        <td ><input id="texto_precio" type="text" name="text_precio" placeholder="Precio..." value="<?php echo $row->precio;?>"></td>
        <td ><input id="texto_existencia" type="text" name="texto_existencia" placeholder="Cantidad..." value="<?php echo $row->cantidad;?>"></td>
        <td ><input id="texto_marca" type="text" name="marca" placeholder="Marca..." value="<?php echo $row->marca;?>"></td>
        <td ><input id="texto_cantidad_producto" type="text" name="texto_cantidad_producto" placeholder="Cantidad..." value=""></td>
        <td ><input id="texto_precio_total" type="text" name="texto_precio_total" placeholder="Total..." value=""></td>
        <td><a href="a" id="add_productos_venta">Agregar</a></td>         
                
                <?php
        }
                ?>     
         
         
    
        
        </tr>
      </thead>

      <tbody id="detalle_venta">
      <!-- Contenido Ajax -->
        
      </tbody>

      <tfoot id="detalle_totales">
      <!-- Contenido Ajax -->
        
        
      </tfoot>


     
      
      
    </table>
    
    <script >
      getData()
      document.getElementById("campo").addEventListener("keyup",getData)
      function getData()
      {
          let input= document.getElementById("campo").value
          console.log(input)
          let contenido= document.getElementById("contenido")
          let url = 'load_crud_productos_enventas.php'
          let formulario = new FormData()
          formulario.append('campo', input)
          fetch (url , {
              method: "POST",
              body: formulario                        
              }).then(response => response.json())
          .then(data => {contenido.innerHTML = data
          console.log("activa el fetch") })
          .catch(err => console.log(err))
      }
    </script>
  </section>
    <br>
    <a href="administrador.php">Volver</a>
<br>

</body>

</html>