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

// ------------------- Soltar plantilla en el lienzo -------------------

var idPlantClicked = "";

// Hacemos que las tarjetas de las plantillas sean arrastrables

$("#plantilla1").draggable();
$("#plantilla2").draggable();
$("#plantilla3").draggable();
$("#plantilla4").draggable();

// Capturamos los id en la variable que habiamos creado
$("#plantilla1").mousedown(function () {
    idPlantClicked = $(this).attr("id");
    console.log(idPlantClicked);
    console.log("HOLA");
});

$("#plantilla2").mousedown(function () {
    idPlantClicked = $(this).attr("id");
    console.log(idPlantClicked);
});

$("#plantilla3").mousedown(function () {
    idPlantClicked = $(this).attr("id");
    console.log(idPlantClicked);
});

$("#plantilla4").mousedown(function () {
    idPlantClicked = $(this).attr("id");
    console.log(idPlantClicked);
});

// Hacemos que el lienzo sea dropeable
$("#lienzo").droppable({
    drop: function (event, ui) {
        $(this).attr('src', "../html/" + idPlantClicked + ".html");
    },
});

$("#lienzo header").click(function (e) { 
    console.log("HOLA");   
});

