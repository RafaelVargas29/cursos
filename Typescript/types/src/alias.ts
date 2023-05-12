function add2(x: number, y?:number){
    if (y === undefined){
        return null;
    }
    return x + y;
}
const teste2 = add2(10);
console.log(add2(10));

//É uma variável que armazena tipos para que os mesmos sejam utilizados de forma mais simples como um conjunto
//É recomendado que se inicie com letra maiúscula
type testeAlias = number | string | boolean;

let teste3: testeAlias;
teste3 = 7;
teste3 = "teste";
teste3 = true;

let teste4: testeAlias;
teste4 = 10;

//Alias de tipo definido para um objeto
type User = {
    nome: string,
    idade?: number | null,
}

//Objetos do tipo 'User'
const rafael: User = {
    nome: "Rafael",
    idade: 22,
}

const cassiane: User = {
    nome: "Cassiane",
    idade: 23,
}

//Alias definido para uma variável
type Sizes = "12px" | "16px" | "24px";
const smalll: Sizes = "12px";
const normal: Sizes = "16px";
const large: Sizes = "24px";




export default 1