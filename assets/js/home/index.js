window.addEventListener("DOMContentLoaded", () => {
    var perguntas = document.querySelectorAll(".pergunta")
    var respostas = document.querySelectorAll(".resposta")
    var btns = document.querySelectorAll(".btn-abrir")
    if (perguntas) {
        perguntas.forEach((pergunta, index) => {
            pergunta.addEventListener("click", () => {
                respostas[index].classList.toggle('show')
                btns[index].classList.toggle('show')
            })
        })
    }
})