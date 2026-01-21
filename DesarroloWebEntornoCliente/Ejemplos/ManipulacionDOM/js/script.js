document.addEventListener("DOMContentLoaded", () => {

    const logo = document.querySelector(`header .logo h1`);

    const parrafo = document.querySelector(`main article > section:nth-child(2) .tarjetas-cont .tarjeta p`);

    const imagen1 = document.querySelector(`main article > section:nth-child(2) .tarjetas-cont .tarjeta figure img`);

    const botones = document.querySelectorAll(`button`);

    imagen1.src = `img/imagen2.png`;

    parrafo.innerHTML = "Parrafo cambiado desde javaScript";

    logo.innerHTML = "Logo de mi pagina";

    const [boton1, boton2] = botones;

    boton1.addEventListener("click", () => {

        alert (`Te lafta plata`);

    });

});