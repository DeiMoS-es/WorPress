# Gestor de Productos y Reseñas

Este plugin personalizado para WordPress permite gestionar productos y sus reseñas. Incluye:
- Registro de un Custom Post Type llamado `producto`
- Preparación para añadir reseñas personalizadas mediante AJAX y API REST
- Estilos personalizados con Bootstrap y Sass

## ✅ Requisitos previos

- WordPress instalado y funcionando (local o servidor)
- Entorno LAMP activo (XAMPP en Ubuntu, por ejemplo)
- Acceso a la carpeta `/wp-content/plugins/`

---

## 🧱 Paso 1: Crear la carpeta del plugin

Navega a la carpeta de plugins de tu instalación de WordPress:

```bash
cd /opt/lampp/htdocs/tu_proyecto/wp-content/plugins
mkdir gestor-productos
cd gestor-productos
touch gestor-productos.php
```

## 🧱 Paso 2: Crear el archivo principal del plugin
Se abre el archivo 'gestor-productos.php' y se añade el siguiente código:

```bash
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

```
## 🧱 Paso 3:Configurar el pluggin
Se abre el archivo 'post-types.php' y se añade el siguiente código:
```bash
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

```

## 🧱 Paso 4: Crear bbdd
```bash
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
```
## 🧱 Paso 5: Activar el pluggin

1. Accede al panel de administración de WordPress: http://localhost/tu_proyecto/wp-admin

2. Dirígete a Plugins → Plugins instalados

3. Activa el plugin Gestor de Productos y Reseñas

4. Deberías ver un nuevo menú en el panel llamado Productos
