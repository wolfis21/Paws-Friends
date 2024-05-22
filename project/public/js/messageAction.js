$(document).ready(function() {
    // Función para ocultar el mensaje de éxito
    setTimeout(function() {
        $('#flashMessageSuccess').fadeOut('slow');
    }, 5000); // 5000 milisegundos = 5 segundos

    // Función para ocultar el mensaje de edición
    setTimeout(function() {
        $('#flashMessageEdit').fadeOut('slow');
    }, 5000); // 5000 milisegundos = 5 segundos

    // Función para ocultar el mensaje de destrucción
    setTimeout(function() {
        $('#flashMessageDestroy').fadeOut('slow');
    }, 5000); // 5000 milisegundos = 5 segundos
    setTimeout(function() {
        $('#flashCommentsSuccess').fadeOut('slow');
    }, 5000); // 5000 milisegundos = 5 segundos
    setTimeout(function() {
        $('#flashCommentsDenegate').fadeOut('slow');
    }, 5000); // 5000 milisegundos = 5 segundos
});