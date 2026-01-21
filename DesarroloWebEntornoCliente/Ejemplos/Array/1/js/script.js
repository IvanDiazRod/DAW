document.addEventListener("DOMContentLoaded", () => {

    /*let edades = [18, 21, 39, 201, 20];

    console.log (edades);

    console.log (edades[0]);

    console.log (edades[2]);

    edades[0] = 200;

    edades[2] = "Hello";

    console.log (edades[0]);

    console.log (edades[2]);*/

    let colores = [`Azul`, `Naranja`, `Verde`, `Blanco`, `Negro`, `hola`];

    console.log (colores.length);

    for (let i = 0; i < colores.length; i++) {

        console.log (colores[i]);

    }

    let matriz = [

        [0, 0, 0],

        [0, 0, 0],

        [0, 0, 0],

    ];

    for (let i = 0; i < matriz.length; i++) {

        for (let j = 0; j < matriz[i].length; j++) {

            matriz[i][j] = Math.floor(Math.random() * 10);

        }

    }

    for (let i = 0; i < matriz.length; i++) {

        for (let j = 0; j < matriz[i].length; j++) {

            document.body.innerHTML += matriz[i][j] + " | ";

        }

        document.body.innerHTML += "<br>";

    }

});