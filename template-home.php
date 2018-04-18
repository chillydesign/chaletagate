<?php /* Template Name: Home Page Template */ get_header(); ?>



<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" >

        <?php $appartment_gallery  = get_field('appartment_gallery'); ?>
        <?php $apartment_subtitle = get_field('apartment_subtitle'); ?>
        <?php $apartment_title = get_field('apartment_title'); ?>
        <?php $appartment_paragraph = get_field('appartment_paragraph'); ?>
        <?php $appartment_background = get_field('appartment_background'); ?>
        <section id="appartment_section">
            <div class="container">
                <h5><?php echo $apartment_subtitle; ?></h5>
                <h2><?php echo $apartment_title; ?></h2>


                <div class="carousel">
                    <?php foreach ($appartment_gallery as $gallery_image)  : ?>
                        <div class="carousel-cell">
                            <a data-featherlight="image"  title="<?php echo $gallery_image['title']; ?>" class="gallery"  href="<?php echo  $gallery_image['sizes']['large']; ?>">
                                <div class="carousel_image" style="background-image:url(<?php echo $gallery_image['sizes']['medium'] ; ?> );" ></div>
                            </a>
                        </div>

                    <?php endforeach; ?>
                </div>



                <div><?php echo $appartment_paragraph; ?></div>
            </div>
            <div class="section_background_image" style="background-image:url(<?php echo $appartment_background['sizes']['large']; ?>);"></div>
        </section>


        <?php $appartment_big_picture  = get_field('appartment_big_picture'); ?>
        <?php if ($appartment_big_picture): ?>
            <section class="section_big_picture" style="background-image:url(<?php echo $appartment_big_picture['sizes']['large']; ?>);">
                <div class="white_bar"></div>
                <div class="white_bar white_bar_2"></div>
                <?php if ( $appartment_big_picture['caption'] != '' ): ?>
                    <p class="photo_caption"><span><?php echo  $appartment_big_picture['caption']; ?></span></p>
                <?php endif; ?>
            </section>
        <?php endif; ?>

        <?php $program_subtitle = get_field('program_subtitle'); ?>
        <?php $program_title = get_field('program_title'); ?>
        <?php $programme_paragraph = get_field('programme_paragraph'); ?>
        <?php $winter_paragraph = get_field('winter_paragraph'); ?>
        <?php $winter_photo = get_field('winter_photo'); ?>
        <?php $summer_paragraph  = get_field('summer_paragraph'); ?>
        <?php $summer_photo  = get_field('summer_photo'); ?>
        <?php $programme_background = get_field('programme_background'); ?>
        <section id="programme_section">
            <div class="container">
                <h5><?php echo $program_subtitle; ?></h5>
                <h2><?php echo $program_title; ?></h2>
                <p><?php echo $programme_paragraph; ?></p>

                <br><br>

                <div class="programme_row programme_row_flip">
                    <div class="programme_col">
                        <div><?php echo $winter_paragraph; ?></div>
                    </div>
                    <div class="programme_col">
                        <div class="image_parallelogram image_parallelogram_flipped">
                            <div class="image_image" style="background-image:url(<?php echo $winter_photo['sizes']['medium']; ?>)"></div>
                            <div class="shadow_1"></div>
                            <div class="shadow_2"></div>
                            <?php if ( $winter_photo['caption'] != '' ): ?>
                                <p class="photo_caption"><?php echo  $winter_photo['caption']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

                <div class="programme_row">
                    <div class="programme_col">
                        <div><?php echo $summer_paragraph; ?></div>
                    </div>
                    <div class="programme_col">
                        <div class="image_parallelogram">
                            <div class="image_image" style="background-image:url(<?php echo $summer_photo['sizes']['medium']; ?>)"></div>
                            <div class="shadow_1"></div>
                            <div class="shadow_2"></div>
                            <?php if ( $summer_photo['caption'] != '' ): ?>
                                <p class="photo_caption"><?php echo  $summer_photo['caption']; ?></p>
                            <?php endif; ?>
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
                <?php if ( $programme_big_picture['caption'] != '' ): ?>
                    <p class="photo_caption"><span><?php echo  $programme_big_picture['caption']; ?></span></p>
                <?php endif; ?>
            </section>
        <?php endif; ?>



        <section id="location_section">
            <div class="container">
              <?php $contact_content  = get_field('contact_content'); ?>
              <?php $contact_subtitle  = get_field('contact_subtitle'); ?>
              <?php $contact_title  = get_field('contact_title'); ?>
                <h5><?php echo $contact_subtitle; ?></h5>
                <h2><?php echo $contact_title; ?></h2>

                <div class="programme_row programme_row_flip">
                    <div class="programme_col">
                        <div><?php echo $contact_content; ?></div>

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
