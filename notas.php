<?php
    // VARIABLES

    // $nombredevariable = elemento de variable

    // CONDICIONALES

    // el if() de siempre
    /*
        swich($condicion) {
            case "valor":
                codigo...
                break;

            default:
                codigo...
                break;
        }
    
    */

    // BUCLES

    /*
    El for

        for(inicio;condicion(la longitud de un array en php es con count(array));consecuencia){
            elcodigo.
        }
    
    El while

        while(condition) {
            code;
            consecuencia;
        }

    El do-while

        do {
            consecuencia
        } while (condition)

    El foreach()
    // $key = nombre de la posicion

        foreach ($variable as $key => $value) {

        }

    
    */
    /*

    // INICIO DE SESIÓN CON WHILE
    $contrasena = "0300";
    $intento = 0;

    while($intento != $contrasena) {
        $intento = readline("Ingrese contraseña");
    }
    echo("Lo ha logrado")



    */

    // intvalue es el Parsein de Javascript
    
   /*  $array = [1,2,3,4,5,6,7,8];
    $array2 = [];

    foreach($array as $key) {
        if($key < 4) {
            $array2[] = $key;
        }
    }

    print_r($array2);

    $ */

    class Persona {
        private $pelo;
        private $altura;
        private $peso;

        function __construct($pelo, $altura, $peso) {
            this->pelo = $pelo;
            this->altura = $altura;
            this->peso = $peso;
        }

        function __toString() {
            return "pelo: $this -> pelo altura: $this -> altura peso: $this -> peso";
        }

        function cambioaltura() {
            $this -> altura =  $this -> altura / 100;
        }

        function caminar($kilometros) {
            $this -> peso = $this -> peso - $kilometros;
        }
    }

    $persona1 = new Persona("castano",180,80);

    $persona1 -> caminar(10);

    echo $persona1

?>