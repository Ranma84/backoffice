$(document).ready(function () {
    $('#default_order').DataTable({
        lengthMenu: [12],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
        "order": [[4, "desc"]]
    });



    $('#tablaganacias').DataTable({
        lengthMenu: [30, 60, 90, 250],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
        "order": [[2, "desc"]]
    });


    $('#adminorden_order').DataTable({
        lengthMenu: [50, 100, 150],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
        "order": [[0, "desc"]]
    });



});

$(document).ready(function () {
    $('#adminusuarios').DataTable({
        lengthMenu: [50, 100, 200, 300, 400],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
        "order": [[9, "desc"]]
    });
});


$(document).ready(function () {
    $('#adminvalores').DataTable({
        lengthMenu: [50, 100, 200, 300, 400],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
        "order": [[1, "desc"]]
    });
});


$(document).ready(function () {


    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function () {
        readURL(this);
    });
});




$("#usuario").keyup(function () {
    "use strict";
    var ta = $("#usuario");
    var letras = ta.val().replace(/[^\w\s]/gi, "");

    ta.val(letras.trim());



});




$("#password").keyup(function () {
    "use strict";
    var ta = $("#password");
    var letrasc = ta.val().replace(/ /g, "");
    ta.val(letrasc);


});





$(function () {

    var avisos_locos = function () {
        $(".avisos_locos").load("includes/avisos_locos.php");
    };


    avisos_locos();
    var intervalo = setInterval(avisos_locos, 10000);

});




function validarminclave(id, min, alert) {
    "use strict";
    var ta = $("#" + id);
    if (ta.val().length < min) {
        $("#" + alert).show();
        ta.focus();
    } else {
        $("#" + alert).hide();
    }
}


function actualizar_std(id) {
    console.log(id);
    if ($("#stdusr" + id).is(':checked')) {

        $.post("includes/actions.php?t=actualizar_std", {id: id, std: 1}, function (data) {
            console.log(data);
        });
    } else {

        $.post("includes/actions.php?t=actualizar_std", {id: id, std: 0}, function (data) {
            console.log(data);
        });
    }
}

var nombre_formulario = $(".nombre_formulario").attr("id");



$("form[name='" + nombre_formulario + "']").submit(function (e) {
    "use strict";
    console.log(nombre_formulario);
    $("#submit").html("<i class='fas fa-spinner fa-spin'></i> Procesando...");
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: "includes/actions.php?t=" + nombre_formulario,
        type: "POST",
        data: formData,
        async: true,
        success: function (msg) {
            console.log(msg);
            var str = msg;
            var res = str.split("*");
            var err = str.split(" ");
            var vari1 = res[0];
            if (res[0] === 'ok') {
                swal.fire("Excelente!", res[1]);
                location.reload();
            }
            if (res[0] === 'okregistro') {
                $.post("includes/actions.php?t=enviaremail", {"email": res[1], "usuario": res[2]}, function (data) {
                    console.log(data);
                });
                $("#submit").html("<i class='fas fa-check'></i> Ok");
                $('#form_registro').trigger("reset");
                $("#submit").html("REGISTRAR");
                swal.fire("<i class='fas fa-user-check'></i> Su registro fue realizado con exito. <br>Revise su <i class='fas fa-envelope'></i> email para concluir el proceso de activación.").then((value) => {
                    $("#submit").html("REGISTRAR");
                });
            }
            if (err[0] === 'Duplicate') {
                swal.fire("Error!", "<i class='fas fa-exclamation-triangle fa-3x'></i> <br>Usuario o Número de cédula ya existe.");
            }

            if (vari1.trim() === 'okhora') {
                $("." + res[2]).load("includes/" + res[2] + ".php?curso=" + res[3]);
                $('#idh').val('');
            }

            if (res[0] == 'okprofile') {
                swal.fire("Excelente!", res[1], "success");
                window.location.href = res[2]
            }

            if (res[0] == 'redi') {
                window.location.href = res[1]
            }

            if (res[0] === 'okretiro') {


                swal.fire("Muy bien!", res[1], "success");
            }

            if (res[0] === 'erretiro') {


                swal.fire("Error!", res[1], "warning");
            }

            if (res[0] === 'er') {


                swal.fire("Error!", "Información ingresada es incorrecta.", "warning");
            }

        },
        cache: true,
        contentType: false,
        processData: false
    });

    e.preventDefault();
});



function cancelar() {
    'use strict';
    window.location.href = 'index.php';

}


function salir() {
    'use strict';
    $.post("includes/actions.php?t=salir", function (data) {
        window.location.href = 'login';
    });
}




$('.btn').click(function () {
    $('[data-toggle="tooltip"]').tooltip('hide');
});

function filtrarusr(id) {
    $('[data-toggle="tooltip"]').tooltip({
        trigger: 'hover'
    });



    $.post("includes/arbol.php?u=" + id, function (data) {
        $(".arbol").html('');
        $(".arbol").html(data);
    });
}




function eliminar(valor, pag, campo, tabla, valor2, campo2) {

    Swal.fire({
        title: 'Está seguro?',
        text: "No podra revertir esto!",
        icon: 'warning',

        showCancelButton: true,

        cancelButtonColor: '#d33',
        cancelButtonText: "Cerrar",
        confirmButtonText: 'Si, Eliminar!'


    }).then((result) => {


        if (result.isConfirmed) {

            $.ajax({
                type: "POST",
                url: "includes/actions.php?t=eliminar",
                data: {
                    valores: valor,
                    campos: campo,
                    campos2: campo2,
                    tablas: tabla,
                    valores2: valor2
                }
            }).done(function (msg) {

                if (msg == "ok") {

                    Swal.fire(
                            'Eliminado!',
                            'Registro fue eliminado con exito.',
                            'success'
                            )

                    location.reload();
                }
            });

        } else {
            console.log(valor);
        }


    });






}

$('.close').click(function (event)
{
    $('.modal').modal('toggle');

});

$('.cerrar').click(function (event)
{
    $('.modal').modal('toggle');

});


function contenido_modal(pag, titulo, id, tamano) {

    $('.modal').modal('show')
    $(".modal-title").html(titulo);
    $(".modal-dialog").addClass(tamano);
    $(".modal-body").html("<i class='fas fa-spin fa-spinner'></i> Please wait!...");
    $.post("includes/" + pag + ".php?id=" + id, {id2: tamano}, function (data) {
        $(".modal-body").html(data);
    });

}





function ordenar(id, cant) {
    "use strict";
    $.ajax({
        url: "includes/actions.php?t=ordenar_pedido",
        type: "POST",
        data: {
            id_articulo: id,
            cantidad: cant
        },
        async: false,
        success: function (msg) {
            console.log(msg)
            var str = msg;
            var res = str.split("*");

            if (res[0] == 'session') {

                swal.mixin({
                    input: 'email',
                    confirmButtonText: 'Siguiente &rarr;',
                    showCancelButton: false,
                    progressSteps: ['1']
                }).queue([
                    {
                        title: 'Ingresa tu email',
                        text: 'Usa tu email para realizar tus pedidos.'
                    },
                ]).then((result) => {
                    if (result.value) {

                        $.ajax({
                            url: "includes/actions.php?t=login",
                            type: "POST",
                            data: {
                                id_articulo: id,
                                cantidad: cant,
                                email_cliente: result.value[0]
                            },
                            async: false,
                            success: function (msg) {
                                console.log(msg);
                                ordenar(id, cant)
                            }
                        });


                        swal.fire({
                            title: 'Listo!',
                            html:
                                    'Artículo agregado a tu carrito de compras en la parte superior de la página',
                            /*
                             : <pre><code> JSON.stringify(result.value) +
                             '</code></pre>'*/
                            confirmButtonText: 'Continuar!'

                        }).then((result) => {
                            if (result.value) {

                            }
                        })

                    }
                })

            }

            if (res[0] == 'ok') {
                $.post("includes/actions.php?t=total_items&tot_items=1", function (data) {
                    $(".orden_total").html(data);

                    /*$.post( "includes/actions.php?t=valorenviomayor",{"cant":data}, function( data ) {
                     $(".valor_envio").html("$"+data);
                     });*/

                    swal.fire({
                        title: 'Listo!',
                        html:
                                'Artículo agregado con exito a tu carrito de compras.<br> <a class="mt-3 btn btn-info btn-round" href="carrito">Carrito <i class="fas fa-shopping-cart"></i></a>',
                        confirmButtonText: 'Continuar!'

                    }).then((result) => {

                    })

                });


                $("#animacion").addClass("bounceIn")


            }


            if (res[0] == 'er') {
            }

        }
    });
}





$('.btn-number').click(function (e) {
    e.preventDefault();

    var fieldName = $(this).attr('data-field');

    var type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());



    if (!isNaN(currentVal)) {
        if (type == 'minus') {

            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                //$(this).attr('disabled', true);
            }

        } else if (type == 'plus') {

            if (currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if (parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.qty').focusin(function () {
    $(this).data('oldValue', $(this).val());
});
$('.qty').change(function () {

    var minValue = parseInt($(this).attr('min'));
    var maxValue = parseInt($(this).attr('max'));

    var valueCurrent = parseInt($(this).val());

    var name = $(this).attr('name');

    if (valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});
$(".qty").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });



$(".orden_total").load("includes/actions.php?t=total_items&tot_items=1");


function actualizar_valor(id) {
    "use strict";
    var cant = $('#qty' + id).val();


    $.ajax({
        url: "includes/actions.php?t=ordenar_pedido",
        type: "POST",
        data: {
            id: id,
            cantidad: cant,
            editar: 1
        },

        async: true,

        success: function (msg) {

            var str = msg;
            var res = str.split("*");

            console.log(msg);

            if (res[0] === 'ok') {

                $.post("includes/actions.php?t=total_items&tot_items=1", function (data) {
                    $(".orden_total").html(data);

                });




                $(".valor_total").html("<i class='fas fa-spinner fa-spin'></i>");
                $(".total_orden").html("<i class='fas fa-spinner fa-spin'></i>");





                $(".valor_subtotal").load("includes/actions.php?t=valores_articulo&valor_subtotal=1");

                $(".porcentajedesc").load("includes/actions.php?t=valores_articulo&val_porcen=1");

                $(".valor_total").load("includes/actions.php?t=valores_articulo&ver_vt=1");


                $(".valor_descuentos").load("includes/actions.php?t=valores_articulo&val_tot_desc=1");


                $(".total_orden").load("includes/actions.php?t=valores_articulo&total_orden=1");




            }


            if (res[0] === 'er') {
            }

        }

    });


}




function eliminarproducto(pag, tabla, campo, id) {
    "use strict";
    swal.fire({
        title: 'Seguro deseas eliminar este registro?',

        html:
                'Si eliges eliminar no podras recuperar este registro.',

        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:
                '<i class="fas fa-trash"></i> Si',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
                '  No',
        cancelButtonAriaLabel: 'Thumbs down',
    }).then((result) => {

        if (result.value === true) {

            $(".eliminar").load("includes/actions.php?t=eliminarproductos&tabla=" + tabla + "&campo=" + campo + "&id=" + id);

            $.post("includes/actions.php?t=valorenviomayor", function (data) {
                $(".valor_envio").html("$" + data);
            });

            window.location.href = '';//$(".resultado").load("includes/partes_seleccionadas.php"); 

            //ACTUALZIAR VALOR ENVIO

        }

        if (result.dismiss === 'cancel') {

            //$(".resultado").load("includes/partes_seleccionadas.php");  
        }
    });

}





function visto(id) {

    $.post("includes/actions.php?t=vistoanuncio&id=" + id, function (data) {
        console.log(data)
    });

}


function eliminaranuncio(id) {

    Swal.fire({
        title: 'Está seguro?',
        text: "No podra revertir esto!",
        icon: 'warning',

        showCancelButton: true,

        cancelButtonColor: '#d33',
        cancelButtonText: "Cerrar",
        confirmButtonText: 'Si, Eliminar!'


    }).then((result) => {


        if (result.isConfirmed) {

            $.ajax({
                type: "POST",
                url: "includes/actions.php?t=eliminaranuncio",
                data: {
                    id: id
                }
            }).done(function (msg) {

                if (msg == "ok") {

                    Swal.fire(
                            'Eliminado!',
                            'Registro fue eliminado con exito.',
                            'success'
                            )

                    location.reload();
                }
            });

        } else {
            console.log(valor);
        }


    });


}