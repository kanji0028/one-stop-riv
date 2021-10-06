<?php 

// CSSファイル読み込み
function add_files() {

  // CSS読み込み
  wp_enqueue_style( 'style', get_template_directory_uri(). '/styles/style.css', array(),  '1.0.0'); 
  wp_enqueue_style( 'color', get_template_directory_uri(). '/styles/color.css', array(),  '1.0.0'); 
  wp_enqueue_style( 'parts', get_template_directory_uri(). '/styles/parts.css', array(),  '1.0.0'); 
  
  // スマホのみ読み込み
  if ( wp_is_mobile() ) {
    wp_enqueue_style( 'mobile-footer', get_template_directory_uri(). '/styles/mobile-footer.css', array(),  '1.0.0'); 
    }
}
  add_action('wp_enqueue_scripts', 'add_files');

?>