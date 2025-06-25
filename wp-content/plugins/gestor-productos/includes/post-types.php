<?php

if (!defined('ABSPATH')) {
    exit;
}

function gp_registrar_cpt_producto() {
    $labels = [
        'name' => 'Productos',
        'singular_name' => 'Producto',
        'menu_name' => 'Productos',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo producto',
        'edit_item' => 'Editar producto',
        'view_item' => 'Ver producto',
        'all_items' => 'Todos los productos',
        'search_items' => 'Buscar productos',
        'not_found' => 'No se encontraron productos',
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'productos'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ];

    register_post_type('producto', $args);
}
add_action('init', 'gp_registrar_cpt_producto');
