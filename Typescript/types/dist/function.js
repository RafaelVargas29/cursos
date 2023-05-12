"use strict";
//Para tipar uma função é preciso determinar os tipos de entrada e de saída (os parâmetros e o retorno)
Object.defineProperty(exports, "__esModule", { value: true });
function add(x, y) {
    return x + y;
}
var multiply = function (x, y) {
    return x * y;
};
var subtract = function (x, y) { return x - y; };
var teste = subtract(3, 1);
var Rafael = {
    name: "Rafael",
    id: 0,
    isAdmin: true,
    level: "coordenator"
};
//função que retorna se o usuário é ou não admin
var isAdmin = function (user) { return !!user.isAdmin; };
console.log(isAdmin(Rafael));
var Cassiane = {
    name: "Cassiane",
    id: 1
};
console.log(isAdmin(Cassiane)); //false
//apenas para não dar conflito com outras variáveis de mesmo nome em outros arquivos
exports.default = 2;
