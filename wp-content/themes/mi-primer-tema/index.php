<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head(); // Este hook es ESENCIAL para que WordPress y los plugins inserten sus estilos, scripts y metadatos. 
    ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <main>
        <?php
        // El Loop de WordPress: Muestra las entradas del blog
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
        <?php
            endwhile;
        else :
            echo '<p>Lo siento, no hay entradas para mostrar.</p>';
        endif;
        ?>


<!-- Loop personalizdo -->
        <?php
        $args = array(
            'post_type' => array('post', 'page'), // Puedes añadir más tipos si quieres
            'post_status' => array('publish', 'draft'),
            'posts_per_page' => -1
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No hay contenido para mostrar.</p>';
        endif;
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date_i18n('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
    </footer>

    <?php wp_footer(); // Este hook es ESENCIAL para que WordPress y los plugins inserten sus scripts al final del body. 
    ?>
</body>

</html>