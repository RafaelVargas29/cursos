/*
 Forma de declaração das tuplas em objetos 
    >'propriedade: [number, number, number]'
    >'propriedade: [string, string, string]'
    >'propriedade: [string, number, ...]'
 Sempre indicando o tipo de dado que é esperado em cada posisão da tupla    
*/
let alunos: {nome: string, aprovado?: boolean, idade: number, notas: [number, number, number, number]};

alunos = {
    nome: "Rafael",
    idade: 22,
    notas: [9, 9, 9, 9]
}

//Não é boa prática, o idela é passar quais propriedades o objeto pode ter
let alunos2: object;