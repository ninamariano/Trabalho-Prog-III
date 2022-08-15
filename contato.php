<?php 
include_once 'head.php';
include_once 'header.php';
?>


  <div class="alinhamento_centro margem_emcima"> 
    <div>
      <h1>Entre em contato conosco</h1>
      <p>Envie sua dúvida ou sugestão e logo te responderemos.</p>
    </div>
    <section class="contato">
           <div class="container-cont">
             <div class="content">
               <div class="left-side">
                 <div class="address details">
                   <i class="fas fa-map-marker-alt"></i>
                   <div class="topic">Endereço</div>
                   <div class="text-one">IFES</div>
                   <div class="text-one">Campus Serra</div><br>
                 </div>
                 <div class="address details">
                   <i class="fas fa-phone-alt"></i>
                   <div class="topic">Telefone</div>
                   <div class="text-one">(27)99755-0865</div>
                   <div class="text-two">(27)3080-0781</div><br>
                 </div>
                 <div class="address details">
                   <i class="fas fa-envelope"></i>
                   <div class="topic">Email</div>
                   <div class="text-one">suportestunizado@gmail.com</div><br>
                 </div>
               </div>
               <div class="right-side "> <br>
                 <div class="topic-box" id="envie_msg">Envie sua mensagem</div> <br>
               </div>

              <form action="" method="post">
                <div class="caixa-de-pergunta">
                  <label for="nome">Nome: </label>
                  <input type="text" id="nome">
                </div>
                <div class="caixa-de-pergunta">
                  <label for="email">Email: </label>
                  <input type="email" id="email">
                </div>
                <div class="caixa-de-pergunta">
                  <label for="celular">Celular: </label>
                  <input type="text" id="celular">
                </div>
                <div class="caixa-de-pergunta">
                  <label for="assunto">Assunto: </label>
                  <input type="text" id="assunto">
                </div>
                <div class="caixa-de-pergunta">
                  <textarea name="mensagem" id="menssagem" cols="30" rows="10" placeholder ="Menssagem"></textarea>
                </div> <br>

                <button class="btn-de-enviar"> ENVIAR </button>

              </form>

             </div>
           </div>
    </section>
  </div>





<?php 
include_once 'footer.php';
?>