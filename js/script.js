
window.addEventListener("load", inicio);

function inicio(){
    document.querySelector(".popup").addEventListener("click", abrirPopup);
}
function abrirPopup(){
    document.querySelector("section").classList.add("active");
    document.getElementById("close").addEventListener("click", cerrarPopup);
}
function cerrarPopup(){
    document.querySelector("section").classList.remove("active");
}


