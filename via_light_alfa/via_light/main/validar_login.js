function ValidarLogin(){
    let usuario = document.getElementById("txtusuario").value;
    let senha = document.getElementById("txtsenha").value;

    if(usuario == "admin" && senha == "1234"){
        alert("Login realizado com sucesso!");
        window.location.href = "dashboard.html";
    }
    else{
        alert("Usuário ou senha incorretos!");
    }
}