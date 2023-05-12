"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.teste = void 0;
//Assertion faz com que um elemento seja tratado como outro. nNo caso abaixo, um elemento vai ser tratado como HTMLButtonElement
var teste = document.getElementById("teste");
exports.teste = teste;
teste.addEventListener("click", function (e) { return console.log(e); });
