var javascript = document.getElementById("javascript");
var php = document.getElementById("php");
var java = document.getElementById("java");
var diseño = document.getElementById("diseño");

$(javascript).click(function (e) { 
    location.href ="chatJavascript.php";
});

$(php).click(function (e) { 
    location.href ="chatPHP.php";
});

$(java).click(function (e) { 
    location.href ="chatJava.php";
});

$(diseño).click(function (e) { 
    location.href ="chatDiseño.php";
});