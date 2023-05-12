//Para tipar uma função é preciso determinar os tipos de entrada e de saída (os parâmetros e o retorno)

function add(x: number, y:number): number
{
    return x + y;
}

const multiply = (x: number, y: number) => {
    return x * y;
}

const subtract: (x: number, y: number)=> number = (x,y)=> x -y;
let teste = subtract(3,1);

type User = {
    name: string,
    id: number
}

type LevelAdmin = "teacher" | "coordenator" | "manager";

type Admin = {
    isAdmin: true,
    level: LevelAdmin
}

type UserAdmin  = User & Admin

let Rafael: UserAdmin = {
    name: "Rafael",
    id: 0, 
    isAdmin: true,
    level: "coordenator"
}
//tipando uma arrow function
type IsAdmin = (User: User) => boolean;
//função que retorna se o usuário é ou não admin
const isAdmin: IsAdmin = (user) => !!(user as UserAdmin).isAdmin;
console.log(isAdmin(Rafael));

let Cassiane: User = {
    name: "Cassiane",
    id: 1
}
console.log(isAdmin(Cassiane)); //false


//apenas para não dar conflito com outras variáveis de mesmo nome em outros arquivos
export default 2;