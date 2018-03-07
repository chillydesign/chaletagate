<?php /* Template Name: Home Page Template */ get_header(); ?>



<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" >

        <?php $appartment_gallery  = get_field('appartment_gallery'); ?>
        <?php $appartment_paragraph = get_field('appartment_paragraph'); ?>
        <?php $appartment_background = get_field('appartment_background'); ?>
        <section id="appartment_section">
            <div class="container">
                <h5>découvrez</h5>
                <h2>l’appartement</h2>


                <div class="carousel">
                    <?php foreach ($appartment_gallery as $gallery_image)  : ?>
                        <div class="carousel-cell">
                            <img src="<?php echo $gallery_image['sizes']['small']; ?>"  srcset="<?php echo $gallery_image['sizes']['medium']; ?> 1000w, <?php echo $gallery_image['sizes']['large']; ?> 2000w"   sizes="100vw" alt="<?php echo $gallery_image['title']; ?>" />
                        </div>
                    <?php endforeach; ?>
                </div>



                <p><?php echo $appartment_paragraph; ?></p>
                <p><a href="#" class="button ">Plus d’informations</a></p>
            </div>
            <div class="section_background_image" style="background-image:url(<?php echo $appartment_background['sizes']['large']; ?>);"></div>
        </section>


        <?php $appartment_big_picture  = get_field('appartment_big_picture'); ?>
        <?php if ($appartment_big_picture): ?>
            <section class="section_big_picture" style="background-image:url(<?php echo $appartment_big_picture['sizes']['large']; ?>);">
                <div class="white_bar"></div>
                <div class="white_bar white_bar_2"></div>
            </section>
        <?php endif; ?>

        <?php $programme_paragraph = get_field('programme_paragraph'); ?>
        <?php $winter_paragraph = get_field('winter_paragraph'); ?>
        <?php $winter_photo = get_field('winter_photo'); ?>
        <?php $summer_paragraph  = get_field('summer_paragraph'); ?>
        <?php $summer_photo  = get_field('summer_photo'); ?>
        <?php $programme_background = get_field('programme_background'); ?>
        <section id="programme_section">
            <div class="container">
                <h5>Que faire à Villars-sur-Ollons?</h5>
                <h2>Au programme</h2>
                <p><?php echo $programme_paragraph; ?></p>

                <br><br>

                <div class="programme_row programme_row_flip">
                    <div class="programme_col">
                        <h3>L'Hiver</h3>
                        <p><?php echo $winter_paragraph; ?></p>
                        <p><a href="#" class="button ">Toutes les activités >></a></p>
                    </div>
                    <div class="programme_col">
                        <div class="image_parallelogram image_parallelogram_flipped">
                            <div class="image_image" style="background-image:url(<?php echo $winter_photo['sizes']['medium']; ?>)"></div>
                            <div class="shadow_1"></div>
                            <div class="shadow_2"></div>
                        </div>
                    </div>

                </div>

                <div class="programme_row">
                    <div class="programme_col">
                        <h3>L’été</h3>
                        <p><?php echo $summer_paragraph; ?></p>
                        <p><a href="#" class="button ">Toutes les activités >></a></p>
                    </div>
                    <div class="programme_col">
                        <div class="image_parallelogram">
                            <div class="image_image" style="background-image:url(<?php echo $summer_photo['sizes']['medium']; ?>)"></div>
                            <div class="shadow_1"></div>
                            <div class="shadow_2"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="section_background_image" style="background-image:url(<?php echo $programme_background['sizes']['large']; ?>);"></div>
        </section>


        <?php $programme_big_picture  = get_field('programme_big_picture'); ?>
        <?php if ($programme_big_picture): ?>
            <section class="section_big_picture section_big_picture_flipped" style="background-image:url(<?php echo $programme_big_picture['sizes']['large']; ?>);">
                <div class="white_bar"></div>
                <div class="white_bar white_bar_2"></div>
            </section>
        <?php endif; ?>



        <section id="location_section">
            <div class="container">
                <h5>Votre séjour?</h5>
                <h2>Nous trouver</h2>
                <?php $contact_content  = get_field('contact_content'); ?>


                <div class="programme_row programme_row_flip">
                    <div class="programme_col">
                        <h3>Chalet agate 17</h3>
                        <?php echo $contact_content; ?>
                        <p><a href="#" class="button">Réserver votre séjour</a></p>

                        </div>
                        <div class="programme_col">
                            <div id="map_container"></div>
                            <script>
                            var single_map_location = {lat: 46.2947944, lng: 7.0623332, title: 'Chalet Agate'};
                            </script>
                        </div>

                    </div>


                </div>
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
