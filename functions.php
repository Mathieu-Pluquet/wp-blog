<?php


// bootstrap

function bygga_bootstrap_scripts()
{
    if (!is_admin()) {
        wp_register_script('bootstrapjs', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array(), '3.0.0');
        wp_enqueue_script('bootstrapjs');
    }
}
add_action('init', 'bygga_bootstrap_scripts');
function bygga_bootstrap_styles()
{
    wp_register_style('bootstrapcss', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css', array(), '3.0.0', 'all');
    wp_enqueue_style('bootstrapcss');
}
add_action('wp_enqueue_scripts', 'bygga_bootstrap_styles');

// autre


function mpmac_scripts() {
  wp_enqueue_style('mpmac_custom', get_template_directory_uri() . '/style.css', array('mpmac_bootstrap-core'), MPMAC_VERSION , 'all');
  wp_enqueue_style('mpmac_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.css', array(), MPMAC_VERSION , 'all');

  wp_enqueue_script('mpmac_admin_script', get_template_directory_uri() . '/main.js', array(), MPMAC_VERSION , true);

}

add_action('wp_enqueue_scripts', 'mpmac_scripts');
?>
