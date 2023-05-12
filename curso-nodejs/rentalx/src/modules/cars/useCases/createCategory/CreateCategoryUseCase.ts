import { ICategoriesRepository } from "../../repositories/ICategoriesRepository";
interface IRequest {
    name: string;
    description: string;
}
class CreateCategoryUseCase {
    constructor(private categoriesRepository: ICategoriesRepository) {}

    execute({ description, name }: IRequest): void {
        const categorysAlreadyExists = this.categoriesRepository.findByName(name); // Verifica se o nome de categoria existe

        if(categorysAlreadyExists) {
            throw new Error("categorys already exists!");
        }

        this.categoriesRepository.create({ name, description})

    }
}

export { CreateCategoryUseCase };