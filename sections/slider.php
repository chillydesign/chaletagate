<?php $images =  get_sub_field('images'); ?>
<?php $tdu = get_template_directory_uri(); ?>

<div class="container">
<div class="carousel">
    <?php foreach ($images as $image)  : ?>
        <div class="carousel-cell">
            <a data-featherlight="image"  title="<?php echo $image['title']; ?>"  class="gallery"  href="<?php echo  $image['sizes']['large']; ?>">
                <div class="carousel_image" style="background-image:url(<?php echo $image['sizes']['medium'] ; ?> );" ></div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
</div>
