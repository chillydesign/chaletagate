<?php $image  = get_sub_field('image'); ?>
<?php if ($image): ?>
    <section class="section_big_picture" style="background-image:url(<?php echo $image['sizes']['large']; ?>);">
        <div class="white_bar"></div>
        <div class="white_bar white_bar_2"></div>
    </section>
<?php endif; ?>
