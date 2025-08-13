document.addEventListener("DOMContentLoaded",()=>{
    var btnHamburguer = document.querySelector(".btn-hamburguer")
    var navMobile = document.querySelector(".nav-mobile")

    if(btnHamburguer){
        btnHamburguer.addEventListener("click",()=>{
            
            navMobile.classList.add("show")
        })
    }

    var btnCloseNav = document.querySelector(".btn-close")

    if(btnCloseNav){
        btnCloseNav.addEventListener("click",()=>{
            navMobile.classList.remove("show")
        })
    }
})