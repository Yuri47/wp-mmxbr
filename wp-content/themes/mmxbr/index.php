<?php get_header() ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 
                 
                
                 
                     <div class="grid-4 dicas">
                    <div class="imgDicasDiv">
                        <a href="post.html">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ogimagehome.png" alt="" class="imgDicas">
                        </a>
                    </div>
                    <div class="tituloh3">
                        <a href="post.html">
                            <h3><?php the_title() ?></h3>
                        </a>
                    </div>
                    <div class="descricaoP">
                        <p><?php the_content() ?>
                        </p>
                    </div>
                    <div class="botaoServico">   
                    <a href="post.html"> <button type="button" class="botao">Ler mais</button></a>
                    </div>     
                </div>
                  
                 
                 
                 
                 
                <?php endwhile; else : ?>
	               <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?> 

  <?php get_footer() ?>