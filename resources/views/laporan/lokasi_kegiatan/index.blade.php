@extends('layouts.admin')
@section('title','Maps Lokasi Kegiatan')
@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js" integrity="sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==" crossorigin=""></script>
<link rel="stylesheet" href="{{ asset('assets/css/maps/screen.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/maps/MarkerCluster.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/maps/MarkerCluster.Default.css') }}">
<script src="{{ asset('assets/js/maps/leaflet.markercluster-src.js') }}"></script>
<style>
    #map {
        width: 100%;
        height: 600px;
        border: 1px solid #ccc;
    }
</style>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Maps Lokasi Kegiatan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Maps Lokasi Kegiatan</a></li>
          <li class="breadcrumb-item active">List</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"></h4>
          </div>
          <div class="card-body">
            <div id="map"></div>
            <select name="id_lokasi" style="margin-top:5px;" class="form-control" id="id_lokasi">
              <option value="">Select Location</option>
              @foreach($kegiatan as $key => $value)
                <option value="{{ $value->id }}" data-lat="{{ $value->latitude }}" data-lng="{{ $value->longitude }}">
                  {{ $value->nama_kegiatan.' Detail Lokasi : '.$value->detail_lokasi.' Provinsi '.$value['nama_provinsi'].' Kabupaten Kota '.$value['nama_kabupaten_kota'] }}
                </option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('js')
<script>
    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: ''
    });

    var latlng = L.latLng('-7.6145', '110.7122');

    var map = L.map('map', {
        center: latlng,
        zoom: 7,
        layers: [tiles]
    });

    var markers = L.markerClusterGroup();

    var addressPoints = [
        @foreach ($kegiatan as $a)
            ['{{ $a->latitude }}', '{{ $a->longitude }}', "{{ $a->nama_kegiatan }}"],
        @endforeach
    ];

    // addressPoints.forEach(function(point) {
    //     var marker = L.marker(L.latLng(point[0], point[1]))
    //         .bindPopup(point[2]);
    //     markers.addLayer(marker);
    // });

    console.log(addressPoints);

    for (var i = 0; i < addressPoints.length; i++) {

        var a = addressPoints[i];

        var title = a[2];

        var marker = L.marker(new L.LatLng(a[0], a[1]), {

            title: title

        });

        marker.bindPopup(title);

        markers.addLayer(marker);

    }

    map.addLayer(markers);

    document.getElementById('id_lokasi').addEventListener('change', function(e) {
        var selectedOption = e.target.options[e.target.selectedIndex];
        var lat = selectedOption.getAttribute('data-lat');
        var lng = selectedOption.getAttribute('data-lng');

        if (lat && lng) {
            map.setView([lat, lng], 13);
        }
    });
</script>
@endsection
