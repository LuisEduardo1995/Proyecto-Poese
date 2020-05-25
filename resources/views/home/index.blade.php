@extends("theme.$theme.layout1")
@section('titulo')
        POESE
@endsection

@section('titulocontenido')
    Ubicaciones Georeferenciada 
@endsection

@section('styles')
<style>
	#mapa{
		width:100%;
		height:95vh;
		top: 0 !important;
		position: absolute !important;
		z-index: 9990 !important;
		/*border: dashed 1px #666666;*/
	}
	
	#botonera{
		position: relative;
		text-align:center !important;
		/*margin-left: 10px;*/
		margin-top: 90vh;
		z-index: 9991 !important
	}
	
	.iframeMap{
		width:100%;
		height:100vh;
	}

</style>

@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/persona/index.js")}}" type="text/javascript"></script>
<script>
  L.mapbox.accessToken = 'pk.eyJ1IjoiamFnczA0IiwiYSI6ImNqbXYzaHZ6eTAydTczdm5rZzdwdGQ4eHQifQ.xEd9mG0dIP402sxM2iJkEg';


  var control = 0, lonLat = '', points = '', geojson = '', puncte1='' ;


  var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    osm = L.tileLayer(osmUrl, {maxZoom: 18, attribution: osmAttrib}),
    map = L.mapbox.map('mapa').setView([8.120019,-65.960536], 6);
  //, 'mapbox.streets-satellite'
  var layers = {
    Streets: L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'),
    Light: L.mapbox.styleLayer('mapbox://styles/mapbox/light-v10'),
    Satellite: L.mapbox.styleLayer('mapbox://styles/mapbox/satellite-streets-v9')
  };

  layers.Streets.addTo(map);
  L.control.layers(layers).addTo(map);

  var drawnItems = new L.FeatureGroup();
		map.addLayer(drawnItems);
		map.attributionControl.addAttribution('Elaborado por <a href="mailto:santafealcala@gmail.com">Tsu. Inf. Luis Santafe</a>');

		


</script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-12">
        @include('includes.mensaje')
        <div class="card card-primary">
          <div class="card">

            <div id="mapa"></div>
            <div id="botonera">
            </div>
            <div id="nav"></div>

          </div>
        </div>
    </div>
</div>
@endsection