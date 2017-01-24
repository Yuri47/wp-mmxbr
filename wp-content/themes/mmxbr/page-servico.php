<?php 
//Template Name: ServicesPage
?>

<?php get_header() ?>

<div class="container">
    
    
<!--
************************
Página para mostrar todos os serviços
************************
-->
    
    
    
    
    
         <!--seção introdução -->
    <section class="secao">
        <div class="row titulo">
        <h1>Serviços</h1>
             
       

        </div>
    </section>
      
              
                
         <!--seção serviços -->
    <section class="secao">
             <div class="row">
                  
                 
                 
 

    
                 <?php
                    $args = array(
	                   'post_type' => 'services',
                          
	 
                                );

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	 
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
        
        
        
        ?>
                 
                      <div class="grid-4 dicas">
                    <div class="imgDicasDiv">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_field('icone'); ?>"  alt="" class="imgDicas">
                        </a>
                    </div>
                    <div class="tituloh3">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php echo get_the_title() ?></h3>
                        </a>
                    </div>
                    <div class="descricaoP">
                        <p><?php echo the_field('descricao') ?>
                        </p>
 
                    </div>
                    <div class="botaoServico">   
                    <a href="<?php the_permalink(); ?>"><button type="button" class="botao">Ler mais</button></a>
                    </div>     
                </div>
                  
                 
                 
                 <?php
         
		 
	}
	 
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
    echo 'n';
}
                
       ?>          
            
                 
                 
                
                 
     </div>
   </section> 
  
   


 

    </div>

<?php get_footer() ?>





























 
 