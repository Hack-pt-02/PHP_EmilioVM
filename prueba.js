

let array = ["casa","coche","moto","moto","casa","arbol","coche"]


let prueba = array.reduce((acc, val) => {
    acc[val] ? acc[val]++ : acc[val] = 1;

    return acc;
}, {})

console.log(prueba)