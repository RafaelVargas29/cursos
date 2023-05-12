"use strict";
//Quando um parâmetro é declarado como opcional, caso não seja declarado seu tipo será undefined
function add2(x, y) {
    if (y === undefined) {
        return null;
    }
    return x + y;
}
var teste2 = add2(10);
console.log(add2(10));
//Union é o sinal '|' que é usado para idicar que pode ser uma coisa ou outra. No exemplo abaixo indica que pode ser de qualquer tipo informado na variável
var teste3;
teste3 = 7;
teste3 = "teste";
teste3 = true;
var User = {
    nome: "Rafael",
    idade: 22,
};
