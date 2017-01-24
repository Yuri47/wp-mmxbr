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
               <div class="grid-4"> 
                     <img src="<?php the_field('primeiraimagem'); ?>"  alt="" class=" imgSite">
                     <img src="<?php the_field('segundaimagem'); ?>"  alt="" class=" imgSite">
                      
                      </div>
                 <div class="grid-8 post"> 
                    <?php  the_content() ?>
                 
                 </div>
                 
     </div>
   </section> 
    
    
    <?php endwhile; ?>

	 

<?php else: endif; ?>
    
    
    
    
      
    


 

    </div>



  
<?php get_footer() ?>