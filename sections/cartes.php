

    <div class="container">
        <ul class="map_layers_nav">
            <li class="change_category_link" data-category="residence">Résidence</li>
            <li class="change_category_link" data-category="amenites">Aménités </li>
            <li class="change_category_link" data-category="winter">Activités hivernales</li>
            <li class="change_category_link" data-category="summer">Activités estivales</li>
        </ul>
    </div>
<div class="globalmap ">
    <div id="map"></div>
    <div class=" mapsidebar">

        <div id="markercontent"></div>

    </div>
</div>


<script>

<?php $locations = get_sub_field('points_gmap'); ?>
var multi_locations = <?php echo map_location_to_json( $locations ); ?>;
var icon_map_base = 'https://webfactor.ch/projets/agate17/wp-content/themes/chaletagate/img/icons/';
</script>
