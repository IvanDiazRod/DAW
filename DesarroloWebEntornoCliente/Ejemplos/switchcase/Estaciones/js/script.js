document.addEventListener("DOMContentLoaded", () => {

    const elementoInput = document.querySelector("input[type='text']");

    const enviar = document.querySelector("input[type='submit']");

    const parrafo = document.querySelector(".resolucion");

    enviar.addEventListener("click", () => {

        switch (elementoInput.value) {

            case "primavera":

                parrafo.innerHTML = "Buen clima";

            break;

            case "verano":

                parrafo.innerHTML = "Exceso de calor";

            break;

        }

    });

});