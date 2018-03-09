<?php $images =  get_sub_field('images'); ?>
<?php $tdu = get_template_directory_uri(); ?>

<div class="container">
<div class="carousel">
    <?php foreach ($images as $image)  : ?>
        <div class="carousel-cell">
            <img src="<?php echo $image['sizes']['small']; ?>"  srcset="<?php echo $image['sizes']['medium']; ?> 1000w, <?php echo $image['sizes']['large']; ?> 2000w"   sizes="100vw" alt="<?php echo $image['title']; ?>" />
        </div>
    <?php endforeach; ?>
</div>
</div>
