

<div class="container">
    <div style="text-align:center">
        <h5 >Blah blah</h5>
        <h2 >Activities</h2>
    </div>
    <div class="programme_row  ">

        <?php $rr = 0; while ( have_rows('columns') ) : the_row(); ?>
            <?php $title =  get_sub_field('title'); ?>
            <?php $image =  get_sub_field('image'); ?>
            <?php $class =  ( $rr % 2 == 0) ? 'image_parallelogram_flipped' : ''; ?>
            <div class="programme_col">

                <div class="image_parallelogram <?php echo $class; ?>">
                    <div class="image_image" style="background-image:url(<?php echo $image['sizes']['medium']; ?>)"></div>
                    <div class="shadow_1"></div>
                    <div class="shadow_2"></div>
                </div>
                <div class="programme_col_content">
                    <?php if ($title): ?> <h3><?php echo $title; ?></h3>  <?php endif; ?>
                    <?php echo get_sub_field('content'); ?>
                </div>
            </div>
            <?php $rr++; endwhile; ?>
        </div> <!-- END OF programme_row -->
    </div><!--  END OF CONTAINER -->
