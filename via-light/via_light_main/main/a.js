function mudarBanner(){
    const imagensCRS = document.querySelectorAll(".imagemCRS");

    imagensCRS.forEach(function (qualMudar) {
        qualMudar.classList.toggle("visivel");
    });
}