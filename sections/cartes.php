<?php $locations = get_sub_field('points_gmap'); ?>
<?php $tdu = get_template_directory_uri(); ?>
<?php if(ICL_LANGUAGE_CODE == 'en'){
  $amenites = 'Amenities';
  $hivernales = 'Winter activities';
  $estivales = 'Summer activities';
} elseif(ICL_LANGUAGE_CODE == 'es'){
  $amenites = 'Servicios';
  $hivernales = 'Actividades Invernales';
  $estivales = 'Actividades Estivales';
} else {
  $amenites = 'Aménités';
  $hivernales = 'Activités hivernales';
  $estivales = 'Activités estivales';
} ?>
    <ul class="map_layers_nav">
        <li class="change_category_link" data-category="amenites"><?php echo $amenites; ?></li>
        <li class="change_category_link" data-category="winter"><?php echo $hivernales; ?></li>
        <li class="change_category_link" data-category="summer"><?php echo $estivales; ?></li>
    </ul>

<div class="globalmap ">
    <div id="map"></div>
    <div class=" mapsidebar">
        <div id="markercontent"></div>
    </div>
</div>
<div class="container">
<ul id="location_list">
<?php $markerid = 0; ?>
<?php foreach ($locations as $location) : ?>
    <li class="move_map_link" data-category="<?php echo $location['category']; ?>" data-markerid="map_<?php echo $markerid; ?>" >
        <img src="<?php echo $tdu; ?>/img/markers/<?php echo $location['category']; ?>.png" alt="" />
        <?php echo $location['title']; ?>
    </li>
    <?php $markerid++; ?>
<?php endforeach; ?>

</ul>
</div>

<script>

var multi_locations = <?php echo map_location_to_json( $locations ); ?>;
var icon_map_base = '<?php echo $tdu; ?>/img/markers/';
</script>
