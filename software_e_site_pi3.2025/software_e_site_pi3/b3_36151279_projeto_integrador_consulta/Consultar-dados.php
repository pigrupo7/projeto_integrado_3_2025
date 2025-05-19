<?php
require_once 'config.php';

//PEGANDO OS DADOS VINDOS DO FORMULÁRIO
$id = $_POST['id'];
$email = $_POST['email'];

// CONSULTAR BANCO
$sql_id = "SELECT * FROM agendamentos WHERE id='".$id."'";
$sql_email = "SELECT * FROM agendamentos WHERE email='".$email."'";

//VERIFICAR SE FOI INFORADO ID OU EMAIL
if ($id != ""){
    $result = $conn->query($sql_id);
}
else{
    $result = $conn->query($sql_email);
}

if ($result->num_rows > 0) {
    echo "<p>Agendamentos Encontrados:</p>";
  while($row = $result->fetch_assoc()) {
    $prot = $row["id"];  
    $nome = $row["nome"];
    $email = $row["email"];
    $data_coleta = $row["data_coleta"];
    $periodo = $row["periodo"];

$cep = $row["cep"];

    $local = $row["local"];

$numero = $row["numero"];
$bairro = $row["bairro"];
$cidade = $row["cidade"];
$estado = $row["estado"];

    $telefone = $row["telefone"];

$tipo = $row["tipo"];
$quantidade = $row["quantidade"];
$data_atual = $row["data_atual"];


// devemos laterar os campos de resultado para e incluir os dados abaixo:

// $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
// $email = isset($_POST["email"]) ? $_POST["email"] : "";
// $data_coleta = isset($_POST["data_coleta"]) ? $_POST["data_coleta"] : "";

// $periodo = isset($_POST["periodo"]) ? $_POST["periodo"] : "";
// $cep = isset($_POST["cep"]) ? $_POST["cep"] : "";
// $local = isset($_POST["local"]) ? $_POST["local"] : "";
// $numero = isset($_POST["numero"]) ? $_POST["numero"] : "";
// $bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : "";
// $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : "";
// $estado = isset($_POST["estado"]) ? $_POST["estado"] : "";
// $telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : "";

// $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";

// $quantidade = isset($_POST["quantidade"]) ? $_POST["quantidade"] : "";

// $data_atual = isset($_POST["data_atual"]) ? $_POST["data_atual"] : "";




  // EXIBE INFORMACOES DO AGENDAMENTO
    echo "<p>-----------------------------</p>";
    echo "<p>Protocolo: $prot</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Data de Coleta: $data_coleta</p>";
    echo "<p>Periodo: $periodo</p>";

echo "<p>CEP $cep</p>";
    echo "<p>Local: $local</p>";
    echo "<p>Numero: $numero</p>";
    echo "<p>bairro: $bairro</p>";
    echo "<p>Cidade: $cidade</p>";

    
echo "<p>Estado: $estado/p>";
 
    echo "<p>Telefone: $telefone</p>";
    echo "<p>tipo: $tipo</p>";
    echo "<p>quantidade: $quantidade</p>";
    
  }

}
//if ($smtp->num_rows > 0) {
//    echo "protocolo - nome - email - data_coleta - periodo - local - telefone";
//    while($row = $smtp->fetch_assoc()) {
//        echo "<p>". $row["id"] . " - " . $row["nome"] . " - " . $row["email"] . " - " . $row["data_coleta"] . " - " . $row["periodo"] . " - " . $row["local"] . " - " . $row["telefone"] . "</p>";
//    }
//}

else{
    echo "Protocolo ou email informado não existem".$smtp->error;
}

$smtp->close();
$conn->close();


?>
