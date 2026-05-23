<?php
$dbHost='localhost';
$dbUsername='root';
$dbPassword='';
$dbName='via_light';

$conexao=new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if($conexao->connect_errno){
    die("ERRO NA CONEXÃO: ".$conexao->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $cpf = $_POST['cpf']; 
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['dtnascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $data_cadastro = $_POST['dtcadastro'];

    $acao = $_POST['acao'];

    switch ($acao) {
        case 'salvar':
            $sql = "INSERT INTO cadastro_de_clientes(CPF, NOME,DATA_NASCIMENTO,EMAIL,TELEFONE, ENDERECO, DATA_CADASTRO) VALUES ('$cpf', '$nome', '$data_nascimento', '$email', '$telefone', '$endereco', '$data_cadastro')";
            $mensagem = "Cadastrado com sucesso!";
            break;

        case 'alterar':
            $sql = "UPDATE cadastro_de_clientes SET CPF='$cpf', NOME='$nome', DATA_NASCIMENTO='$data_nascimento', EMAIL='$email', TELEFONE='$telefone', ENDERECO='$endereco', DATA_CADASTRO='$data_cadastro' WHERE CPF='$cpf'";
            $mensagem = "Alterado com sucesso!";
            break;

        case 'excluir':
            $sql = "DELETE FROM cadastro_de_clientes WHERE CPF='$cpf'";
            $mensagem = "Excluído com sucesso!";
            break;
    }

    if ($conexao->query($sql) === TRUE) {
        echo $mensagem;
    } else {
        echo "Erro: " . $conexao->error;
    }
}
?>