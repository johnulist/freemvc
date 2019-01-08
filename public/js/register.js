/**
 * Created by angel on 17/05/2017.
 */

$(function () {

    var FORM_REGISTER = $('#formRegister');

      FORM_REGISTER.validate({

          rules:{
              name:{
                  required:true
              },
              lastname:{
                  required:true
              },
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
              name:{
                  required:"El nombre es requerido"
              },
              lastname:{
                  required:"El apellido es requerido"
              },
              email: {
                  required: "El email es requerido.",
                  email: "Este email no es valido"
              },
              password: {
                  required: "La contraseña es requerida",
              }
          }

      });

    FORM_REGISTER.submit(function (e) {
        e.preventDefault();

        if(!FORM_REGISTER.valid()){
            return false;
        }
        var data = FORM_REGISTER.serializeArray();
        $.ajax({
            url:'../../Registro/add/',
            type:'POST',
            dataType: 'JSON',
            data: data,
            beforeSend:function () {
                $('#submit').addClass('loading');
            },
            success:function (res) {

                $('#submit').removeClass('loading');
                FORM_REGISTER.trigger('reset');
                swal({
                    title: '<u>'+ res.notification+'</u>',
                    type: res.error,
                    html:'<h2>'+res.msg+'</h2>',
                    showCloseButton: true,
                    confirmButtonText:
                        '<i class="fa fa-thumbs-up"></i> Aceptar!'

                });
            }
        });
    })


});