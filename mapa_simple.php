<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">

    <title>Mapa simple</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css">

</head>


<body>
<h1>Mapa simple de OpenStreetMap con Open Layers</h1>
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
<div id="map" class="map"></div>
<script>
var map = new ol.Map({
layers: [new ol.layer.Tile({source: new ol.source.OSM()})],
target: 'map',
view: new ol.View({
projection: 'EPSG:4326',
center: [-67.623634,5.661702],
zoom: 16})});
</script>
</body>

</html>
