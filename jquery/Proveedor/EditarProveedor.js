$(document).on('click', '#Actualizar', function(e) {
  e.preventDefault();

  var Nombre = $('input[name="Nombre"]').val().trim();
  var Nit = $('input[name="NitAc"]').val().trim();
  var Direcc = $('input[name="Direcc"]').val().trim();
  var Tel = $('input[name="Tel"]').val().trim();
  var email = $('input[name="email"]').val().trim();
  var id = $('#proveedor-id').val();  

console.log(Nombre + " " + Nit + " " + Direcc + " "+ Tel + " " + email);
  
  if (!Nombre || !Nit || !Direcc || !Tel || !email) {
    Swal.fire({
      icon: 'warning',
      title: 'Campos Vacíos',
      text: 'Todos los campos son obligatorios',
      confirmButtonColor: '#d33',
    });
    return;  
  }

  if (id === null || id === undefined) {
    console.log("El Id no está definido correctamente.");
    return;
  }

  Swal.fire({
    title: '¿Quieres actualizar este proveedor?',
    text: "Recuerda, será permanente!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Actualizar'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "Backend/proveedor/Editar.php",
        method: "POST",
        data: { 
          Nombre: Nombre, 
          code: id,
          Nit: Nit,
          Direcc: Direcc,
          Tel: Tel, 
          email: email
        }, 
        success: function(response) {
          Swal.fire({
            title: response.message, 
            icon: 'success',
            showConfirmButton: false,
            timer: 1000
          }).then(() => {
            setTimeout(() => {
              window.location.reload();
            }, 500);
          });
        },
        error: function(xhr, status, error) {
          var errorMessage = JSON.parse(xhr.responseText);  
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Error en el servidor',  
            confirmButtonColor: '#d33',
          });
        }
      });
    }
  });
});
