// Ejercicio 1.

function evaluarEdad(edad) {
  if (edad < 0 || edad > 120) {
    return "Edad no valida";
  } else if (edad < 18) {
    return "Eres menor de edad";
  } else if (edad <= 65) {
    return "Eres adulto";
  } else {
    return "Eres adulto mayor";
  }
}

console.log(evaluarEdad(14));

//Ejercicio 2.

function mostrarImpares(array) {
  const impares = [];
  for (let i=0; i<array.length; i++) {
    if (array[i]%2 !==0) {
      impares.push(array[i]);
    }
  }
  return impares;
}

let numeros = [10, 25, 32, 47, 50, 61, 78, 83];
console.log(mostrarImpares(numeros));


// Ejercicio 3.

function factorial(n) {
  if (n===0) return 1;
  return n*factorial(n-1);
}
console.log(factorial(5));


// Ejercicio 4.

function invertirCadena(cadena) {
  let resultado = "";
  for (let i=cadena.length-1; i>=0; i--) {
    resultado+=cadena[i];
  }
  return resultado;
}
console.log(invertirCadena("javascript"));


// Ejercicio 5.

// Ejercicio 6.

// Ejercicio 7.




