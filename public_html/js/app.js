/**
 * Created by angel on 17/05/2017.
 */

$(function () {



    var
        FORM_LOGON = $('#formLogin');


    FORM_LOGON.validate({

        rules:{
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
            }
        },
        messages:{
            email:{
                required:"El email es requerido.",
                email:"Este email no es valido"
            },
            password:{
                required:"La contraseña es requerida",
            }
        }
    });




    FORM_LOGON.submit(function ( e ) {
        e.preventDefault();

    });


})