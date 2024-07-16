function abrirMenu () {
    var nav = document.querySelector(".nav-menu");
    var icon = document.querySelector(".fa-bars");
    var icon2 = document.querySelector(".fa-xmark");

    nav.classList.toggle("ativar-menu");
    
}

function fecharMenu () {
    var nav = document.querySelector(".nav-menu");

    nav.classList.remove("ativar-menu");
}

