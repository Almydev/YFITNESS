
// ********** Script para el reproductor del video **********

const $video = document.querySelector('#video')
const $play = document.querySelector('#play')
const $pause = document.querySelector('#pause')
const $backward = document.querySelector('#backward')
const $forward = document.querySelector('#forward')

window.addEventListener("load", inicio);

function inicio() {
    document.getElementById("play").addEventListener('click',handlePlay);
    document.getElementById("pause").addEventListener('click',handlePause);
    document.querySelector('#backward').addEventListener('click',handleBackward)
    document.querySelector('#forward').addEventListener('click',handleForward)
    document.querySelector('#video').addEventListener('loadedmetadata',handleLoaded)
    document.querySelector('#video').addEventListener('timeupdate',handleTimeUpdate)
    document.querySelector('#progress').addEventListener('input',handleInput) 
}


function handlePlay(){
    document.querySelector('#video').play()
    document.getElementById("play").hidden = true
    document.getElementById("pause").hidden = false
}

function handlePause(){
    document.querySelector('#video').pause()
    document.getElementById("play").hidden = false
    document.getElementById("pause").hidden = true
}

function handleBackward(){
    document.querySelector('#video').currentTime -= 10
}

function handleForward(){
    document.querySelector('#video').currentTime += 10
}

function handleLoaded(){
    document.querySelector('#progress').max = document.querySelector('#video').duration
}

function handleTimeUpdate(){
    document.querySelector('#progress').value=document.querySelector('#video').currentTime
}

function handleInput(){
    document.querySelector('#video').currentTime = document.querySelector('#progress').value
}


// ********** Script para el reproductor del video **********




// ********** Validaciones del formulario de Registro **********

document.addEventListener("DOMContentLoaded",inicio);


function inicio(){
    
    document.getElementById("btnRegistrar").addEventListener("click",validarRegistro)
        
}

function validarRegistro (e){
    
        
        e.preventDefault();
    

        //Recojo en variables los datos introducidos por el usuario para poder registrar el coche
        let nombre = document.getElementById("txtNombre").value;
        let primerApellido = document.getElementById("txtPrimerApellido").value;
        let segundoApellido = document.getElementById("txtSegundoApellido").value;
        let correo = document.getElementById("txtEmail").value;
        let telefono = document.getElementById("txtTelefono").value;
        let fechaNacimiento = document.getElementById("fechaNacimiento").value;
        let username = document.getElementById("txtNombreUsuarioR").value;
        let contraUno = document.getElementById("txtPasswordR").value;;
        let contraDos = document.getElementById("txtPasswordRR").value;
        
        let texto = "";
        let contadorValidacion = 0;

        //Con la ayuda de un contador voy validando que cuando las 3 condiciones se cumplen (son iguales a true) dichos datos se guarden en la matriz
        if(validarNombre(nombre)==true){
            contadorValidacion++;
        }else{
            texto = texto + "- El nombre es obligatorio y no puede contener espacios \n";
        }

        if(validarNombre(primerApellido)==true){
            contadorValidacion++;
        }else{
            texto = texto + "- El primer apellido es obligatorio y no puede contener espacios \n";
        }

        if(validarNombre(segundoApellido)==true){
            contadorValidacion++;
        }else{
            texto = texto + "- El segundo apellido es obligatorio y no puede contener espacios \n";
        }

        if(validarCorreo(correo)==true){
            contadorValidacion++;
        }else{
            texto = texto + "- El correo es obligatorio y no puede contener espacios \n";
        }

        if(validarTelefono(telefono)){
            contadorValidacion++;
        }else{
            texto = texto + "- Formato del teléfono incorrecto (123456789 O +00123456789) \n";
        }

        if(validarFechaNacimiento(fechaNacimiento)){
            contadorValidacion++;
        }else{
            texto = texto + "- El año no puede coindidir con los 3 ultimos y es obligatorio \n";
        }
      
        alert(texto);

   
}



function validarNombre(x){
    let contador = 0;
    for(let i=0 ; i < x.length ; i++){
        if (x[i] == ' '){ 
            contador++;
        }
    }
    if(x == '' || contador!=0){
        return false;
    }else{
        return true;
    }
}

function validarCorreo(x){

    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(x)) {
      return true;
    } else {
      return false;
    }
}

function validarTelefono(x){
    let contador = 0;

    if(x.length == 9){
        for(let i=0 ;i< x.length;i++){
            if(!isNaN(x[i])){
                contador++;
            }
        }
        //En este punto valido que el contador (el total de números del teléfono) sea 9
        if(contador == 9){
            return true;
        }else{
            return false;
        }
    }
    else if(x.length == 12){

        if( (x[0] == "+") && (!isNaN(x[1])) && (!isNaN(x[2])) ){
        
            return true;
        }
        else{
            
            return false; 
        }
        
    }
    else{
        return false; 
    }
}

function validarFechaNacimiento(x){
        
        let cadena = x;
        let anhoNacimiento = cadena.substring(0,4);
        let anhoNacimientoo = Number(anhoNacimiento);
        let hoy = new Date();
        let esteAnho = hoy.getFullYear()
        alert(esteAnho-3)
        
        if(((esteAnho-3) > anhoNacimientoo) || (cadena="")){
            return false;
        }else{
            return true;
        }


}





