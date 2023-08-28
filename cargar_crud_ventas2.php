<?php
session_start();
if ($_SESSION['jerarquia']!='9')
{
    header('location:index.php');
}
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
    <link rel="stylesheet" type="text/css" href="css/estilos_venta.css">
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
  <h1>Listado de Repuesto</h1>
      
    <div id="fila_activa" class="accion_compra">
      <div  id="fila_activa">
      <label>1</label> - <input style="width: 70px"  type="text" REQUIRED name="codigo" placeholder="Codigo..." value="" id="codigo" onblur="buscar_datos_tabla_productos();">
      <input style="width: 400px"type="text"  name="descripcion" placeholder="Descripcion..." value="" id="descripcion">
      <input style="width: 70px" type="text" name="precio" placeholder="Precio..." value="" id="precio">
      <input style="width: 70px" type="text" name="cantidad" placeholder="Cantidad..." value="" id="cantidad" onblur="multiplicar_precio_x_cantidad();">
      <input style="width: 70px" type="text" name="total" placeholder="Total..." value="" id="total">        
      </div>
      <div id="agregar_fila_dinamica"></div>
      
    </div>
  </div>

    
    <button id="agregar">Agregar</button>   


  </section>
    <br>
    <a href="administrador.html">Volver</a>
<br>

<script>

 const contenedor=document.querySelector('#agregar_fila_dinamica');
 const btnAgregar= document.querySelector('#agregar');
 let total=2;

 btnAgregar.addEventListener('click', e => {
  //alert(<label>${total++}</label>);
  i++;
    let div = document.createElement('div');
    div.innerHTML = `<label>${total++}</label> - 
    <div  id="fila_activa'+i+'">
      <label>1</label> - <input style="width: 70px"  type="text" REQUIRED name="codigo" placeholder="Codigo..." value="" id="codigo" onblur="buscar_datos_tabla_productos();">
      <input style="width: 400px"type="text"  name="descripcion" placeholder="Descripcion..." value="" id="descripcion">
      <input style="width: 70px" type="text" name="precio" placeholder="Precio..." value="" id="precio">
      <input style="width: 70px" type="text" name="cantidad" placeholder="Cantidad..." value="" id="cantidad" onblur="multiplicar_precio_x_cantidad();">
      <input style="width: 70px" type="text" name="total" placeholder="Total..." value="" id="total">        
    </div>`;
    contenedor.appendChild(div);
    
})

//@param {this} e 

const eliminar = (e) => {
    const divPadre = e.parentNode;
    contenedor.removeChild(divPadre);
    actualizarContador();
};

const actualizarContador = () => {
    let divs = contenedor.children;
    total = 2;
    
    for (let i = 0; i < divs.length; i++) {
        divs[i].children[0].innerHTML = total++;
    }//end for
};







   function buscar_datos_tabla_trabajadores()
{
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
      {
        //alert("enviando");
      }, 
      error: function()
      {
        //alert("Error");
      },
      complete: function() 
      {
        //alert("¡Listo!");
      },
      success:  function (valores_trabajadores) 
      {
        $("#vendedor").val(valores_trabajadores.nombre_trabajador);
      }
    }) 
} 
function buscar_datos_tabla_productos()
{
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
      {
        //alert("enviando");
        //alert(codigo);
      }, 
      error: function()
      {
        //alert("Error");
      },
      complete: function() 
      {
        //alert("¡Listo!");
      },
      success:  function (valores_productos) 
      {
        $("#descripcion").val(valores_productos.descripcion);
        $("#referencia").val(valores_productos.referencia);
        //alert($("#descripcion").val(valores_productos.descripcion));
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