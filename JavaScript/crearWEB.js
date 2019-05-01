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

$("#Plantilla1").draggable();
$("#Plantilla2").draggable();
$("#Plantilla3").draggable();
$("#Plantilla4").draggable();

// Capturamos los id en la variable que habiamos creado

$("#Plantilla1").mousedown(function () {
    idPlantClicked = $(this).attr("id");
});

$("#Plantilla2").mousedown(function () {
    idPlantClicked = $(this).attr("id");
});

$("#Plantilla3").mousedown(function () {
    idPlantClicked = $(this).attr("id");
});

$("#Plantilla4").mousedown(function () {
    idPlantClicked = $(this).attr("id");
});

// Hacemos que el lienzo sea dropeable

$("#lienzo").droppable({
    drop: function (event, ui) {
        $("#hechoPlant").css("display", "block");
        $(this).attr('src', "../Plantillas/PlantillasHTML/" + idPlantClicked + ".html");
        $(".tarjetaPlantilla").each(function(){
            console.log(idPlantClicked);
            if ($(this).attr('id') == idPlantClicked) {
                $(this).css("display", "none");
            } else {
                $(this).css("display", "flex");
            }
        });
        
    },
});
