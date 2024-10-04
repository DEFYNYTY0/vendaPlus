<?php
//conectando arquivo de conexão em banco
include 'conexao.php';

//executando dados da tela de login
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];    

// echo"olá seu CPF: $cpf e Senha: $senha";
//selecione o usuario com o cpf="cpf" do seu login e senha="senha+ do login
$sql = "SELECT *FROM usuario WHERE cpf = '$cpf' AND senha = '$senha'";


//executa codigo SQL com a permissão de conexão
$resultado = mysqli_query($conexao, $sql);

$colunas = mysqli_fetch_assoc($resultado);

if(mysqli_num_rows($resultado) >0 ){
   //echo "login efetuado com sucesso";
   session_start();
$_SESSION['usuario']= $colunas['nome'];   
$_SESSION['cpf'] = $cpf;
$_SESSION['senha'] = $senha;

header('location:principal.php');
}else{ 
//echo" não encontramos seu registro";
session_unset();
session_destroy();
header('location: index.php');
}

?>