<?php 
function load_stylesheets(){

	wp_register_style("bootstrap",get_template_directory_uri() . "/css/bootstrap.min.css", array(),false,"all");
	wp_enqueue_style("bootstrap");

	wp_register_style("stylesheet",get_template_directory_uri() . "/style.css", array(),false,"all");
	wp_enqueue_style("stylesheet");
}

add_action('wp_enqueue_scripots', 'load_stylesheets');
function include_jquery(){
	wp_deregister_script('jquery');

	wp_enqueue_scripts('jquery', get_template_directory_uri()."/js/jquery-3.4.1.min.js", "",1,true);
	add_action("wp_enqueue_scripts", "jquery");
}



function loadjs(){

	wp_register_scripts('customjs', get_template_directory_uri().'/js/scripts.js','',1,true);
	wp_enqueue_scripts('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');