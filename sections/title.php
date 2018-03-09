<?php $title =  get_sub_field('title'); ?>
<?php $subtitle =  get_sub_field('subtitle'); ?>

<div class="container">
    <?php if($subtitle): ?><h5><?php echo $subtitle; ?></h5><?php endif; ?>
    <?php if($title): ?><h2><?php echo $title; ?></h2><?php endif; ?>

</div>
