<?php
//Iniciar  Sessão
session_start();

//Conexão
require_once 'conexao.php';

if(isset($_POST['btn-editar'])):
	$nome=mysqli_escape_string($connect,$_POST['firstname']);
	$sobrenome=mysqli_escape_string($connect,$_POST['lastname']);
	$email=mysqli_escape_string($connect,$_POST['email']);
	$genero=mysqli_escape_string($connect,$_POST['genero']);
	$id=mysqli_escape_string($connect,$_POST['id']);
    $senha=mysqli_escape_string($connect,$_POST['password']);
    $celular=mysqli_escape_string($connect,$_POST['number']);
	
	$sql="UPDATE clientes SET fristname='$nome', lastname='$sobrenome', email='$email', genero='$genero', password='$senha', number='$celular' WHERE  id=$id";
	echo $sql;
	if(mysqli_query($connect,$sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar!";
		header('Location: ../index.php');
	endif;
endif;	



?>