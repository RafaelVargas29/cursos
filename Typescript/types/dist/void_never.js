"use strict";
/*
    -void
    >Quando uma função recebe o tipo 'void' significa que ela não vai retornar nenhuma valor, retorna undefined
    
    -never
    >Quando uma função recebe o tipo 'never', significica que essa função nunca vai retornar algo
    >É usada em casos de funções que vão gerar um erro
*/
function showFeedback(message, type) {
    alert(type.toUpperCase() + ": " + message);
}
var feedback = showFeedback("ola", "info");
function showError(message) {
    throw new Error("função marcada com never nunca retorna algo");
}
var error = showError("mensagem de erro");
