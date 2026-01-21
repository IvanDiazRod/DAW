document.addEventListener("DOMContentLoaded", () => {

    const barra = document.querySelector(`#barra`);

    const botones = document.querySelectorAll(`button`);

    botones.forEach(boton => {

        boton.addEventListener("click", () => {

            if (boton.innerHTML === `=`) {

                barra.value = eval(barra);

            }

            if (boton.innerHTML === `C`) {

                barra.value = ``;

            }

            barra.value += boton.innerHTML;

        });

    });

});