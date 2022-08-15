<?php
    include_once 'conexao.php'; 

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM teste WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado);

    if($dados['nome'] == ""){
    $dados['nome'] = 'Pagina';
    }

?>