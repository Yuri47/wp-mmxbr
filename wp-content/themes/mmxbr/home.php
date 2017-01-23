 <?php
//Template Name: Dicas
?>
     
<?php get_header() ?>

<div class="container">
    
         <!--seção introdução -->
    <section class="secao">
        <div class="row titulo">
        <h1>Dicas de Informática</h1>
             
       

        </div>
    </section>
      
              
                
         <!--seção serviços -->
    <section class="secao">
             <div class="row">
 
               
                 
                 
                 
                 
                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	     <div class="grid-4 dicas">
                    <div class="imgDicasDiv">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_field('imagem'); ?>"  alt="" class="imgDicas">
                        </a>
                    </div>
                    <div class="tituloh3">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php echo get_the_title() ?></h3>
                        </a>
                    </div>
                    <div class="descricaoP">
                        <p><?php echo the_content() ?>
                        </p>
 
                    </div>
                    <div class="botaoServico">   
                    <a href="<?php the_permalink(); ?>"> <button type="button" class="botao">Ler mais</button></a>
                    </div>     
                </div>

<?php endwhile; ?>

	<div class="nav-blog grid-16">
	 	<?php next_posts_link( '← Posts Antigos' ); ?>
		<?php previous_posts_link( 'Posts Novos →' ); ?>
	</div>

<?php else: endif; ?>
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
               
                  
                 
     </div>
   </section> 
  
   


 

    </div>

<?php get_footer() ?>





























 
 