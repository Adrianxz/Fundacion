

function imprimirValores() {
    var form = document.getElementById('Producto');
    var inputs = form.getElementsByTagName('input');

    for (var i = 0; i < inputs.length; i++) {
        console.log(inputs[i].name + ': ' + inputs[i].value);
    }

    var L = document.getElementById('X');

    console.log(L.value);
}

function validar() {
    console.log("Validando...");

    var form = document.getElementById('Proveedor');
    var inputs = form.getElementsByTagName('input');

    var mensaje = "";
    var mensajeLength = "";


    for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];

        if (input.value.trim() === '') {
            mensaje += `Todos los campos son obligatorios. <br>`;
        }
    }

    
    if (mensaje !== "") {
        Swal.fire({
            icon: 'error',
            title: 'Errores en el formulario',
            html: mensaje
        });
        return false; 
    }

    
    for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];

        if (input.name === "Nit" && input.value.length !== 9) {
            mensajeLength += "El NIT debe tener exactamente 9 dígitos. <br>";
        }

        if (input.name === "Telefono" && input.value.length !== 10) {
            mensajeLength += "El teléfono debe tener exactamente 10 dígitos. <br>";
        }
    }

    
    if (mensajeLength !== "") {
        Swal.fire({
            icon: 'error',
            title: 'Errores en los datos ingresados',
            html: mensajeLength
        });
        return false; 
    }

    return true; 
}



$(document).on("click", "#AgregarProveedor", function (event) {
    event.preventDefault();

    if (validar()) {
        let form = document.querySelector('#Proveedor'); // Formulario
        let formData = new FormData(form);

        fetch('Backend/Proveedor/agregar.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Convertimos la respuesta a JSON
        .then(data => {
            if (data.errorMessage) {
                // Si hay un error (mensaje devuelto por PHP)
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    html: data.message
                });
            } else {
                // Si se realiza correctamente
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });

                Toast.fire({
                    title: data.message, 
                    icon: 'success'
                }).then(() => {
                    
                    setTimeout(() => {
                        window.location.reload();
                    },500)
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ocurrió un problema al procesar la solicitud. Por favor, intenta nuevamente.'
            });
        });
    }
});




