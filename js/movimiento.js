$(document).ready(e);

function e(){
    $("#ejercicios").click(function(){
        $("#contenedor").load("/HTML/ejercicios.html");
    });

    $("#rutina").click(function(){
        $("#contenedor").load("/HTML/mirutina.html");
    });
    $("#calendario").click(function(){
        $("#contenedor").load("/HTML/calendario.html");
    });
    $("#ajustes").click(function(){
        $("#contenedor").load("/HTML/ajustes.html");
    });
    $("#soporte").click(function(){
        $("#contenedor").load("/HTML/soporteyfitness.html");
    })

}
    
