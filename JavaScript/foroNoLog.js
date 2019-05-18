// Mostrar solo la opcion de publicar si has iniciado sesión o no

var publicar = document.getElementById('formPublicacion');

$(publicar).css('display', 'none');

// Cambiar cabecera dependiendo si has iniciado sesión o no

var foroLog = document.getElementById('foroLog');
var foroNoLog = document.getElementById('foroNoLog');
var formulario = document.getElementById("formAdmin");

$(foroLog).css('display', 'none');
$(foroNoLog).css('display', 'flex');
$(formulario).css("display", "none");