$(document).ready(function () {
    // Funcion para desplegar el pie de pagina
    $("#buttonfooter").click(function(){
        $("#footer").slideToggle();
      });

    // Funcion para darle animacion Categorias Populares cuando entra el cursor
    $(".categ").mouseenter(function () {
        $(this).css("background-color", "white");
        $(this).css("color", "rgb(16, 36, 83)");
      
        
    });
    
    // Funcion para darle animacion Categorias Populares cuando sale el cursor
    $(".categ").mouseleave(function () {
        $(this).css("background-color", "rgb(16, 36, 83)");
        $(this).css("color", "white");
        
    }); 
    
    //Tooltip Carrito
    $('[data-toggle="tooltip"]').tooltip();

    //Barra de navegacion fija
    $(window).scroll(function(){
        var alto = $("#encabezado").height();
        if($(this).scrollTop() > alto)
        {
            $('#navbar-main').addClass('header2');
           
        } else{
            $('#navbar-main').removeClass('header2');

        }
    }); 
    
    });


