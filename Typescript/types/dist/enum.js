"use strict";
/*
    -O padrão de nome é começa com letras maiúsculas
    -Mesma sintaxe dos objtos mas sem '=' e sem ':'
    -Serve para padronizar e utilizar valores de forma mais fácil
    -Para utilizar os valores de dentro de um enum: 'Size.SMALL'
*/
var Sizes;
(function (Sizes) {
    Sizes[Sizes["SMALL"] = 0] = "SMALL";
    Sizes[Sizes["NORMAL"] = 1] = "NORMAL";
    Sizes[Sizes["LARGE"] = 2] = "LARGE";
})(Sizes || (Sizes = {}));
var Sizes2;
(function (Sizes2) {
    Sizes2["SMALL"] = "12px";
    Sizes2["NORMAL"] = "16px";
    Sizes2["LARGE"] = "24px";
})(Sizes2 || (Sizes2 = {}));
console.log(Sizes.SMALL);
console.log(Sizes2.SMALL);
