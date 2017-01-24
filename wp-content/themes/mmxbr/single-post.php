<?php 
//Template Name: Post
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
        <span class="data"><?php echo get_the_date() ?> - <?php echo get_the_time() ?></span>
             
       

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

	<div class="nav-blog grid-16">
	 	<?php next_posts_link( '← Posts Antigos' ); ?>
		<?php previous_posts_link( 'Posts Novos →' ); ?>
	</div>

<?php else: endif; ?>
    
    
    
    
     
     
    
    
    
    
    
    
    
  <section class="secao">
             <div class="row">
                 <h3 class="postH3">Outros Artigos</h3>
                 
                 
                  
<!--
*************************
OUTRAS POSTAGENS
*************************
-->

    
                 <?php
                    $args = array(
	                   'post_type' => 'post',
                        'orderby' => 'rand',
                        'posts_per_page' => 3,
                        
	 
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
                            <img src="<?php the_field('imagem'); ?>"  alt="" class="imgDicas">
                        </a>
                    </div>
                    <div class="tituloh3">
                        <a href="post.html">
                            <h3><?php echo get_the_title() ?></h3>
                        </a>
                    </div>
                    <div class="descricaoP">
                        <p><?php echo the_content() ?>
                        </p>
 
                    </div>
                    <div class="botaoServico">   
                    <a href="post.html"> <button type="button" class="botao">Ler mais</button></a>
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