//Assertion faz com que um elemento seja tratado como outro. nNo caso abaixo, um elemento vai ser tratado como HTMLButtonElement
const teste = document.getElementById("teste") as HTMLButtonElement;
teste.addEventListener("click", (e) => console.log(e));

export { teste }