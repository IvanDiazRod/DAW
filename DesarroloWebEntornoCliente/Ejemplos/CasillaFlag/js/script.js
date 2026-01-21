document.addEventListener("DOMContentLoaded", () => {

        const casillas = document.querySelectorAll(`main article > section:nth-child(1) .casillas .casilla`);

        const contadorCasillasMarcadas = document.querySelector(`main article > section:nth-child(1) .contador p`);

        const verificarVictoria = document.querySelector(`main article > section:nth-child(1) .victoria p`);

        const seleccionarColor = document.querySelector(`main article > section:nth-child(1) .seleccionaColor input`);

        randomizar();

        contarCasillasMarcadas();

        ganador();

        function contarCasillasMarcadas() {

            casillas.forEach(casilla => {

                const casillasMarcadas = document.querySelectorAll(`main article > section:nth-child(1) .casillas .marcada`).length;
        
                contadorCasillasMarcadas.innerHTML = casillasMarcadas;

                casilla.addEventListener(`click`, () => {

                    if (casilla.classList.contains(`desmarcada`)) {

                        casilla.classList.remove(`desmarcada`);

                        casilla.classList.add(`marcada`);

                        contadorCasillasMarcadas.innerHTML = parseInt(contadorCasillasMarcadas.innerHTML) + 1;

                    } else {

                        casilla.classList.remove(`marcada`);

                        casilla.classList.add(`desmarcada`);

                        contadorCasillasMarcadas.innerHTML = parseInt(contadorCasillasMarcadas.innerHTML) - 1;

                    }

                });

            });

        }

        function ganador() {

            casillas.forEach(casilla => {

                casilla.addEventListener(`click`, () => {

                    const todasMarcadas = [...casillas].every(c =>

                        c.classList.contains(`marcada`)

                    );

                    if (todasMarcadas === true) {

                        verificarVictoria.innerHTML = `Has ganado!`;

                    } else {

                        verificarVictoria.innerHTML = `Para ganar debes poner todas en negro`;

                    }

                });

            });

        }

    function randomizar() {

        let rand = 0;

        casillas.forEach(casilla => {

            rand = Math.floor(Math.random() * 2);

            if (rand === 0) {

                casilla.classList.remove(`marcada`);

                casilla.classList.add(`desmarcada`);

            } else {

                casilla.classList.remove(`desmarcada`);

                casilla.classList.add(`marcada`);

            }

        });
        
    }

});