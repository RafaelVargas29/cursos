/*
    -O padrão de nome é começa com letras maiúsculas
    -Mesma sintaxe dos objtos mas sem '=' e sem ':'
    -Serve para padronizar e utilizar valores de forma mais fácil
    -Para utilizar os valores de dentro de um enum: 'Size.SMALL'
*/

enum Sizes {
    SMALL, NORMAL, LARGE
}

enum Sizes2 {
    SMALL = "12px",
    NORMAL = "16px",
    LARGE = "24px"
}

console.log(Sizes.SMALL);
console.log(Sizes2.SMALL);