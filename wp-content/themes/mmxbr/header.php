

<!DOCTYPE html>


<html lang="pt-BR">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Macromix Informática serviços especializados">
    <meta name="author" content="Yuri Alexs">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <meta name="theme-color" content="‪#0000FF">
 <title><?php wp_title('-'); ?> <?php bloginfo('name'); ?>  <?php the_field('title_seo'); ?></title>
    

    
     
  

    <?php wp_head() ?>

  </head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">
 

        <nav class="menu">
            
             

            
          <div class="container container-navbarmmx navbarmmx">
   
            <input type="checkbox" id="menu-tgl" />
            
            <div class="menuDrop  nav navbar-nav">
<!--                <span class="icone">=</span>-->
                  <label for="menu-tgl" class="menu-btn"></label> 
                <span class="tituloMenu">Macromix</span>
            <?php
	$args = array(
		'menu' => 'menu',
		'container' => false
	);
	wp_nav_menu( $args );
?>
            </div> 
          </div>
        </nav>




 
    <div  class="introducao">
        <div class="container-menu">
            <h1>Macromix</h1> 
            <h3>Assistência técnica especializada</h3>
            <h4>(61) 3029-2859</h4>
          
        </div>
    </div>

    
 