<?php
//conexao com o banco de dados
include_once("conexao.php");

//pega os dados no cadastro e os transforma em variáveis


$nome = $_POST['firstname'];
$sobrenome = $_POST['lastname'];
$email = $_POST['email'];
$celular = $_POST['number'];
$genero = $_POST['genero'];
$senha = $_POST['password'];

$emailvalidate = filter_var($email,FILTER_VALIDATE_EMAIL);



//pega a senha no cadastro, |criptografa| e transforma em uma variável
$senha = password_hash($senha, PASSWORD_DEFAULT);

//insere os dados na tabela do banco dee dados
$sql = "INSERT INTO usuario(nome,sobrenome,email,celular,genero,senha) 
         VALUES('$nome','$sobrenome','$emailvalidate','$celular','$genero','$senha')";
mysqli_error($conexao);
//faz o login automático
if (mysqli_query($conexao, $sql)) {
   $sql_code = "SELECT * FROM usuario WHERE email = '$email' LIMIT 1";
      $sql_query = $conexao->query($sql_code) or die($conexao->error);

      $quantidade = $sql_query->num_rows;

      if ($quantidade == 1) {

         $usuario = $sql_query->fetch_assoc();
         //if (password_verify($senha, $usuario['password'])) {
         if ($senha==$senha) {

            if (!isset($_SESSION)) {
               session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['sobrenome'] = $usuario['sobrenome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['celular'] = $usuario['celular'];
            $_SESSION['genero'] = $usuario['genero'];
            $_SESSION['password'] = $usuario['password'];

            header("Location: materias.php");
} else {
   echo "Erro: " . mysqli_error($conexao);
}
      }}
mysqli_close($conexao);
?>
