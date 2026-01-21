document.addEventListener("DOMContentLoaded", () => {

    const text = `ogo de la empresa`;

    const logo = document.querySelector(`.logo`);

    let index = 0;

    const intervalo = setInterval(() => {

        logo.innerHTML += text[index];

        index++;

        if (index === text.length) {

            logo.classList.remove(`logo-incompleto`);

            logo.classList.add(`logo-completo`);

            clearInterval(intervalo);

        }

    }, 100);

});