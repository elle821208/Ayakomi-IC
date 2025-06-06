<?php get_header(); ?>
    <main>
        <P><?php the_date(); ?></P>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </main>
<?php get_footer(); ?>