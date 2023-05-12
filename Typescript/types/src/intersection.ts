type User = {
    name: string,
    id: number
}

type LevelAdmin = "teacher" | "coordenator" | "manager";

type Admin = {
    isAdmin: true,
    level: LevelAdmin
}

//Intersection é representado pelo símbolo '&' e pode ser interpretado como 'e' e significa a união de duas coisas. No caso abaixo, a união de dois objetos e uma instância desse objeto deve ter todas as propriedade dos dois objetos
type UserAdmin  = User & Admin

let Rafael: UserAdmin = {
    name: "Rafael",
    id: 0, 
    isAdmin: true,
    level: "coordenator"
}

//apenas para não dar conflito com outras variáveis de mesmo nome em outros arquivos
export default 1;