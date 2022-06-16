<?php
// 1, crea programas de opraciones con dos variables

    /*
    $firstNumber = 21;
    $secondNumber = 20;

    #suma
    echo $firstNumber + $secondNumber;
    #resta
    echo $firstNumber - $secondNumber;
    #multiplicacion
    echo $firstNumber * $secondNumber;
    #division
    echo $firstNumber / $secondNumber;

    */

// 2, crear un array e imprimir un elemento del array

    /*

    $array1 = ["hola","como",18,"estas"];

    echo $array1[0];

    */

// 3, crear un array de arrays e imprimir un elemento del array

    /*

    $arrayMultiple = [[1,2,3],[4,5,6]];

    // para ver todo el array print_r($arrayMultiple);

    echo($arrayMultiple[1][0]);

    */

// 4, Crear un programa que imprima los primeros 10 números.

    /*

    for($i = 0; $i <= 10; $i++) {
        echo "$i \n";
    };

    */

// 5, Crear un programa que sume los primeros 10 números.

    /*

    $suma = 0;
    for($i = 0; $i <= 10; $i++) {
        $suma += $i;
        }
        echo $suma;

    */    
    
// 6, Crear un programa que imprima X números random.

   // echo rand(1,10)

// 7, Encapsular en funciones los ejercicios 5 y 6.

    // EL 5

    /*
    function sumatorio($numax) {
        $suma = 0;
        for($i = 0; $i <= $numax; $i++) {
            $suma += $i;
            }
            echo $suma;
    };
    sumatorio(110);
    */
    // EL 6
    /*
    function randomize($min,$max) {
        echo rand($min,$max);
    }

    randomize(1,10)
    */

// 8, Crear una función que imprima X valores random en el intervarlo 0 - X.

    /*

    $aleatorio = rand(0,1000);
    function intervalo($numero) {
    echo rand(0, $numero);

    }

    echo intervalo($aleatorio)

    */

// 9, Crear una función que dado un numero imprima solo los valores pares.

    /* $aux = [];

    $datos = [1,3,2,4,5,6,7,8,9,10];

    foreach ($datos as $dato) {
        if($dato % 2 === 0) {
            $aux[] = $dato;
        };
    }; */

    //print_r($aux);

// 10, Crear una función que dado un número x imprima solo los valores impares.

    

    /* function impares($array) {
        return ($array % 2);
    };

    $datos = [1,3,2,4,5,6,7,8,9,10]; */

    //echo print_r(array_filter($datos, "impares"));

    

// 11, Considerando las funciones de antes (pares e impares), crear una función que tenga como limite un numero dado n y como segundo parámetro un valor booleano que: si es true imprime los pares y si es false imprime los impares.

    /* $max = intval(readline("Ingrese el número"));
    $aux = [];

    for( $i = 0; $i <= $max; $i++) {
        $aux[] = rand(0,100);
    }

    function filtro($num,$bool) {
        $aux2 = [];
        if($bool) {
            foreach($num as $numero) {
                if($numero % 2 === 0) {
                    $aux2[] = $numero;
                };
            }
            print_r($aux2);
        } else {
            foreach($num as $numero) {
                if($numero % 2 !== 0) {
                    $aux2[] = $numero;
                };
            }
            print_r($aux2);
        };
    };
    
    print_r($aux);

    filtro($aux,true); */

    

// 12, 

?>