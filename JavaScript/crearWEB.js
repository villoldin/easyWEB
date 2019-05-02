// Capturamos los elementos del DOM que vamos a utilizar

var btnMostrar = document.getElementById('mostrarMenu');
var btnQuitar = document.getElementById('quitarMenu');
var menuLateral = document.getElementById('menuLateral');
var menuCreacion = document.getElementById('menuCreacion');
var menuLateralContenido = document.getElementById('menuLateralContenido');
var iframe = document.getElementById('lienzo');
var cabeceraIframe = $(iframe).contents().find('header');
var cuerpoIframe = $(iframe).contents().find('div#cuerpo');
var footerIframe = $(iframe).contents().find('footer');

// Declaramos las variables que contienen los distintos elementos

var header1 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''><img src='' alt=''>LOGOTIPO</a>";
var header2 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''><img src='' alt=''>LOGOTIPO</a><a href=''>Elemento 1</a><a href=''>Elemento 2</a><a href=''>Elemento 3</a><a href=''>Elemento 4</a>";
var header3 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''><img src='' alt=''>LOGOTIPO</a><div><input type='text' name='' id='' placeholder='Buscador'><button>Buscar</button></div>";

// Mostrar y esconder el menú lateral

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

// Ocultamos las partes de personalización que no se van a mostrar en el inicio

$("#headerDisponibles").css("display", "none");
$("#menuLateralDisponibles").css("display", "none");
$("#footerDisponibles").css("display", "none");

// Capturamos el id de la plantilla clickada en la variable que habiamos creado

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

// Hacemos que el lienzo sea dropeable y aplicamos la plantilla elegida en el lienzo

$("#lienzo").droppable({
    drop: function (event, ui) {
        $("#hechoPlant").css("display", "block");

        $(this).attr('src', "../Plantillas/PlantillasHTML/" + idPlantClicked + ".html");
        $(".tarjetaPlantilla").each(function(){
            if ($(this).attr('id') == idPlantClicked) {
                $(this).css("display", "none");
            } else {
                $(this).css("display", "flex");
            }
        });        
    },
});

// Ocultamos menu plantillas al dar a siguiente

$("#hechoPlant").click(function (e) { 
    $("#plantillasDisponibles").css("display", "none");
    $("#headerDisponibles").css("display", "flex");
    var cabeceraIframe = $(iframe).contents().find('header');   
    $(cabeceraIframe).css("background", "#E6E6E6");
});

// Cambiamos el header según la opción escogida

$("#headers").change(function (e) { 
    var headerElegido = $(document.getElementById("headers")).val();
    var cabeceraIframe = $(iframe).contents().find('header');
    if (headerElegido == "header1") {
        $(cabeceraIframe).empty();
        $(cabeceraIframe).append(header1);
    } else if (headerElegido == "header2") {
        $(cabeceraIframe).empty();
        $(cabeceraIframe).append(header2);
    } else if (headerElegido == "header3") {
        $(cabeceraIframe).empty();
        $(cabeceraIframe).append(header3);
    } else if (headerElegido == "vacio") {
        $(cabeceraIframe).empty();
    }
});

// Cambiamos el color de fondo

$("#coloresHeader").change(function (e) { 
    var cabeceraIframe = $(iframe).contents().find('header');
    var color = $(document.getElementById("coloresHeader")).val();
    $(cabeceraIframe).css("background", color);
});

// Ponemos y quitamos la sombra inferior

$("#sombraSi").click(function (e) { 
    var cabeceraIframe = $(iframe).contents().find('header');
    $(cabeceraIframe).css("box-shadow", "0px 0px 40px 0px black");
});

$("#sombraNo").click(function (e) { 
    var cabeceraIframe = $(iframe).contents().find('header');
    $(cabeceraIframe).css("box-shadow", "none");
});

// Ponemos y quitamos los bordes

$("#bordeSi").click(function (e) { 
    var cabeceraIframe = $(iframe).contents().find('header');
    $(cabeceraIframe).css("border", "solid 1px black");
});

$("#bordeNo").click(function (e) { 
    var cabeceraIframe = $(iframe).contents().find('header');
    $(cabeceraIframe).css("border", "0");
});

// Cambiamos el color de la fuente

$("#colorFuenteH").change(function (e) { 
    var enlaces = $(iframe).contents().find('header').find('a');
    var color = $(document.getElementById("colorFuenteH")).val();
    $(enlaces).css("color", color);
});