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

    $codproduto = $_POST['codproduto']; 
    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $data_validade = $_POST['data_validade'];
    $preco_venda = $_POST['preco_venda'];
    $preco_atacado = $_POST['preco_atacado'];

    $acao = $_POST['acao'];

    switch ($acao) {
        case 'salvar':
            $sql = "INSERT INTO cadastro_de_produtos(COD_PRODUTO, NOME, FABRICANTE, DATA_VALIDADE, PRECO_VENDA, PRECO_ATACADO) VALUES ('$codproduto', '$nome', '$fabricante', '$data_validade', '$preco_venda', '$preco_atacado')";
            $mensagem = "Cadastrado com sucesso!";
            break;

        case 'alterar':
            $sql = "UPDATE cadastro_de_produtos SET COD_PRODUTO='$codproduto', NOME='$nome', FABRICANTE='$fabricante', DATA_VALIDADE='$data_validade', PRECO_VENDA='$preco_venda', PRECO_ATACADO='$preco_atacado' WHERE COD_PRODUTO='$codproduto'";
            $mensagem = "Alterado com sucesso!";
            break;

        case 'excluir':
            $sql = "DELETE FROM cadastro_de_produtos WHERE COD_PRODUTO='$codproduto'";
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