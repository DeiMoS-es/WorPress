<?php
/**
 * Plugin Name: Gestor de Productos y Reseñas
 * Description: Plugin personalizado para gestionar productos y reseñas en WordPress.
 * Version: 1.0
 * Author: Nagib
 */

if (!defined('ABSPATH')) {
    exit;
}

// Incluir archivos
require_once plugin_dir_path(__FILE__) . 'includes/post-types.php';
require_once plugin_dir_path(__FILE__) . 'includes/db-install.php';

// Registrar hook de activación para crear tabla de reseñas
register_activation_hook(__FILE__, 'gp_crear_tabla_reseñas');
