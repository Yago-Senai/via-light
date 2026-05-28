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

    $idfuncionario = $_POST['idfuncionario']; 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $turno = $_POST['turno'];
    $dtcargo = $_POST['dtcargo'];
    $setor = $_POST['setor'];
    $endereco = $_POST['endereco'];
    $data_nascimento = $_POST['dtnascimento'];

    $acao = $_POST['acao'];

    switch ($acao) {
        case 'salvar':
            $sql = "INSERT INTO cadastro_de_funcionarios(ID_FUNCIONARIO, NOME, EMAIL, TELEFONE, TURNO, CARGO, SETOR, ENDERECO, DATA_NASCIMENTO) VALUES ('$idfuncionario', '$nome', '$email', '$telefone', '$turno', '$dtcargo', '$setor', '$endereco', '$data_nascimento')";
            $mensagem = "Cadastrado com sucesso!";
            break;

        case 'alterar':
            $sql = "UPDATE cadastro_de_funcionarios SET ID_FUNCIONARIO='$idfuncionario', NOME='$nome', EMAIL='$email', TELEFONE='$telefone', TURNO='$turno', CARGO='$dtcargo', SETOR='$setor', ENDERECO='$endereco', DATA_NASCIMENTO='$data_nascimento' WHERE ID_FUNCIONARIO='$idfuncionario'";
            $mensagem = "Alterado com sucesso!";
            break;

        case 'excluir':
            $sql = "DELETE FROM cadastro_de_funcionarios WHERE ID_FUNCIONARIO='$idfuncionario'";
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