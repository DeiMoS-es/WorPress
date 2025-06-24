# WorPress
Probando Wordpress

# 📁 Mi Portafolio en WordPress

Este proyecto es un portafolio personal construido desde cero usando WordPress y un tema personalizado. El objetivo es aprender las bases del desarrollo de temas y funcionalidades avanzadas para adquirir conocimientos sólidos y aplicarlos en entrevistas o proyectos reales.

---

## 🔧 Estructura del Tema

Creamos un tema propio dentro de `/wp-content/themes/mi-portafolio`, con los siguientes archivos:

- `style.css`: metadatos del tema y estilos base
- `index.php`: estructura general del sitio
- `functions.php`: configuración y funcionalidades (menús, estilos, CPTs)

---

## 🧭 Navegación Personalizada

Registramos un menú con `register_nav_menu()` y lo mostramos con `wp_nav_menu()` en el archivo `index.php`.

Además, añadimos estilos básicos al menú usando `display: flex`, eliminando viñetas y aplicando colores con hover para darle un diseño limpio y moderno.

---

## 💡 Estilos

Se cargó correctamente el archivo `style.css` usando `wp_enqueue_style()` desde `functions.php`. 

## 🛠️ Custom Post Type: Proyectos

Creamos un tipo de contenido personalizado llamado **Proyecto** usando `register_post_type()`. Esto añade una nueva sección en el panel de WordPress para gestionar nuestros trabajos.

**Características:**

* Publicación y archivo activados: Permite que los proyectos se muestren en la web y tengan una página de archivo propia.
* Soporte para:
    * Título (`the_title()`)
    * Editor (`the_content()`)
    * Imagen destacada (`the_post_thumbnail()`)
* URL personalizada: `/proyectos`
* Ícono personalizado para el panel: `dashicons-portfolio`

---

## 📄 Plantilla Personalizada: `page-proyectos.php`

Creamos una página en el panel de WordPress llamada **"Proyectos"** y la asociamos a una plantilla de página personalizada. Esta plantilla (`page-proyectos.php`) se encarga de mostrar todos los proyectos que hemos creado con el Custom Post Type "Proyecto".

Para recuperar y mostrar dinámicamente todas las entradas del tipo "proyecto", utilizamos la clase `WP_Query`.

---

## 📚 Conceptos Aprendidos

Durante este proceso, hemos afianzado o aprendido los siguientes conceptos clave de WordPress:

* Creación de temas personalizados: Desarrollo de un tema desde cero.
* Registro de menús y estilos: Cómo añadir navegación y hojas de estilo CSS.
* Uso de funciones plantilla: Funciones como `the_title()`, `the_content()`, `the_permalink()`, etc.
* Registro y uso de Custom Post Types (CPT): Extender la funcionalidad de WordPress con tipos de contenido propios.
* Consulta con `WP_Query`: Realizar consultas avanzadas a la base de datos de WordPress para recuperar contenido específico.
* Jerarquía de plantillas en WordPress: Cómo WordPress decide qué archivo de plantilla usar para cada tipo de contenido o página.
* Separación lógica entre PHP y CSS: Mantener el código de lógica (PHP) y el de presentación (CSS) organizados en archivos separados para una mejor mantenibilidad.