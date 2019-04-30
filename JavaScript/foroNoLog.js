// Mostrar solo la opcion de publicar si estas log

var publicar = document.getElementById('formPublicacion');

$(publicar).css('display', 'none');

// Cambiar cabecera

var foroLog = document.getElementById('foroLog');
var foroNoLog = document.getElementById('foroNoLog');

$(foroLog).css('display', 'none');
$(foroNoLog).css('display', 'block');