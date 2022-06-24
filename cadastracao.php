<?php
//conexao com o banco de dados
include_once("../php/conexao.php");

//pega os dados no cadastro e os transforma em variáveis


$nome = $_POST['firstname'];
$sonome = $_POST['lastname'];
$email = $_POST['email'];
$celular = $_POST['number'];
$genero = $_POST['genero'];


$val = 0;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $val = $val + 1;
 } else {
   mysqli_close($conexao);
 }


if($val == 1){

//pega a senha no cadastro, |criptografa| e transforma em uma variável
$senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

//insere os dados na tabela do banco dee dados
$sql = "INSERT INTO teste(nome,sobrenome,email,celular,cpf,nascimento,genero,renda,lazer,investimento,senha)
      VALUES('$nome','$sonome','$email','$celular','$cpf','$nascimento','$genero','$renda','$lazer','$invest','$senha')";

//faz o login automático
if (mysqli_query($conexao, $sql)) {
   include_once("../login/login.php");
} else {
   echo "Erro: " . mysqli_error($conexao);
}
}
mysqli_close($conexao);
