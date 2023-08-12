<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de ventas</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="https://kit.fontawesome.com/779ae99c75.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



</head>
<body>
    <h1>Administrador de Ventas</h1>
    <div>
        <form ><br><br>
            <input type="text"  name="trabajador" placeholder="Nombre de Trabajador..." id="vendedor" ><br><br>
            <input type="text" REQUIRED name="cedula" placeholder="Cedula..." value="
            " id="cedula"  onblur="buscar_datos_tabla_trabajadores();"><br><br>
            <input type="text"  name="descripcion" placeholder="Descripcion..." value="" id="descripcion"><br><br>
            <input   type="text" REQUIRED name="codigo" placeholder="Codigo..." value="" id="codigo" onblur="buscar_datos_tabla_productos();"><br><br>
            <input type="text" name="referencia" placeholder="Referencia..." value="" id="referencia"><br><br>
            <input type="text" name="precio" placeholder="Precio..." value="" id="precio"><br><br>
            <input type="text" name="cantidad" placeholder="Cantidad..." value="" id="cantidad" onblur="multiplicar_precio_x_cantidad();"><br><br>
            <input type="text" name="total" placeholder="Total..." value="" id="total"><br><br>
            
            
            <input type="button" value="Aceptar"><br><br>
        </form>
    </div>
    <br>
    <a href="administrador.html">Volver</a>
<br>
<script>
   function buscar_datos_tabla_trabajadores()
{
    //cedula = $("#cedula").val();
    
    
    var parametros = 
    {
      "buscar_cedula": "1",
      "cedula_trabajador" : $("#cedula").val()
    };
    $.ajax(
    {
      data:  parametros,
      dataType: 'json',
      url:   'cargar_crud_ventas_formulario_auto.php',
      type:  'post',
      beforeSend: function() 
      {alert("enviando");}, 
      error: function()
      {alert("Error");},
      complete: function() 
      {alert("¡Listo!");},
      success:  function (valores_trabajadores) 
      {
        $("#vendedor").val(valores_trabajadores.nombre_trabajador);
      }
    }) 
} 
function buscar_datos_tabla_productos()
{
    //cedula = $("#cedula").val();
    
    
    var parametros = 
    {
      "buscar_producto": "1",
      "codigo" : $("#codigo").val()
    };
    $.ajax(
    {
      data:  parametros,
      dataType: 'json',
      url:   'cargar_crud_ventas_formulario_auto.php',
      type:  'post',
      beforeSend: function() 
      {alert("enviando");}, 
      error: function()
      {alert("Error");},
      complete: function() 
      {alert("¡Listo!");},
      success:  function (valores_productos) 
      {
        $("#descripcion").val(valores_productos.descripcion);
        $("#referencia").val(valores_productos.referencia);
        $("#precio").val(valores_productos.precio);
      }
    }) 
} 

function multiplicar_precio_x_cantidad()
{
    precio= $("#precio").val();
    cantidad= $("#cantidad").val();
    total= precio*cantidad;
    $('#total').val(total);
}


</script>

</body>
</html>