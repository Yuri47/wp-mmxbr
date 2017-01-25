


 <!--seção showcase -->
 
<section   class="secao">
    <div class="showcase">
        <div class="container container-menu">
            <div class="row">
            
                  <h3>Confira nossas dicas sobre informática sobre como ter o melhor aproveitamento das suas tarefas e produtos</h3>
                   <a href="dicas">
                   <button type="button" class="botao"> Clique Aqui</button> 
                   </a>
                  
            </div>
              
        </div><!-- /container -->
    </div>  
    
    </section>

 
 

 
    <div class="rodape">
        <div class="container">
            <div class="grid-6">
                <h3>Macromix Informática</h3>
                   <address>
                     
                    Quadra Central 01 Conjunto D Lote 04 Loja 03<br>
                    Santa Maria, Distrito Federal<br>
                    Telefone: (61) <strong> 3029-2859</strong><br>
                    Funcionamento: segunda a sexta de 09:00 as 18:00, sábado de 09:00 as 14:00<br>
                    CNPJ: 11.113.091/0001-98 <br>


                  </address>

                  <div class="fb-page" data-href="https://www.facebook.com/macromixbr" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/macromixbr" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/macromixbr">Macromix Informática</a></blockquote></div>
            </div>

            
            <div id="contato" class="grid-6 contato">

             

                 <h3>Envie-nos uma mensagem</h3>
                <div class="formulario">
                 
                      
                    
                    
                    
                    <form action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="post" name="form" class="formphp contato_form  ">
				<label for="nome">Nome</label>
				<input id="nome" required name="nome" type="text">
				<label for="email">E-mail</label>
				<input id="email" required name="email" type="text">
				<label for="telefone">Telefone</label>
				<input id="telefone" name="telefone" type="text">
                <label for="assunto">Assunto</label>
				<input id="assunto" required name="assunto" type="text">
				<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
				<input type="text" class="nao-aparece" name="leaveblank">
				<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
				<input type="text" class="nao-aparece" name="dontchange" value="http://" >

				<label for="mensagem">Mensagem</label>
				<textarea required name="mensagem" id="mensagem"></textarea>

				<button id="enviar" name="enviar" type="submit" class="botao">Enviar</button>
			</form>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    
    
    <div class="fimDoSite">
        <div class="container">
            <p>Desenvolvido por: Yuri Alexsander - Macromix 2017</p>
            <p>Imagens: <a href="https://unsplash.com/" target="_blank">unsplash.com</a></p>
        
         
        </div>
    </div>

 
     
    
    <?php wp_footer() ?>    
</body>


</html>
