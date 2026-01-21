document.addEventListener("DOMContentLoaded", () => {

    const numeros = [3, 12, 7, 18, 25, 2, 10, 30];

    let mayoresQueDiez = [];
    
    mayoresQueDiez = numeros.filter((numero) => numero >= 10);

    mayoresQueDiez.forEach(mayorQueDiez => {

        console.log (mayorQueDiez);

    });

});