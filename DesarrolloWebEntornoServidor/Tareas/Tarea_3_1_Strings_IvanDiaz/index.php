<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 3.1, Strings</title>
</head>
<body>

 <?php

    // 1. Crear una variable e inicializarla.

    $variableConNombreOriginal = " Linux es mejor que Windows, a que si? A que suena bien! ";

    $s = " Esta es otra cadena de texto! ";

    //2. Mostrar la variable por pantalla.
   
    echo $variableConNombreOriginal;

    echo "<br>";

    //3. Mostrar la longitud de la variable
   
    echo strlen($variableConNombreOriginal);

    echo "<br>";

    //4. Contenido de la variable en mayusucla
    
    echo strtoupper($variableConNombreOriginal);

    echo "<br>";

    //5. Contenido de la variable en minusculas
  
    echo strtolower($variableConNombreOriginal);

    echo "<br>";

    //6. Número de veces que tiene la letra "a" en mayusucla o minuscula
   
    echo substr_count($variableConNombreOriginal, "a");

    echo "<br>";

    //7. Código ASCII de la primera letra.

    $posCero = $variableConNombreOriginal[0];

    echo ord($posCero);

    echo "<br>";
    
    //8. Buscar la primera "a" sin importar mayúsculas o minúsculas.

    echo strpos($variableConNombreOriginal, "a");

    echo "<br>";
   
    //9. Buscar la última "a" sin importar mayúsculas o minúsculas.
  
    echo strrpos($variableConNombreOriginal, "a");

    echo "<br>";
    
    //10. Reemplazar "a" o "A" por "0".
   
    echo str_replace("a", 0, $variableConNombreOriginal);

    echo "<br>";
    
    //11. Indicar si el nombre empieza por "al" o no.

    echo str_starts_with($variableConNombreOriginal, "al") ? "La cadena <strong>$variableConNombreOriginal</strong> comienza por al" : "La cadena <strong>$variableConNombreOriginal</strong> no empieza por al";

    echo "<br>";

    //12. Eliminar espacios del principio y del final.
   
    echo trim($variableConNombreOriginal);

    echo "<br>";

    //13. Mostrar la variable con la primera letra en mayúscula y las demás en minúscula.

    echo ucfirst(strtoupper($variableConNombreOriginal));

    echo "<br>";
	
/*14.Escribe una función normaliza_nombre($s) que:

Elimine espacios al inicio/fin.

Reemplace secuencias de espacios internos (incluye tabs) por un espacio.

Devuelva la primera letra de cada palabra en mayúscula. */

function normaliza_nombre($s) {

    $variableTrimeada = trim($s);

    $variableEspaciada = str_replace("", " ", $s);

    $letraMayuscula = ucfirst(strtoupper($s));

    echo $variableTrimeada;

    echo "<br>";

    echo $variableEspaciada;

    echo "<br>";

    echo $letraMayuscula;

}

normaliza_nombre($s);

/*15.Dada una línea como "Borrar usuario 123", toma la primera palabra como comando y usa switch para:

alta → imprime “Crear usuario”.

baja, borrar, eliminar → imprime “Eliminar usuario”.

listar, ls → imprime “Listar usuarios”.

Otro → “Comando no reconocido”.*/

$linea ="Borrar usuario 123";

$comando = explode(" ", $linea);

$instruccionBorrar = $comando[0];

echo "<br>";

switch ($comando) {

    case "alta":

        echo "Crear usuario";

        break;

        case "baja":

        case "borrar":

        case "eliminar":

            echo "Eliminar usuario";

            break;

            case "listar":

                case "ls":

                    echo "Listar usuarios";

                    break;

                    default:

                    echo "Caso no reconocido";

                    break;

}

?>
    
</body>
</html>