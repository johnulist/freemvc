/**
 * Created by angel on 17/05/2017.
 */

$(function () {

    var FORM_LOGON = $('#formLogin');


    FORM_LOGON.validate({

        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                maxlength: 24,
                minlength:6
            }
        },
        messages: {
            email: {
                required: "El email es requerido.",
                email: "Este email no es valido"
            },
            password: {
                required: "La contraseña es requerida",
            }
        }
    });


    FORM_LOGON.submit(function (e) {
        e.preventDefault();

        if(!FORM_LOGON.valid()){
            return false
        }
       var data =  FORM_LOGON.serialize();
        $.ajax({
            url:'Home/login',
            type:'POST',
            dataType:'JSON',
            data:data,
            beforeSend:function () {
                $('#submit').addClass('loading');
            },
            success:function (data) {
                $('#submit').removeClass('loading');
                if (data.msg === 'login') {
                    window.location.replace('Administracion');
                }
                else {
                    swal({
                        title:data.error,
                        type: data.type,
                        html:'<h2>'+data.msg+'</h2>',
                        showCloseButton: true,
                        confirmButtonText:
                            '<i class="fa fa-thumbs-up"></i> Aceptar!'
                    });
                }
            }

        });

    });


})