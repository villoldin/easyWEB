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

            // Declaramos las variables que contienen los distintos elementos de personalización

var header1 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''><img src='' alt=''>LOGOTIPO</a>";
var header2 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''><img src='' alt=''>LOGOTIPO</a><a href=''>Elemento 1</a><a href=''>Elemento 2</a><a href=''>Elemento 3</a><a href=''>Elemento 4</a></div>";
var header3 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''><img src='' alt=''>LOGOTIPO</a><div><input type='text' name='' id='' placeholder='Buscador'><button>Buscar</button></div>";

var submenu1 = "<div style='height: 100%; display: flex; flex-direction: column; justify-content: space-around; align-items: center;'><a href=''>Elemento1</a><a href=''>Elemento2</a><a href=''>Elemento3</a><a href=''>Elemento4</a></div>";
var submenu2 = "<div style='height: 100%; display: flex; flex-direction: column; justify-content: space-around; align-items: center;'><a href=''><img src=''>Imagen1</a><a href=''><img src=''>Imagen2</a><a href=''><img src=''>Imagen3</a><a href=''><img src=''>Imagen4</a></div>";

var submenu1L = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''>Elemento1</a><a href=''>Elemento2</a><a href=''>Elemento3</a><a href=''>Elemento4</a></div>";
var submenu2L = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''><img src=''>Imagen1</a><a href=''><img src=''>Imagen2</a><a href=''><img src=''>Imagen3</a><a href=''><img src=''>Imagen4</a></div>";

var footer1 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><p>Copyright © 2019 EasyWEB</p><a href=''>Twitter</a><a href=''>Facebook</a><a href=''>Youtube</a><a href=''>Linkedin</a></div>";
var footer2 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''>Twitter</a><a href=''>Facebook</a><a href=''>Youtube</a><a href=''>Linkedin</a><p>Copyright © 2019 EasyWEB</p></div>";
var footer3 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><p>Copyright © 2019 EasyWEB</p><a href=''>Política de cookies</a></div>";
var footer4 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><a href=''>Política de cookies</a><p>Copyright © 2019 EasyWEB</p></div>";
var footer5 = "<div style='height: 100%; display: flex; flex-direction: row; justify-content: space-around; align-items: center;'><p>Copyright © 2019 EasyWEB</p></div>";


            // Mostrar y esconder el menú lateral

$(btnMostrar).click(function (e) { 
    $(menuLateral).removeClass('col-md-0');
    $(menuCreacion).removeClass('col-md-12');
    $(menuLateral).addClass('col-md-2');
    $(menuCreacion).addClass('col-md-10');
    $("#mostrarM").css('display', 'none');
    $("#quitarM").css('display', 'block');
    $(menuLateralContenido).css('display', 'block');
});

$(btnQuitar).click(function (e) { 
    $(menuLateral).removeClass('col-md-2');
    $(menuCreacion).removeClass('col-md-10');
    $(menuLateral).addClass('col-md-0');
    $(menuCreacion).addClass('col-md-12');
    $("#quitarM").css('display', 'none');
    $(menuLateralContenido).css('display', 'none');
    $("#mostrarM").css('display', 'block');
});



// ------------------- Soltar plantilla en el lienzo ------------------- //


var idPlantClicked = "";

            // Hacemos que las tarjetas de las plantillas sean arrastrables

$("#Plantilla1").draggable();
$("#Plantilla2").draggable();
$("#Plantilla3").draggable();
$("#Plantilla4").draggable();

            // Ocultamos las partes de personalización que no se van a mostrar en el inicio

$("#headerDisponibles").css("display", "none");
$("#menuDisponibles").css("display", "none");
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
        $("#menuGenerar").css("display", "block");
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



// ------------------- PERSONALIZACIÓN HEADER ------------------- //


            // Volvemos a la personalización header al dar a atrás

$("#atrasHeader").click(function (e) {    
    $("#headerDisponibles").css("display", "none");    
    $("#plantillasDisponibles").css("display", "flex");
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
    var color = $(document.getElementById("coloresHeader")).val().toLowerCase();
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
    $(cabeceraIframe).css("border-bottom", "solid 1px black");
});

$("#bordeNo").click(function (e) { 
    var cabeceraIframe = $(iframe).contents().find('header');
    $(cabeceraIframe).css("border-bottom", "0");
});

            // Cambiamos el color de la fuente

$("#colorFuenteH").change(function (e) { 
    var enlaces = $(iframe).contents().find('header').find('a');
    var color = $(document.getElementById("colorFuenteH")).val().toLowerCase();
    $(enlaces).css("color", color);
});

            // Ocultamos menu headers al dar a siguiente

$("#hechoHeader").click(function (e) { 
    $("#headerDisponibles").css("display", "none");
    if (idPlantClicked != "Plantilla1") {
        $("#menuDisponibles").css("display", "flex");
        var submenuIframe = $(iframe).contents().find('#submenu');   
        $(submenuIframe).css("background", "#E6E6E6");
        if (idPlantClicked == "Plantilla4") {
            $("#menusLateral").css("display", "flex");
            $("#menus").css("display", "none");
        } else {
            $("#menusLateral").css("display", "none");
            $("#menus").css("display", "flex");
        }
    } else {
        $("#footerDisponibles").css("display", "flex");
        var footerIframe = $(iframe).contents().find('footer');   
        $(footerIframe).css("background", "#E6E6E6");
    }    
});
  


// ------------------- PERSONALIZACIÓN SUBMENU ------------------- //


            // Volvemos a la personalización header al dar a atrás

$("#atrasMenu").click(function (e) {    
    $("#menuDisponibles").css("display", "none");    
    $("#headerDisponibles").css("display", "flex");
});


            // Cambiamos el submenú según la opción escogida

$("#menus").change(function (e) { 
    var submenuElegido = $(document.getElementById("menus")).val().toLowerCase();
    var submenuIframe = $(iframe).contents().find('#submenu');
    if (submenuElegido == "submenu1") {
        $(submenuIframe).empty();
        $(submenuIframe).append(submenu1);
    } else if (submenuElegido == "submenu2") {
        $(submenuIframe).empty();
        $(submenuIframe).append(submenu2);
    } else if (submenuElegido == "vacio") {
        $(submenuIframe).empty();
    }
});

$("#menusLateral").change(function (e) { 
    var submenuLateralElegido = $(document.getElementById("menusLateral")).val().toLowerCase();
    var submenuIframe = $(iframe).contents().find('#submenu');
    if (submenuLateralElegido == "submenu1L") {
        $(submenuIframe).empty();
        $(submenuIframe).append(submenu1L);
    } else if (submenuLateralElegido == "submenu2L") {
        $(submenuIframe).empty();
        $(submenuIframe).append(submenu2L);
    }
});
        

            // Cambiamos el color de fondo

$("#coloresMenu").change(function (e) { 
    var submenuIframe = $(iframe).contents().find('#submenu');
    var color = $(document.getElementById("coloresMenu")).val().toLowerCase();
    $(submenuIframe).css("background", color);
});
        

            // Ponemos y quitamos los bordes
        
$("#bordeSiSM").click(function (e) { 
    var submenuIframe = $(iframe).contents().find('#submenu');
    $(submenuIframe).css("border", "solid 1px black");
    $(submenuIframe).css("border", "solid 1px black");
});
        
$("#bordeNoSM").click(function (e) { 
    var submenuIframe = $(iframe).contents().find('#submenu');
    $(submenuIframe).css("border", "0");
    $(submenuIframe).css("border", "0");
});
        

            // Cambiamos el color de la fuente
        
$("#colorFuenteSM").change(function (e) { 
    var enlaces = $(iframe).contents().find('#submenu').find('a');
    var color = $(document.getElementById("colorFuenteSM")).val().toLowerCase();
    $(enlaces).css("color", color);
});


            // Ocultamos menu submenús al dar a siguiente

$("#hechoMenu").click(function (e) {    
    $("#menuDisponibles").css("display", "none");    
    $("#footerDisponibles").css("display", "flex");
    var footerIframe = $(iframe).contents().find('footer');   
    $(footerIframe).css("background", "#E6E6E6");
});



// ------------------- PERSONALIZACIÓN FOOTER ------------------- //


            // Volvemos a la personalización submenu al dar a atrás

$("#atrasFooter").click(function (e) {    
    $("#footerDisponibles").css("display", "none");    
    if (idPlantClicked != "Plantilla1") {
        $("#menuDisponibles").css("display", "flex");
        if (idPlantClicked == "Plantilla4") {
            $("#menusLateral").css("display", "flex");
            $("#menus").css("display", "none");
        } else {
            $("#menusLateral").css("display", "none");
            $("#menus").css("display", "flex");
        }
    } else {
        $("#headerDisponibles").css("display", "flex");

    }    
});
        

            // Cambiamos el footer según la opción escogida

$("#footers").change(function (e) { 
    var footerIframe = $(iframe).contents().find('footer');
    var footerElegido = $(document.getElementById("footers")).val().toLowerCase();
    if (footerElegido == "footer1") {
        $(footerIframe).empty();
        $(footerIframe).append(footer1);
    } else if (footerElegido == "footer2") {
        $(footerIframe).empty();
        $(footerIframe).append(footer2);
    } else if (footerElegido == "footer3") {
        $(footerIframe).empty();
        $(footerIframe).append(footer3);
    } else if (footerElegido == "footer4") {
        $(footerIframe).empty();
        $(footerIframe).append(footer4);
    } else if (footerElegido == "footer5") {
        $(footerIframe).empty();
        $(footerIframe).append(footer5);
    } else if (footerElegido == "vacio") {
        $(footerIframe).empty();
    }
});


            // Cambiamos el color de fondo

$("#coloresFooter").change(function (e) { 
    var footerIframe = $(iframe).contents().find('footer');
    var color = $(document.getElementById("coloresFooter")).val().toLowerCase();
    $(footerIframe).css("background", color);
});


            // Ponemos y quitamos la sombra inferior

$("#sombraSiF").click(function (e) { 
    var footerIframe = $(iframe).contents().find('footer');
    $(footerIframe).css("box-shadow", "0px 0px 40px 0px black");
});

$("#sombraNoF").click(function (e) { 
    var footerIframe = $(iframe).contents().find('footer');
    $(footerIframe).css("box-shadow", "none");
});
            
            
            // Ponemos o quitamos los bordes

$("#bordeSiF").click(function (e) { 
    var footerIframe = $(iframe).contents().find('footer');
    $(footerIframe).css("border-top", "solid 1px black");
});
        
$("#bordeNoF").click(function (e) { 
    var footerIframe = $(iframe).contents().find('footer');
    $(footerIframe).css("border-top", "0");
});


           // Cambiamos el color de la fuente
        
$("#colorFuenteF").change(function (e) { 
    var enlaces = $(iframe).contents().find('footer').find('a');
    var parrafos = $(iframe).contents().find('footer').find('p');
    var color = $(document.getElementById("colorFuenteF")).val().toLowerCase();
    $(enlaces).css("color", color);
    $(parrafos).css("color", color);
});



// ------------------- GENERAR CODIGO ------------------- //

var btnGenerar = document.getElementById("btnGenerar");
var enlaceDescargar = document.getElementById("descargar");

$(btnGenerar).click(function (e) {    
    var codigoHead = lienzo.contentWindow.document.head.innerHTML;
    var codigoBody = lienzo.contentWindow.document.body.innerHTML;
    var codigoIframe = "<!DOCTYPE html><html lang='en'><head>" + codigoHead + "</head><body style='margin: 0; box-sizing: border-box; width: 100vw; height: 100vh; display: flex; flex-direction: row; flex-wrap: wrap; border: solid 1px black;'>" + codigoBody + "</body></html>";
    enlaceDescargar.download = "miPagina.html";
    enlaceDescargar.href = "data:application/octet-stream," + encodeURIComponent(codigoIframe);
});