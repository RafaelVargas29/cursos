//Quando um parâmetro é declarado como opcional, caso não seja declarado seu tipo será undefined
function add2(x: number, y?:number){
    if (y === undefined){
        return null;
    }
    return x + y;
}
const teste2 = add2(10);
console.log(add2(10));

//Union é o sinal '|' que é usado para idicar que pode ser uma coisa ou outra. No exemplo abaixo indica que pode ser de qualquer tipo informado na variável
let teste3: number | string | boolean;
teste3 = 7;
teste3 = "teste";
teste3 = true;

const User: {
    nome: string,
    idade?: number | null,
} = {
    nome: "Rafael",
    idade: 22,
}
