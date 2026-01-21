document.addEventListener("DOMContentLoaded", () => {

    const camposContra = document.querySelectorAll(`input[type="password"]`);

    const campoCheckbox = document.querySelector(`input[type="checkbox"]`);

    const campoSubmit = document.querySelector(`input[type="submit"]`);

    const [campocontra1, campocontra2] = camposContra;

    campoSubmit.addEventListener("click", (event) => {

        if (campocontra1.value != campocontra2.value) {

            event.preventDefault();

            alert ("Las passwords no coinciden");

        }

        if (!campoCheckbox.checked) {

            event.preventDefault();

            alert ("Debes aceptar los terminos y condiciones");

        }

    });

});