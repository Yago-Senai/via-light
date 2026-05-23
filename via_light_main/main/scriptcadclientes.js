function validarForm() {
   
    let cpf = document.getElementById("txtcpf").value.trim();
    let nome = document.getElementById("txtnome").value.trim();
    let dtnascimento = document.getElementById("txtdtnascimento").value.trim();
    let email = document.getElementById("txtemail").value.trim();
    let telefone = document.getElementById("txttelefone").value.trim();
    let dtcadastro = document.getElementById("txtdtcadastro").value.trim();
    let endereco= document.getElementById("txtendereco").value.trim();
    
    if (nome === "") {
        alert("Preencha o nome!");
        return false;
    }
    if (cpf === "" || cpf.length < 11) {
        alert("CPF inválido! Digite pelo menos 11 números.");
        return false;
    }
    if (dtnascimento === "") {
        alert("Preencha a data de nascimento!");
        return false;
    }
    if (telefone === "" || telefone.length < 10) {
        alert("Telefone inválido!");
        return false;
    }
    if (email === "") {
        alert("Preencha o Email!");
        return false;
    }
    if (dtcadastro === "") {
        alert("Preencha a data de cadastro!");
        return false;
    }
    if(endereco=== ""){
        alert("Preencha a aba endereço");
        return false;
    }
        return true;
}
