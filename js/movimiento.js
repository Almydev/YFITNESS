$(document).ready(e);

function e(){
    $("#ejercicios").click(function(){
        $("#contenedor").load("/html/ejercicios.html");
    });

    $("#rutina").click(function(){
        $("#contenedor").load("/html/mirutina.html");
    });
    $("#calendario").click(function(){
        $("#contenedor").load("/html/calendario.html");
    });
    $("#ajustes").click(function(){
        $("#contenedor").load("/html/ajustes.html");
    });
    $("#soporte").click(function(){
        $("#contenedor").load("/html/soporteyfitness.html");
    })



    $("#bodybuilding").click(function(){
        $("body").load("/php/listadoEjercicios.html");
    })

    

}
    
