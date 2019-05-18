// Despliega el menú principal en la sersión móvil

var estadoMenu = 0;

$('.navbar-toggler').click(function (e) { 
	if (estadoMenu == 0) {	
		$(".navbar").css("height", "fit-content");
		$(".collapse").css("display", "flex");
		estadoMenu = 1;
	} else if (estadoMenu == 1) {
		$(".collapse").css("display", "none");
		estadoMenu = 0;
	}
		
}); 

