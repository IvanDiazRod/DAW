document.addEventListener("DOMContentLoaded", () => {

    const contrasenas = document.querySelectorAll(`input[type="password"]`);

    const elementoSubmit = document.querySelector(`input[type="submit"]`);

    const parrafo = document.querySelector(`p`);

    const[contra1, contra2] = contrasenas;

    elementoSubmit.addEventListener("click", (event) => {

        if (contra1.value != contra2.value) {

            event.preventDefault();

            parrafo.textContent = `Las contraseñas no coinciden`;

        }

    });

});