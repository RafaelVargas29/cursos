/*
    !!ESSES TIPOS DEVEM SER EVITADOS SEMPRE QUE POSSÍVEL!!

    -Se não declarar a variável com tipo nenhum o tipo dela vai ser 'any'
    -Unknown é um poco mais "seguro" do que o any
*/

function add(x: unknown, y:unknown){
    if(typeof x === "number" && typeof y === "number"){
        return x + y;
    }
    return null;
}

const teste = add(3,5);