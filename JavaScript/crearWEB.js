// Mostrar y esconder el menú lateral

var btnMostrar = document.getElementById('mostrarMenu');
var btnQuitar = document.getElementById('quitarMenu');
var menuLateral = document.getElementById('menuLateral');
var menuCreacion = document.getElementById('menuCreacion');
var menuLateralContenido = document.getElementById('menuLateralContenido');

$(btnMostrar).click(function (e) { 
    $(menuLateral).removeClass('col-md-0');
    $(menuCreacion).removeClass('col-md-12');
    $(menuLateral).addClass('col-md-2');
    $(menuCreacion).addClass('col-md-10');
    $(btnMostrar).css('display', 'none');
    $(btnQuitar).css('display', 'block');
    $(menuLateralContenido).css('display', 'block');
});

$(btnQuitar).click(function (e) { 
    $(menuLateral).removeClass('col-md-2');
    $(menuCreacion).removeClass('col-md-10');
    $(menuLateral).addClass('col-md-0');
    $(menuCreacion).addClass('col-md-12');
    $(btnQuitar).css('display', 'none');
    $(menuLateralContenido).css('display', 'none');
    $(btnMostrar).css('display', 'block');
});