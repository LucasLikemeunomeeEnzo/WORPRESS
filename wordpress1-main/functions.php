<?php
function etec_config() {
    // Suporte para Logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Suporte para Menus
    register_nav_menus(
        array(
            'primary_menu' => 'Menu Principal'
        )
    );
}
add_action('after_setup_theme', 'etec_config');
?>