function validarForm() {
   
    let codproduto = document.getElementById("txtcodproduto").value.trim();
    let nome = document.getElementById("txtnome").value.trim();
    let fabricante = document.getElementById("txtfabricante").value.trim();
    let data_validade = document.getElementById("txtdatavalidade").value.trim();
    let preco_venda = document.getElementById("txtpreco_venda").value.trim();
    let preco_atacado = document.getElementById("txtpreco_atacado").value.trim();
    
    if (nome === "") {
        alert("Preencha o nome!");
        return false;
    }
    if (codproduto === "" || codproduto.length < 11) {
        alert("Código do produto inválido! Digite pelo menos 11 números.");
        return false;
    }
    if (data_validade === "") {
        alert("Preencha a data de validade!");
        return false;
    }
    if (preco_venda === "") {
        alert("Preencha o preço de venda!");
        return false;
    }
    if (preco_atacado === "") {
        alert("Preencha o preço a atacado!");
        return false;
    }
    else{
        return true;
    }
}
