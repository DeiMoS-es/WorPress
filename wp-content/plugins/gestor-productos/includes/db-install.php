<?php

if (!defined('ABSPATH')) {
    exit;
}

function gp_crear_tabla_reseñas() {
    global $wpdb;

    $tabla = $wpdb->prefix . 'reseñas';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabla (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        producto_id BIGINT(20) UNSIGNED NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        puntuacion TINYINT NOT NULL,
        comentario TEXT NOT NULL,
        fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY producto_id (producto_id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}

