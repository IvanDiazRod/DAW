document.addEventListener("DOMContentLoaded", () => {

    const contador = document.querySelector(`main article > section:nth-child(1) .contadorcont`);

    const numeroContador = document.querySelector(`main article > section:nth-child(1) .contadorcont h1`);

    const botones = document.querySelectorAll(`main article > section:nth-child(1) .botones button`);

    const[incrementar, iniciar] = botones;

    incrementar.addEventListener(`click`, () => {

        numeroContador.innerHTML = parseInt(numeroContador.innerHTML) + 1;

    });

    iniciar.addEventListener(`click`, () => {

            if (numeroContador.innerHTML === 0) {

                numeroContador.innerHTML = 0;

            }

        const intervaloCuajado = setInterval(() => {
            
            numeroContador.innerHTML = parseInt(numeroContador.innerHTML) - 1;

            if (numeroContador.innerHTML <= 0) {

                clearInterval(intervaloCuajado);

            }

            if (numeroContador.innerHTML === 0) {

                numeroContador.innerHTML = 0;

            }

        }, 1000);

    });

    contador.addEventListener(`wheel`, (event) => {

        if (event.deltaY < 0) {

            numeroContador.innerHTML = parseInt(numeroContador.innerHTML) + 1;

            if (numeroContador.innerHTML >= 10) {

                contador.style.backgroundColor = "green";

            } else {

                contador.style.backgroundColor = `white`;
                
            }

        } else if (event.deltaY > 0) {

            numeroContador.innerHTML = parseInt(numeroContador.innerHTML) - 1;
            
        }

    });

});