document.addEventListener("DOMContentLoaded", () => {

    let arrayImpares = [];

    for (let i = 0; i <= 200; i++) {

        if (i % 2 === 0) {

            arrayImpares.push(i);

            for (let j = 0; j < arrayImpares.length; j++) {

                console.log (arrayImpares[j]);

            }

        }

    }

});