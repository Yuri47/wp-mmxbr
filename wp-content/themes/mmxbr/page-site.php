<?php 
//Template Name: Criação de Sites
?>
<?php get_header() ?>


<div class="container">
    
    
<!--
*************************
POSTAGEM
*************************
-->    
    
    
       
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	 
 
    
    
         <!--seção introdução -->
    <section class="secao">
        <div class="row titulo">
        <h1><?php echo get_the_title() ?></h1>
         
             
       

        </div>
    </section>
      
              
                
         <!--seção serviços -->
    <section class="secao">
             <div class="row">
                 <div class="post">    
                 <div class=""> 
                <?php  the_content() ?>
                 
              </div>
                  </div>
                 
     </div>
   </section> 
    
    
    <?php endwhile; ?>

	 

<?php else: endif; ?>
    
    
    
    
      
    


 

    </div>



  
<?php get_footer() ?>