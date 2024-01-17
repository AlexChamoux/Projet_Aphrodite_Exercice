<?php
function setup_style(){
    add_theme_support('wp-block-styles');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'setup_style');
?>