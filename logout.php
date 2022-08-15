<?php

if (!isset($_SESSION)) {
   session_start();
}
//destrói a seção do usuário e o redireciona para o login
session_destroy();
header("Location: ../");
