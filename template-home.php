<?php /* Template Name: Home Page Template */ get_header(); ?>



<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" >

        <?php $appartment_gallery  = get_field('appartment_gallery '); ?>
        <?php $appartment_paragraph = get_field('appartment_paragraph'); ?>
        <?php $appartment_background = get_field('appartment_background'); ?>
        <section id="appartment_section">
            <div class="container">
                <h5>découvrez</h5>
                <h2>l’appartement</h2>

                <p><?php echo $appartment_paragraph; ?></p>
                <p><a href="#" class="button ">Plus d’informations</a></p>
            </div>
            <div class="section_background_image" style="background-image:url(<?php echo $appartment_background['sizes']['large']; ?>);"></div>
        </section>









    </article>
    <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article class="container">

        <h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>






<?php get_footer(); ?>
