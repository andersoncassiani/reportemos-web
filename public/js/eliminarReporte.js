$(document).ready(function() {
    // Utilizamos 'on' en lugar de 'submit' para mayor flexibilidad
    $(document).on('click', '#form-submit-form', function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del formulario

        const form = $('#eliminarReporte'); // Utilizamos 'this' para referenciar el formulario actual
        const urlForm = form.attr('action');

        swal({
            title: "¿Quieres eliminar este reporte?",
            text: "Haz clic en el botón OK para confirmar!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancelar'
        })
        .then((result) => {
            console.log(result);
            if (result) {
                // Realiza una solicitud AJAX para eliminar el reporte
                $.ajax({
                    url: urlForm,
                    method: 'DELETE',
                    success: function(response) {
                        console.log(response);
                        // Muestra un mensaje de éxito y actualiza la tabla después de la eliminación
                        
                        swal("El reporte se ha eliminado!", "Eliminamos tu reporte exitosamente.");
                        $('#mostrarReportes').load(location.href + ' #mostrarReportes'); // Refrescar el div para mostrar los reportes nuevos
                    },
                    error: function(xhr, status, error) {
                        console.log("Error en la solicitud AJAX:", status, error);
                        swal("Error", "Hubo un problema al eliminar el reporte.", "error");
                    }
                });
            }
        });
    });
});
