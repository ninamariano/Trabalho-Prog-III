<?php
$host = 'localhost';
$usuario = 'root';
$senha ='usbw';
$dtbase = 'gdh';

$conexao = mysqli_connect($host, $usuario, $senha, $dtbase);

if (!$conexao){
    die(mysqli_connect_error());
    echo 'Erro';
}