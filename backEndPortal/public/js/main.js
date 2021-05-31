var secciones = [];
//var rutas = [" ",index","acercade","servicios","portafolio","contacto"];
var rutas = ["/","/acercade","/servicios","/stats","/portafolio","/contacto"];
var bajo_logeo = ["seccion_2","seccion_5"];
var usuario_logeado = true;
//Get the button:
//mybutton = document.getElementById("myBtn");

window.onload = init;

function init (){
	setTimeout(hideURLbar, 0);
	asignarVariables();
	asignarEventos();
	new Splide( '.splide' ).mount();
//new Splide( '.splide', {
	//type   : 'loop',
	//padding: {
	//	right: '5rem',
	//	left : '5rem',
	//},
//} ).mount();
// When the user scrolls down 20px from the top of the document, show the button
//window.onscroll = function() {scrollFunction()};
}


function hideURLbar(){
	window.scrollTo(0, 1);
}

function asignarVariables(){
	secciones["/"] = document.getElementById("/");
	secciones["/acercade"] = document.getElementById("/acercade");
	secciones["/servicios"] = document.getElementById("/servicios");
	secciones["/stats"] = document.getElementById("/stats");
	secciones["/portafolio"] = document.getElementById("/portafolio");
	secciones["/contacto"] = document.getElementById("/contacto");
}

function asignarEventos(){
	//var temp;
	for(var i in secciones)
	{
		/*console.log(i);*/
		//temp = secciones[i]; 
		//console.log(temp); /*estoy recuperando ese elemnto html como una referencia*/
		secciones[i].addEventListener("click", navegacion); //ya todos van a navegar a traves de una funcion que se llama navegacion
        console.log(secciones[i])
    }
}



function navegacion(event){
	
	var id = event.target.id;  
	console.log(id);
	location.href = id; 
} 




function controlAcceso(indice){
	for(i in bajo_logeo){
		if(bajo_logeo[i] == indice){
			return true;
		} 
	}
	return false;
}




//function scrollFunction() {
  //if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //mybutton.style.display = "block";
  //} else {
    //mybutton.style.display = "none";
  //}
//}

// When the user clicks on the button, scroll to the top of the document
//function topFunction() {
  //document.body.scrollTop = 0; // For Safari
  //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
//}

function getDocHeight() {
    var D = document;
    return Math.max(
        D.body.scrollHeight, D.documentElement.scrollHeight,
        D.body.offsetHeight, D.documentElement.offsetHeight,
        D.body.clientHeight, D.documentElement.clientHeight
    )
}

function amountscrolled(){
    var winheight= window.innerHeight || (document.documentElement || document.body).clientHeight
    var docheight = getDocHeight()
    var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop
    var trackLength = docheight - winheight
    var pctScrolled = Math.floor(scrollTop/trackLength * 100) // gets percentage scrolled (ie: 80 or NaN if tracklength == 0)
    console.log(pctScrolled + '% scrolled');
    if (pctScrolled>5) {
    	flecha.classList.remove("ocultar_flecha");
    }
    else{
    	flecha.classList.add("ocultar_flecha");
    }
}

window.addEventListener("scroll", function(){
	amountscrolled()
}, false);
