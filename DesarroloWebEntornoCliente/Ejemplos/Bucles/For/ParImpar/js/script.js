document.addEventListener("DOMContentLoaded", () => {

    let decision = parseInt(prompt(`Introduce un número`));

    let helloWorld = document.createElement(`p`);

    helloWorld.innerHTML += `Hello, world!`;

    let index = 0;

    const intervalo = setInterval(() => {

        document.body.innerHTML += helloWorld.innerHTML[index];

        index++;

        if (index === helloWorld.innerHTML.length) {

            clearInterval(intervalo);

        }

    }, 100);

    /*for (let i = 0; i < helloWorld.innerHTML.length; i++) {

        document.body.innerHTML += helloWorld.innerHTML[i];

    }*/

    for (let i = 0; i <= decision; i++) {

        if (i % 2 === 0) {

            document.body.innerHTML +=  `<p class="borde-verde">El número ${i} es par</p>`;

        } else {

            document.body.innerHTML += `<p>El número ${i} es impar</p>`;

        }

    }

});