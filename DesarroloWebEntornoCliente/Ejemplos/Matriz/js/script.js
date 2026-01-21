document.addEventListener("DOMContentLoaded", () => {

    let matriz = [
        
        [0, 0, 0],

        [0, 0, 0],

        [0, 0, 0],

];

inicializarMatriz();

cheto();

mostrarMatriz();

function inicializarMatriz() {

    for (let i = 0; i < matriz.length; i++) {

        for (let j = 0; j < matriz[i].length; j++) {

            matriz[i][j] = Math.floor(Math.random() * 2);

        }
        
    }

}

function mostrarMatriz() {

    for (let i = 0; i < matriz.length; i++) {

        for (let j = 0; j < matriz[i].length; j++) {

            document.body.innerHTML += matriz[i][j] + ` | `;

        }

        document.body.innerHTML += `<br>`;

    }

}

function cheto() {

    let activado = false;

    for (let i = 0; i < matriz.length; i++) {

        for (let j = 0; j < matriz[i].length; j++) {

            if (activado === true) {

                matriz[i][j] = 1;

            }

        }

    }

}

});