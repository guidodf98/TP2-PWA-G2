$('#username').on('change', function(){
  let pret = $(this).val();
  $.ajax({
      url: './contenido/ejercicio-4.php',
      dataType: 'json',
      data: {'username': pret},
      success: function(data){
        flag = Object.keys(data);
        let helper = $('#usernamehelp');
        helper.empty();
        helper.append(flag);
        if(data[flag]){
          $('#btn-sub').prop('disabled', true);
          helper.removeClass('text-success d-none');
          helper.addClass('text-danger');
        }else{
          $('#btn-sub').prop('disabled', false);
          helper.removeClass('text-danger d-none');
          helper.addClass('text-success');
        }
      }
  });
});

$("#signup").select(function () { 
  event.preventDefault()
});

$("#signup").validate({
    rules: {
      fullName: {
        required: true,
        pattern: /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ\s]+$/,
        minlength: 7,
        maxlength: 20
      },
      email: {
        required: true,
        email: true
      },
      username: {
        required: true,
        minlength: 4,
        maxlength: 9
      },
      password: {
        required: true,
        minlength: 5,
        maxlength: 12
      },
      passwordRepeat: {
          equalTo: "#password"
      }
    },
    messages: {
      fullName: {
        required: "Este campo es obligatorio.",
        pattern: "Se detectan caracteres inválidos.",
        minlength: "Debe ingresar al menos 7 caracteres.",
        maxlength: "Se acepta un máximo de 20 caracteres."
      },
      email: {
        required: "Este campo es obligatorio.",
        email: "Ingrese un email válido"
      },
      username: {
        required: "Este campo es obligatorio.",
        minlength: "Debe ingresar al menos 4 caracteres.",
        maxlength: "Se acepta un máximo de 9 caracteres."
      },
      password: {
        required: "Este campo es obligatorio.",
        minlength: "Debe ingresar al menos 5 caracteres.",
        maxlength: "Se acepta un máximo de 12 caracteres."
      },
      passwordRepeat: {
        equalTo: "Las contraseñas deben coincidir."
      }
    },
    submitHandler: function(form){
      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
      toastr.success("Registro completo!");
      form.reset();
    }
  });