document.addEventListener("DOMContentLoaded", () => {

    const seccionTablaMultiplicar = document.querySelector(".contenedor-tabla-multiplicar");

    let numero = parseInt(prompt("Introduce un número"));

    let maximo = parseInt(prompt("¿Hasta donde quieres que llegue la tabla?"));

    let decision = prompt("Te la saco normal o al revés?");

    if (decision === "normal") {

        seccionTablaMultiplicar.classList.add("columna");

    } else if (decision === "reverso") {

        seccionTablaMultiplicar.classList.add("columna-reversa");

    } else {

        seccionTablaMultiplicar.classList.add("columna");

    }

    seccionTablaMultiplicar.innerHTML += `La tabla de multiplicar del número ${numero} es: ${"<br>"}`;

    for (let i = 0; i <= maximo; i++) {

        seccionTablaMultiplicar.innerHTML += `<p>${numero} * ${i} = ${numero * i}</p>`;

    }

});