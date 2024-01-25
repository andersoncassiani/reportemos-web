$(document).ready(function() {
    $('#formReporte').submit(function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del formulario

        // Obtiene los valores de los campos del formulario
        let formData = new FormData();
        formData.append('direccion', $('#direccion').val());
        formData.append('imagen',$('#imagen').get(0).files[0]);
        formData.append('descripcion', $('#descripcion').val());

        // formData = $("#formReporte").serialize();

        // Realiza una solicitud AJAX
        const form = $("#formReporte");
        const urlForm = form.attr('action');

        $.ajax({
            url: urlForm,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function(response) {
                if (response) {
                    swal("Reporte realizado con éxito", response.success, "success");
                    // Limpia los campos del formulario
                    $('#direccion, #imagen, #descripcion').val('');//Limpia todos los inputs del modal
                    $('#exampleModal').modal('hide');//oculta el modal despues de guardar
                    $('#mostrarReportes').load(location.href + ' #mostrarReportes');//Refrezac el div para mostrar los reportes nuevos
                }
            },

            error: function(error) {
                if (error) {
                    // Muestra mensajes de error debajo de los campos correspondientes
                    $('#direccionError').html(error.responseJSON.errors.direccion);
                    $('#imagenError').html(error.responseJSON.errors.imagen);
                    $('#descripcionError').html(error.responseJSON.errors.descripcion);
                }
            }
        });
    });
});
