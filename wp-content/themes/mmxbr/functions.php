<?php 


// Função para registrar os Scripts e o CSS
function macromix_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o jQuery Novo
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), "3.1.1", true );

	 
	// Registrar Main
	wp_register_script( 'app-script', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), false, true );

	 

	// Carrega o Script
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'app-script' );	
}
add_action( 'wp_enqueue_scripts', 'macromix_scripts' );

function macromix_css() {
	wp_register_style( 'macromix-style', get_template_directory_uri() . '/style.css', array(), false, false );
	wp_enqueue_style( 'macromix-style' );
}
add_action( 'wp_enqueue_scripts', 'macromix_css' );










// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

function custom_post_type_services() {
	register_post_type('services', array(
		'label' => 'Serviços',
		'description' => 'Serviços',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'services', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Serviços',
			'singular_name' => 'Serviço',
			'menu_name' => 'Serviços',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Serviço',
			'edit' => 'Editar',
			'edit_item' => 'Editar Serviço',
			'new_item' => 'Novo Serviço',
			'view' => 'Ver Serviço',
			'view_item' => 'Ver Serviço',
			'search_items' => 'Procurar Serviços',
			'not_found' => 'Nenhum Serviço Encontrado',
			'not_found_in_trash' => 'Nenhum Serviço Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_services');
?>