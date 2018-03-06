

    <div class="container">
        <ul class="map_layers_nav">
            <li class="change_category_link active" data-category="transport" >Transports</li>
            <li class="change_category_link active" data-category="ecole" >Ecoles</li>
            <li class="change_category_link active" data-category="parc" >Parcs</li>
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
var icon_map_base = 'http://localhost:8888/chaletagate/wp-content/themes/chaletagate/img/icons/';
</script>
