<?php $alignment  = get_sub_field('alignment'); ?>
<?php $row_class = ($alignment == 'left') ? 'programme_row_flip' : ''; ?>
<?php $image_class = ($alignment == 'left') ? 'image_parallelogram_flipped' : ''; ?>
<?php $content  = get_sub_field('content'); ?>
<?php $images  = get_sub_field('images'); ?>


<?php $tdu = get_template_directory_uri(); ?>

<div class="container">

    <div class="programme_row <?php echo $row_class; ?>">
        <div class="programme_col">
            <br><br><br><br><br><br><br><br>
            <?php echo $content; ?>
        </div>
        <div class="programme_col">
            <div class="image_parallelogram <?php echo $image_class; ?>">
                <div class="image_image_carousel">
                    <?php foreach ($images as $image)  : ?>
                        <div class="carousel-cell">
                            <div class="carousel_image image_image" style="background-image:url(<?php echo $image['sizes']['medium'] ; ?> );" ></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="shadow_1"></div>
                <div class="shadow_2"></div>
            </div>
        </div>

    </div>



</div>
