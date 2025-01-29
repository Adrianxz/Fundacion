$(document).ready(function(){


    function Cargar()
    {
        $.post('Backend/Proveedor/cargar.php', {}, function(data){
            console.log(data);
            $('#CuertoTabla').html(data);
        } );
    }


    Cargar();
  });