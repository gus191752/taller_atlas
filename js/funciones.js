//validad cantidad antes de cargar en cargar_crud_ventas.php
$('#texto_cantidad_producto').keyup(function(e){
    e.preventDefault();

    var precio_total= parseFloat($(this).val()) * parseFloat($('#texto_precio').val());
    $('#texto_precio_total').val(precio_total);
    
    var existencia = ($('#texto_existencia').val());

    console.log($(this).val());
    console.log($('#texto_precio').val());
    console.log(existencia);
    console.log(precio_total);

// oculta el boton agregar si la cantidad es menor a 1 o mayor que la existencia

    if (($(this).val()<1 || isNaN($(this).val())) || ($(this).val()> existencia)){
        $('#add_productos_venta').slideUp();
    }
    else{
        $('#add_productos_venta').slideDown();
    }

});


// agregar detalle a la factura temporal
$('#add_productos_venta').click(function(e){
    e.preventDefault();

    if ($('#texto_cantidad_producto').val()>0)
    {
        var codigo_temporal= $('#texto_codigo_producto').val();
        var cantidad = $('#texto_cantidad_producto').val();
        var action = 'add_detalle_producto';
console.log('dentro evento add_productos_venta');
        $.ajax
        ({
            url:'cargar_crud_ventas_formulario_auto.php',
            type: "POST",
            async: true,
            data:{action:action,codigo_temporal:codigo_temporal,cantidad:cantidad },

            success: function(response)
            {
                console.log(response);
            },
            error: function(error)
            {

            } 
        })
    }
});