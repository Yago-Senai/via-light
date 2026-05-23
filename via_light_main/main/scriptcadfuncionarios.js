function validarForm() {
   
    let idfuncionario = document.getElementById("txtidfuncionario").value.trim();
    let nome = document.getElementById("txtnome").value.trim();
    let turno = document.getElementById("txtturno").value.trim();
    let email = document.getElementById("txtemail").value.trim();
    let telefone = document.getElementById("txttelefone").value.trim();
    let cargo = document.getElementById("txtdtcargo").value.trim();
    let setor= document.getElementById("txtsetor").value.trim();
    let endereco= document.getElementById("txtendereco").value.trim();
    let dtnascimento= document.getElementById("txtdtnascimento").value.trim();

    if (nome === "") {
        alert("Preencha o nome!");
        return false;
    }
    if (idfuncionario === "" || idfuncionario.length < 11) {
        alert("ID do funcionário inválido! Digite pelo menos 11 números.");
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
    if(turno=== ""){
        alert("Preencha a aba turno");
        return false;
    }
    if(cargo=== ""){
        alert("Preencha a aba cargo");
        return false;
    }
    if(setor=== ""){
        alert("Preencha a aba setor");
        return false;}
    else{
        return true;
    }
}
