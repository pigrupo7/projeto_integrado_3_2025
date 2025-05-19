<?php
 // esses são os dados a serem usados no servidor web
//CONFIGURAÇÕS DE CREDENCIAIS
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "agendamentos";

// //CONEXAO COM NOSSO BANCO DE DADOS
// $conn = new mysqli($hostname, $username, $password,$database);

// //VERIFICAR CONEXAO
// if($conn->connect_error){
//     die("Falha ao se comunicar com banco de dados: ".$conn->connect_error);
// }



//dados a seuguir a ser usado no localhost, CONFIGUREI O $BANCO PARA : b32_38593537_agendamentos ANTES ESTAVA b3_36151279_projeto_integrador_v1,  


$server = 'sql313.byethost32.com';
$usuario = 'b32_38593537';
$senha = 'Grupo7pi#';
$banco = 'b32_38593537_agendamentos';


//CONEXAO COM NOSSO BANCO DE DADOS
$conn = new mysqli($server, $usuario, $senha,$banco);

//VERIFICAR CONEXAO
if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados: ".$conn->connect_error);
}

















?>
