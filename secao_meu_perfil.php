<?php 
include_once 'head.php';
include_once 'header_cadastrado.php'; ///Incluição do header 

session_start();
$id = $_SESSION['id'];
    $sql = "SELECT * FROM usuario WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado); 


    if($dados['nome'] == ""){
    $dados['nome'] = 'Pagina';
    }

    
?>

<div class="alinhamento_centro margem_emcima">
    <h1><?php echo $dados['nome'];?> <?php echo $dados['sobrenome']; ?></h1>  </br></br>
    <h3>SUAS INFORMAÇOES</h3>
        <div class="card col-sm-6 offset-sm-4"  style="width: 30rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Email:  <?php echo $dados['email']; ?></li>
                <li class="list-group-item">Número: <?php echo $dados['celular']; ?></li>
                <li class="list-group-item">Gênero: <?php echo $dados['genero'] ?></li>
            </ul>
    </div>
</div>



<?php 
include_once "footer_cadastrado.php";
?>