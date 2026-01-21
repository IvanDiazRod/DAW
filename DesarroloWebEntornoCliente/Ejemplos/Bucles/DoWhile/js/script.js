document.addEventListener("DOMContentLoaded", () => {

    /*const parrafo = document.querySelector("p");

    let decision = 0;

    do {

        decision = prompt ("Introduce una letra");

    } while (decision !== "s");

     parrafo.innerHTML += `Has acertado, la letra era la ${decision}`;
     */

     /*let decision = "";

     while (decision !== "s") {

        decision = prompt("Adivina la letra");

     }

     alert (`Correcto! la letra era ${decision}`);
     */

     /*let maximo = 1;

     do {

        if (maximo % 2 === 0) {

            document.body.innerHTML += `${maximo} es par ${'<br>'}`;

        } else {

            document.body.innerHTML += `${maximo} es impar ${'<br>'}`;

        }

        maximo++;

     } while (maximo !== 11);*/

     // Escribir los primeros 10 numeros impares y que no sean múltiplo de 3

     for (let i = 1; i <= 10; i++) {

        if (i % 2 === 0) {

            if (i % 3 === 0) {

                document.body.innerHTML += i;

            }

        }

     }

});