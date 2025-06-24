<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <nav><?php wp_nav_menu(); ?></nav>
</header>

<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile;
    else :
        echo '<p>No hay contenido para mostrar.</p>';
    endif;
    ?>
</main>

<footer>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
