function Eliminar(id) {
  var Idp = id;
  Swal.fire({
    title: '¿Quieres eliminar este Proveedor?',
    text: "Recuerda, será para siempre!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "Backend/Proveedor/Eliminar.php",
        method: "POST",
        data: { Id: Idp }, 

        success: function(response) {
          
          Swal.fire({
            title: '¡Eliminado!',
            text: 'Has eliminado este proveedor con éxito',
            icon: 'success',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              
              location.reload();

              console.log(Id);
            }
          });
        },

        error: function(xhr, status, error) {
          Swal.fire(
            'Error',
            'No se pudo eliminar el registro. Inténtalo de nuevo más tarde.',
            'error'
          );
          console.log('Error:', error); // Para depuración
        }
      });
    }
  });
}
