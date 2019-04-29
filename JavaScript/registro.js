// Boton Reset campos del formulario

var btnReset = document.getElementById("btnReset");

$(btnReset).click(function (e) { 
    document.getElementById("usuario").value = "";
    document.getElementById("nombre").value = "";
    document.getElementById("apellido1").value = "";
    document.getElementById("apellido2").value = "";
    document.getElementById("email").value = "";    
    document.getElementById("pass").value = "";

});