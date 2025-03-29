<?php
          // esses são os dados a serem usados no servidor web
//CONFIGURAÇÕS DE CREDENCIAIS
// $server = 'sql204.byethost3.com';
// $usuario = 'b3_36151279';
// $senha = 'Grupo7pi#';
// $banco = 'b3_36151279_projeto_integrador_v1';

// //CONEXAO COM NOSSO BANCO DE DADOS
// $conn = new mysqli($server, $usuario, $senha,$banco);

// //VERIFICAR CONEXAO
// if($conn->connect_error){
//     die("Falha ao se comunicar com banco de dados: ".$conn->connect_error);
// }



//dados a seuguir a ser usado no localhost

$hostname = "localhost";
$username = "root";
$password = "";
$database = "agendamentos";



//CONEXAO COM NOSSO BANCO DE DADOS
$conn = new mysqli($hostname, $username, $password,$database);

//VERIFICAR CONEXAO
if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados: ".$conn->connect_error);
}


?>
