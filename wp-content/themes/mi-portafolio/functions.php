<?php
// Habilitar soporte para thumbnails (imágenes destacadas)
add_theme_support( 'post-thumbnails' );

// Registrar un menú de navegación
function mi_portafolio_registrar_menus() {
    register_nav_menu( 'menu-principal', __( 'Menú Principal' ) );
}
add_action( 'after_setup_theme', 'mi_portafolio_registrar_menus' );

// Encolar estilos (CSS)
function mi_portafolio_estilos() {
    wp_enqueue_style( 'estilo-principal', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mi_portafolio_estilos' );


function mi_portafolio_registrar_proyectos() {
    $args = array(
        'labels' => array(
            'name' => 'Proyectos',
            'singular_name' => 'Proyecto',
            'add_new_item' => 'Añadir nuevo proyecto',
            'edit_item' => 'Editar proyecto',
            'new_item' => 'Nuevo proyecto',
            'view_item' => 'Ver proyecto',
            'all_items' => 'Todos los proyectos'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'proyectos'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-portfolio' // Ícono chulo en el panel
    );
    register_post_type('proyecto', $args);
}
add_action('init', 'mi_portafolio_registrar_proyectos');
