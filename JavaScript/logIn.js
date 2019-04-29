// Boton Reset campos del formulario

var btnReset = document.getElementById("btnReset");

$(btnReset).click(function (e) { 
    document.getElementById("usuario").value = "";
    document.getElementById("pass").value = "";
});