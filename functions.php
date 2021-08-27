<?php 

// JS・CSSファイル読み込み
function add_files() {
  
  // JS読み込み
	wp_enqueue_script('scroll', get_template_directory_uri().'/scripts/scrollreveal.js', array(),'1.0',true);
	wp_enqueue_script('infiniteslide', get_template_directory_uri().'/scripts/infiniteslide.js', array(),'1.0',true);

  // CSS読み込み
  wp_enqueue_style( 'style', get_template_directory_uri(). '/styles/style.css', array(),  '1.0.0'); 
  wp_enqueue_style( 'color', get_template_directory_uri(). '/styles/color.css', array(),  '1.0.0'); 
  wp_enqueue_style( 'parts', get_template_directory_uri(). '/styles/parts.css', array(),  '1.0.0'); 
  wp_enqueue_style( 'modal', get_template_directory_uri(). '/styles/modal.css', array(),  '1.0.0'); 
  
  // スマホのみ読み込み
  if ( wp_is_mobile() ) {
    wp_enqueue_style( 'mobile-footer', get_template_directory_uri(). '/styles/mobile-footer.css', array(),  '1.0.0'); 
    }
}
  add_action('wp_enqueue_scripts', 'add_files');

?>