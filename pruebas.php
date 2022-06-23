<?php
    class super {
        public $producto;
        public $precio;

        function __construct($producto, $precio) {
            $this -> producto = $producto;
            $this -> precio = $precio;
        }

        function __toString() {
            return "producto: $this->producto, precio: $this->precio €";
        }
    }

    class algo {
        public $nombre;
        public $cost;
        
        function __construct($nombre, $cost) {
            $this -> nombre = $nombre;
            $this -> cost = $cost;
            
        }
        
    }
    $alguien = new algo(readline("nombre del producto: "),readline("precio: "));

    function permitir($alguien) {
        $name = $alguien -> nombre;
        $price = $alguien -> cost;
        do {
            $cash = readline("cuanto dinero tienes? ");
        } while (!is_numeric($cash));
        if ($cash >= $price) {
            echo "te puedes comprar un $name";
        } else {
            echo "eres very pobre";
        }
    }

    permitir($alguien);
    
    //print_r($alguien);

    /* function realidad($wallet) {
        $iphone = new super("iPhone 13",1500);
        $tesla = new super("tesla model 3",50000);

        echo $tesla -> precio;

        if($wallet >= ($iphone -> precio + $tesla -> precio)) {
            $estatus =  "somos ricos!";
        } else {
            $estatus = "ESTAMOS POBRES :(";
        }
        return $estatus;
    }
    
    echo realidad(52000) */

    




?>