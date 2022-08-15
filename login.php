<?php
//conexao com o banco de dados
include_once('conexao.php');

if (isset($_POST['email']) || isset($_POST['password'])) {
   //pega a senha digitada no login
   $email = $_POST['email'];
   $senha = $_POST['password'];
   //se o email estiver vazio
   if (strlen($email) == 0) {
      echo "Preencha seu e-mail";
      //se a senha estiver vazia
   } else if (strlen($_POST['password']) == 0) {
      echo "Preencha sua senha";
   } else {

      $sql_code = "SELECT * FROM usuario WHERE email = '$email' LIMIT 1";
      $sql_query = $conexao->query($sql_code) or die($conexao->error);

      $quantidade = $sql_query->num_rows;

      if ($quantidade == 1) {

         $usuario = $sql_query->fetch_assoc();
         if (password_verify($senha, $usuario['senha'])) {

            if (!isset($_SESSION)) {
               session_start();
            }

            $_SESSION['id'] = $usuario['id'];

            header("Location: materias.php");
         } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
         }
      } else {
         echo "Falha ao logar! E-mail ou senha incorretos";
      }
   }
}

include_once 'head.php';
?>

        <div class="form"> <!-- div do formulário-->
            <form action="login.php" method="POST">
                <div class="form-header">
                    <div class="title"> <!-- titulo principal( no caso o cadastro embaixo)-->
                        <h1> Login </h1> <!--nome do titulo-->
                    </div>
                </div>
                    <div class="input-box">
                        <label for="email">E-mail</label> <!--atrituto for faz tipo link emtre a label ao input.(email)-->
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label> <!--atrituto for faz tipo link emtre a label ao input.( senha)-->
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>

                <div class="continue-button">
                    <button class="botao" type="submit">Enviar</button> 
                </div>
                <br>
                <p>Caso não tenha conta, faça seu <a href="cadastro.php">Cadastro</a> </p>
            </form>
        </div>
    </div>
<?php 
include_once "final.php";
?>