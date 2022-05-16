var btnAbrirPopup = document.getElementById('hola');
var overlay = document.getElementById('overlay');
var popup = document.getElementById('popup');
var btnCerrarPopup = document.getElementById('btn-cerrar-popup');
btnAbrirPopup.addEventListener("click" ,function(){

})
document.getElementById('hola').addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});