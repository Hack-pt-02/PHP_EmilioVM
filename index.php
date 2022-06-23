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

    

// 12, Reproducir ejercicio de la password.

    
    /* $input = readline("input the password: ");
    $password = 1234;
    do {
        if($input != $password) {
            $input = readline("try again: ");
        };
    } while ($input != $password);
    echo "lo lograste!" */

/* 13, Opcional hacer otro ejercicio de las compras: Crear una función que dado una cartera y un array de productos con (nombre y precio) devuelva un array (misma estructura) con solo los
productos que se han podido comprar. 
Ejemplo textual:
cartera: 7
Productos disponibles: pan, 2
papas, 1
cocacola,3
agua, 2
 */
/* 
$cartera = 10;

$products = [
    ["pan",2],
    ["papas",1],
    ["cocacola",4],
    ["agua",10]
];

    function compra($prod,$cash) {
        $resto = $cash;
        $bag = [];
        foreach($prod as $element) {
            if($element[1] < $resto) {
                $resto = $resto - $element[1];
                $bag[] = $element;
            }
        }
        return $bag;
    }

    $resultado = compra($products,$cartera);

    print_r($resultado);
 */


/* FABRICA PERSONA */

// 1, Crear una clase Persona que tenga propiedades públicas (nombre, apellido y edad). Crear 2 personas, Julia y Mario. Imprimir su información

    class Persona {
        public $nombre;
        public $apellido;
        public $edad;

        function __construct($nombre, $apellido, $edad) 
        {
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            $this -> edad = $edad;
            Contador::veces();
        }

        function __toString() {
            return "nombre: $this->nombre / apellido: $this->apellido / edad: $this->edad";
        }

        function saludar() {
            return "hola $this->nombre. ¿Cómo estás?";
        }

        function trampaSaludar() {
            return $this -> saludar();
        }

        // del ejercicio 7
        final function comer() {
            return "$this->nombre es un comilón.";
        }
    }
    


    $Julia = new Persona("Julia","Robers",18);
    $Mario = new Persona("Super","Mario",26);

    //echo $Mario;

// 2, Modifico la visibilidad de las propiedades en la clase Persona, cambiandolas a private. Imprimimos sin error(mapeamos).

    /* $mapeo = new Persona("ejemplo","de","mapeo");

    echo $mapeo; */

// 3, Crear una función saludar y la llamo (primero pública y luego privada).

    /* echo $Mario -> trampaSaludar(); */

// 4, Crear dos subclases que extiendan de Persona, con propiedades y métodos: Estudiante y Docente.

// ESTUDIANTE

    class Estudiante extends Persona {
        public $curso;
        public $notas;

        function __construct($curso,$notas,$nombre,$apellido,$edad) {
            $this -> curso = $curso;
            $this -> notas = $notas;
            parent::__construct($nombre,$apellido,$edad);
        }

        function __toString() {
            return "nombre: $this->nombre | apellido: $this->apellido | edad: $this->edad | curso: $this->curso | notas: $this->notas";
        }

        function saludar() {
            return parent::saludar();
        }
    }

    $estudiante = new Estudiante(3,10,"Emilio","Vargas",26);

    //echo $estudiante->saludar();

    //echo $estudiante;

// DOCENTE

    class Docente extends Persona {
        public $asignaturas;
        public $horarios;

        function __construct($asignaturas,$horarios,$nombre,$apellido,$edad) {
            $this -> asignaturas = $asignaturas;
            $this -> horarios = $horarios;
            parent::__construct($nombre,$apellido,$edad);
        }

        function __toString() {
            return "nombre: $this->nombre \n apellido: $this->apellido \n edad: $this->edad \n asignaturas: $this->asignaturas \n horarios: $this->horarios";
        }

        function nombre() {
            return $this->nombre;
        }

        /*function comer() {
            return "mi nombre es $this->nombre";
        }*/
    } 

    $profesor = new Docente(implode(", ",["Matemáticas","Ciencias"]),"Mañanas","Bill","Gates",120);
    $profesor2 = new Docente("Lengua","Tardes","Hilary","Clinton",75);

    //echo $profesor->comer();


// 6, Hacer un overrading del método saludar.
    
        /* Realizado en la línea 280 a Estudiante */
    
// 7, Crear una función en persona, por ejemplo (comer) que no se pueda sobreescribir en las clases hijas.

        /* realizado en las lineas 244 y 315.*/

// 8, Añadir un contador de objetos de clase Persona.

class Contador {
    static $contador = 0;
        static function veces() {
            Contador::$contador++;
        }
    }

    echo Contador::$contador;

?>


