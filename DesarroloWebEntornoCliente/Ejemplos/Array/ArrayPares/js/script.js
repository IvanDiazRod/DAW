document.addEventListener("DOMContentLoaded", () => {

    let arrayPares = [];

    for (let i = 1; i <= 100; i++) {

        arrayPares.push(i);

    }

    for (let i = 0; i < arrayPares.length; i++) {

            arrayPares[i] = Math.floor(Math.random() * 100);

            if (arrayPares[i] % 2 === 0) {

                document.body.innerHTML += `<p>${arrayPares[i]}</p>`;

            }

    }

    console.log (arrayPares.length);

});