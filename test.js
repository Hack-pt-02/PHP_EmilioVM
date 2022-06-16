// "Patri" => poliodromo = de izquierda a derecha y de derecha a izquierda

    function palabra(texto) {
        let word = ""

        word = texto.split("").reverse().join("")
        
        return texto === word
    }

    palabra("Patri")