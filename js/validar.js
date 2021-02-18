$(document).ready(function() {
    $("#basic-form").validate({
      rules: {
        name : {
          required: true,
          minlength: 3
        },
        apellido: {
          required: true,
          minlenght: 3
        },
        email: {
          required: true,
          email: true
        },
        comenta: {
          required: true,
          minlenght: 10
        }
      },
      messages : {
        name: {
          minlength: "Debe ser un nombre real"
        },
        apellido: {
          minlenght: "Debe ser un apellido real"
        },
        email: {
          email: "El formato del email debe ser abc@domain.tld"
        },
        comenta: {
          minlenght: "Debe obtener al menos 10 caracteres"
        }
      }
    });
  });