// Função sem retorno
function imprimirSoma(a, b) {
    console.log(a + b)
}

imprimirSoma(2, 3)
imprimirSoma(2) // Retorna NaN
imprimirSoma(2, 10, 4, 5, 6, 7, 8) // Funciona mas ignora todos a partir do terceiro número
imprimirSoma() // Retorna NaN

// Função com retorno
function soma(a, b = 1) {
    return a + b
}

soma(2, 3) //Não imprime nada
console.log(soma(2, 3))
console.log(soma(2))
console.log(soma()) // Retorna NaN