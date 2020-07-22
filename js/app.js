$(document).ready(function () {
    // Funcion para desplegar el pie de pagina
    $("#buttonfooter").click(function(){
        $("#footer").slideToggle();
      });

    // Funcion para darle animacion Categorias Populares cuando entra el cursor
    $(".categ").mouseenter(function () {
        $(this).css("background-color", "white");
        $(this).css("color", "rgb(16, 36, 83)");
        $(this).css("box-shadow", "0px 5px 9px 0 rgba(255, 255, 255, 0.5), 0px 7px 20px 0 rgba(255, 255, 255, 0.39)");
        $(this).css("z-index", "1");
        
    });
    
    // Funcion para darle animacion Categorias Populares cuando entra el cursor
    $(".categ").mouseleave(function () {
        $(this).css("background-color", "rgb(16, 36, 83)");
        $(this).css("color", "white");
        $(this).css("box-shadow", "none");
        $(this).css("z-index", "none");
        
    }); 
    
    });


