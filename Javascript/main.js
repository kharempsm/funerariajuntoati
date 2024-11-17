const currentYear = new Date().getFullYear();
    document.getElementById("year").textContent = currentYear;

    const header = document.getElementById("header");

// Establecer el valor cuando el header debe volverse fijo
const sticky = header.offsetTop; // Esto obtiene la distancia desde la parte superior del documento

// Función para activar la clase 'fixed-header' cuando el scroll supere los 100 píxeles
window.onscroll = function() {
    if (window.pageYOffset > 100) { // Si el desplazamiento es mayor a 100 píxeles
        header.classList.add("fixed-header");
    } else {
        header.classList.remove("fixed-header");
    }
};