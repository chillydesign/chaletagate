<?php $image  = get_sub_field('image'); ?>
<?php if ($image): ?>
    <section class="section_big_picture" style="background-image:url(<?php echo $image['sizes']['large']; ?>);">
        <div class="white_bar"></div>
        <div class="white_bar white_bar_2"></div>
        <?php if ( $image['caption'] != '' ): ?>
            <p class="photo_caption"><span><?php echo  $image['caption']; ?></span></p>
        <?php endif; ?>
    </section>
<?php endif; ?>
