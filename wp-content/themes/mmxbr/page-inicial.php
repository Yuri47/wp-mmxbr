<?php 
//Template Name: Inicial
?>
<?php get_header() ?>

<div class="container">
    
         <!--seção introdução -->
    <section class="secao">
        <div class="row titulo">
        <h1>Macromix Informática</h1>
             
            <div class="grid-6"><img src=<?php echo get_stylesheet_directory_uri(); ?>/img/mmxlogog.png alt="Logo Macromix"></div>
            <div class="grid-6">  
                    <p>A Macromix é uma empresa de informática que está há 13 anos no mercado           oferecendo os melhores serviços e produtos de qualidade. Fundada em Outubro 
                        de 2003, a Macromix tem como principal compromisso realizar os serviços  
                        com total transparência e qualidade por um preço justo. 
                    </p>

                    <div class="botaoTitulo">
                        <a href="/services"><button type="button" class="botao">Confira nossos serviços</button></a>
                    </div>

            </div>
             

        </div>
    </section>
      
              <hr>
                
         <!--seção serviços -->
    <section class="secao">
             <div class="row">
                 
                <div class="grid-4 servico">
                    <div class="imgServicoDiv">
                         <a href="services/solucoes-em-impressao">
                            <img src=<?php echo get_stylesheet_directory_uri(); ?>/img/bulk.png alt="" class="imgServico">
                        </a>
                    </div>
                    <div class="tituloh3">
                         <a href="services/solucoes-em-impressao">
                            <h3>Soluções em Impressão</h3>
                        </a>
                    </div>
                    <div class="descricaoP">
                        <p>Tem um grande volume de impressão? Nós temos a solução para você economizar! Imprima a menos de 0,01 centavo de custo. 
                        </p>
                    </div>
                    <div class="botaoServico">   
                    <a href="services/solucoes-em-impressao"> <button type="button" class="botao">Ver Detalhes</button></a>
                    </div>     
                </div>
                 
                  
                <div class="grid-4 servico">
                    <div class="imgServicoDiv">
                        <a href="services/manutencao-de-computadores-e-notebooks">
                    <img src=<?php echo get_stylesheet_directory_uri(); ?>/img/windows-icon.png alt="" class="imgServico">
                        </a>
                    </div>
                    <div class="tituloh3">
                        <a href="services/manutencao-de-computadores-e-notebooks">
                    <h3>Manutenção</h3>
                        </a>
                    </div>
                    <div class="descricaoP">
                        <p>Fazemos manutenção em computadores, notebooks e carregadores, impressoras e monitores.  
                        </p>
                    </div>
                    <div class="botaoServico">   
                    <a href="services/manutencao-de-computadores-e-notebooks"> <button type="button" class="botao">Ver Detalhes</button></a>
                    </div>     
                </div>
                 
                  
                <div class="grid-4 servico">
                    <div class="imgServicoDiv">
                        <a href="criarsites">
                    <img src=<?php echo get_stylesheet_directory_uri(); ?>/img/responsive.png alt="" class="imgServico">
                        </a>
                    </div>
                    <div class="tituloh3">
                        <a href="criarsites">
                    <h3>Criação de Sites</h3>
                        </a>
                    </div>
                    <div class="descricaoP">
                        <p>Deseja ter um site para sua empresa ou negócio? Isso é mais simples do que você imagina! Cuidamos de tudo para você. 
                        </p>
                    </div>
                    <div class="botaoServico">   
                    <a href="criarsites"> <button type="button" class="botao">Ver Detalhes</button></a>
                    </div>     
                </div>
                  
                 
     </div>
   </section> 
  
    


 

    </div>


  <?php get_footer() ?>