<?php
require_once 'head.php';
require_once 'header_cadastrado.php';
require_once 'protect.php';
$nome_da_pagina = 'matérias';
?>

        <!--título e subtítulo-->
        <div class="alinhamento_centro margem_emcima">
            <h1>O que você vai estudar no stunizado</h1>
            <p>Você irá encontar resumos, vídeo-aulas e exercício organizados por matéria.</p>
        </div>

        <!--Início do section-->
        <section class="materias">
        <div class="paginaprincipal">

            <!--parte principal 'cards'-->
            <div class="container">
                <div class="row " >
                    <!--Card 1-->
                    <div class="col" >
                        <div class="card p-0 boxes " id="linguagens">
                            <div class="card-body">
                            <h5 class="card-title">Linguagens e suas tecnologias</h5>
                            <li class="card-text">Língua portuguesa</li>
                            <li class="card-text">Literatura</li>
                            <li class="card-text">Língua estrangeira</li>
                            <li class="card-text">Artes</li> <br>
                            <a href="cadastro.html" class="btn btn-primary pl-5 botao_do_card" id="botao_linguagens">COMEÇAR AGORA</a>
                            </div> 
                        </div>
                    </div>

                    <!--Card 2-->
                    <div class="col" >
                        <div class="card p-0 boxes" id="c_natureza">
                            <div class="card-body ">
                            <h5 class="card-title">Ciências da natureza</h5>
                            <li class="card-text">Biologia</li>
                            <li class="card-text">Física</li>
                            <li class="card-text">Química</li><br>
                            <a href="cadastro.html" class="btn btn-primary pl-5 botao_do_card" id="botao_c_natureza">COMEÇAR AGORA</a>
                            </div>
                        </div>
                    </div>

                    <!--Card 3-->
                    <div class="col">
                        <div class="card p-0 boxes" id="c_humanas">
                            <div class="card-body ">
                            <h5 class="card-title">Ciências </br>humanas</h5>
                            <li class="card-text">História</li>
                            <li class="card-text">Geografia</li>
                            <li class="card-text">Filosofia</li>
                            <li class="card-text">Sociologia</li><br>
                            <a href="cadastro.html" class="btn btn-primary botao_do_card pl-5" id="botao_c_humanas">COMEÇAR AGORA</a>
                            </div>
                        </div>
                    </div>

                    <!--Card 4-->
                    <div class="col">
                        <div class="card p-0 boxes" id="matematica" >
                            <div class="card-body">
                            <h5 class="card-title">Matemática e suas tecnologias</h5>
                            <li class="card-text">Matemática</li><br>
                            <a href="cadastro.html" class="btn btn-primary pl-5 botao_do_card" id="botao_matematica">COMEÇAR AGORA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--fim do section-->
        </section>
        <!--fim div principal-->

<?php
require_once 'footer_cadastrado.php';
?>

    </body>
</html>