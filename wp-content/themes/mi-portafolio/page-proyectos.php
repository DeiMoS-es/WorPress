<?php
/* Template Name: Página de Proyectos */
get_header(); ?>

<main>
    <h1>Mis Proyectos</h1>

    <?php
    $args = array(
        'post_type' => 'proyecto',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        echo '<section class="proyectos">';
        while ($query->have_posts()) : $query->the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                } ?>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile;
        echo '</section>';
        wp_reset_postdata();
    else :
        echo '<p>No hay proyectos para mostrar.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
