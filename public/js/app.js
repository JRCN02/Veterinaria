import Swal from 'sweetalert2';

$(document).ready(function(){
    $('#deleteUser').click(function(){
        alert("asd");
        Swal.fire({
            title: '¿Seguro de eliminar al usuario?',
            text : 'Accion irreversible',
            icon : 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if(result.isConfirmed){
                Swal.fire('¡Eliminado!', 'El registro ha sido eliminado', 'success');
            }
        });
    });
});


