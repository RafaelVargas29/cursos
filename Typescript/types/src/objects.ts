//Para dizer que uma propriedade de um objeto é opcional, coloca-se o '?' logo após o nome da mesma
let aluno: {nome: string, aprovado?: boolean, idade: number, notas: number[]};

aluno = {
    nome: "Rafael",
    idade: 22,
    notas: [9, 9, 9, 9]
}

//Não é boa prática, o idela é passar quais propriedades o objeto pode ter
let aluno2: object;