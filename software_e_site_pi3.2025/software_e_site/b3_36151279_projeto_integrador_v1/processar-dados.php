<?php
require_once 'config.php';

//PEGANDO OS DADOS VINDOS DO FORMULÁRIO

$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$data_coleta = isset($_POST["data_coleta"]) ? $_POST["data_coleta"] : "";
$periodo = isset($_POST["periodo"]) ? $_POST["periodo"] : "";
$cep = isset($_POST["cep"]) ? $_POST["cep"] : "";
$local = isset($_POST["local"]) ? $_POST["local"] : "";
$numero = isset($_POST["numero"]) ? $_POST["numero"] : "";
$bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : "";
$cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : "";
$estado = isset($_POST["estado"]) ? $_POST["estado"] : "";
$telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : "";
$data_atual = isset($_POST["data_atual"]) ? $_POST["data_atual"] : "";



 //PREPARAR COMANDO PARA TABELA
$smtp = $conn->prepare("INSERT INTO coletas(nome, email, data_coleta, periodo, cep, local, numero, bairro, cidade, estado, telefone, data_atual) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
$smtp->bind_param("ssssssssssss",$nome, $email, $data_coleta, $periodo, $cep, $local, $numero, $bairro, $cidade, $estado, $telefone, $data_atual);


//SE EXECUTAR CORRETAMENTE
if($smtp->execute()){
    $result = $conn->query("SELECT max(id) FROM coletas");
    $row = $result->fetch_row();
    $maxId = $row[0]; // Obtém o valor máximo do ID
    echo "Agendamento realizado com sucesso! Seu protocolo é: " . $maxId;
}

else{
    echo "Erro no envio da mensagem: ".$smtp->error;
}

$smtp->close();
$protoc->close();
$conn->close();



?>
