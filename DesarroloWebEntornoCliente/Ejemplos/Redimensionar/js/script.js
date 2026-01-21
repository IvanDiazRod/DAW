document.addEventListener("DOMContentLoaded", () => {

    let decision = parseInt(prompt(`Introduce la cantidad en pixeles`), 10);

    if (isNaN(decision)) {

        alert (`Introduce algo`);

        return;

    } else {

        window.resizeBy(decision, decision);

    }

});