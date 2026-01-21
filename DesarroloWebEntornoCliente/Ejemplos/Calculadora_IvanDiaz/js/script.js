document.addEventListener("DOMContentLoaded", () => {

    const elementosCalculadora = document.querySelectorAll(`.elemento-calculadora`);

    const barra = document.querySelector(`input`);

    const botonBorrar = document.querySelector(`#borrar`);

    const botonOperacion = document.querySelector(`#operacion`);

    modoOscuro();

    elementosCalculadora.forEach(elementoCalculadora => {

        elementoCalculadora.addEventListener(`click`, () => {

            barra.value += elementoCalculadora.innerHTML;

        });

    });

    botonBorrar.addEventListener(`click`, () => {

        barra.value = "";

    });

    botonOperacion.addEventListener(`click`, () => {

        barra.value = parseFloat(eval(barra.value));

    });

    // Función para el modo oscuro

    function modoOscuro() {

        let modoOscuro = false;

        if (modoOscuro === true) {

            if (document.body.classList.contains("modo-claro")) {

                document.body.classList.remove("modo-claro");

                document.body.classList.add("modo-oscuro")

            } else {

                document.body.classList.remove("modo-oscuro");

                document.body.classList.add("modo-claro")

            }

        }

    }

});