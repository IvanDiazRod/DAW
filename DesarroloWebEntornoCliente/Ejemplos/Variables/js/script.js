document.addEventListener("DOMContentLoaded", () => {

    let gigante = BigInt(9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999);

    console.log (gigante);

    console.log (typeof gigante);

    let divisioPorCero = 23 / 0;

    let otraOperacion = divisioPorCero + 12;

    console.log (`EL resultado de la vivisión por cero es ${divisioPorCero}`);

    console.log (`La otra operación es ${otraOperacion}`);

    console.log (Boolean(true));

    console.log (Boolean(false));

    console.log (Boolean(1));

    console.log (Boolean(0));

    let cuajo = this.value;

    console.log (cuajo);

    let palabra1 = `mi`;

    let palabra2 = `casa`;

    let resultado = palabra1 + palabra2;

    console.log (resultado);

    let numero1 = "4";

    let numero2 = "6";

    let suma = numero1 + numero2;

    console.log (suma);

    let m = 10;

    let a = 0;

    /*while (m === 10) {

        a = a + 2;

    }*/

});