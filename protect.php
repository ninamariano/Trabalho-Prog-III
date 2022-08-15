<?php
//não permite a entrada de alguém não logado


if (!isset($_SESSION)) {
   session_start();
}
//se a pessoa não tiver logado ele será redirecionado para o login
if (!isset($_SESSION['id'])) {
   die(header("Location: cadastro.php"));
}
