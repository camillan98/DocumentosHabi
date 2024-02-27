$(document).ready(function() {
    // Animación de Color al pasar el ratón para el botón "¿Quiénes somos?"
    $("nav ul li:nth-child(1) a").hover(function() {
        $(this).css("background-color", "#ff0000"); // Cambia el color de fondo al pasar el ratón
    }, function() {
        $(this).css("background-color", ""); // Restaura el color de fondo original al quitar el ratón
    });

    // Animación de Efecto Hover para el botón "¿Cómo funciona?"
    $("nav ul li:nth-child(2) a").hover(function() {
        $(this).addClass("hover-effect"); // Agrega una clase con el efecto hover
    }, function() {
        $(this).removeClass("hover-effect"); // Elimina la clase al quitar el ratón
    });

    // Animación de Deslizamiento (Slide) para el botón "Blog"
    $("nav ul li:nth-child(3) a").click(function() {
        $("nav ul li:nth-child(3)").toggle("slide"); // Hace que el elemento se deslice hacia la izquierda o hacia la derecha al hacer clic
    });

    // Animación de Rebote (Bounce) para el botón "Contacto"
    $("#contacto button").click(function() {
        $(this).animate({ "margin-top": "10px" }, "fast", "swing"); // Hace que el elemento brinque suavemente hacia abajo y luego vuelva a su posición original
    });
});