@extends('layouts.admin')

@section('title','Lokasi')
@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin="" />

<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js" integrity="sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==" crossorigin=""></script>

<link rel="stylesheet" href="{{ asset('assets/css/maps/screen.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/maps/MarkerCluster.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/maps/MarkerCluster.Default.css') }}">

<link rel="stylesheet" href="{{ asset('assets/js/maps/leaflet.markercluster-src.js') }}">
<style>

    #map {
        width: 100%;
        height: 500px;
        border: 1px solid #ccc;
    }

    /* .card-body {
        height: 800px;
    }

    .card-body #map {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    } */

</style>
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lokasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Lokasi</a></li>
              <li class="breadcrumb-item active">Create</li>
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
            <div class="card card-primary"> 
                <form action="{{ route('lokasi.update', ['lokasi' => $lokasi['id']]) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                    @csrf
                    @method('PUT')
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Provinsi</label>
                            <div class="col-sm-5">
                                <select name="id_provinsi" id="id_provinsi" onchange="provinsiFunction(this.value)" class="form-control" required>
                                    <option value=""></option>
                                    @foreach($provinsi as $key => $value)
                                        <option {{ $lokasi['id_provinsi'] == $value->id_provinsi ? 'selected' : '' }} value="{{ $value->id_provinsi }}">{{ $value->nama_provinsi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Kabupaten Kota</label>
                            <div class="col-sm-5">
                                <select name="id_kabupaten_kota" id="id_kabupaten_kota" class="form-control" required>
                                    <option value=""></option>
                                    @foreach($kabupaten_kota as $key => $value)
                                        @if ($lokasi['id_provinsi'] == $value->id_provinsi)
                                            <option {{ $lokasi['id_kabupaten_kota'] == $value->id_kabupaten_kota ? 'selected' : '' }} value="{{ $value->id_kabupaten_kota }}">{{ $value->nama_kabupaten_kota }}</option>
                                        @endif
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Detail Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" name="detail_lokasi" id="detail_lokasi" class="form-control" value="{{ $lokasi['detail_lokasi'] }}">
                            </div>
                        </div>

                        
                        <div>
                            <center>Klik lokasi pada map untuk menentukan lokasi Kegiatan</center>
                            <div id="map"></div>
                            <br/>
                        </div>
                       
                        

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Longitude</label>
                            <div class="col-sm-4">
                                <input type="text" name="longitude" id="longitude" class="form-control" value="{{ $lokasi['longitude'] }}" readonly required>
                            </div>

                            <label for="file" class="col-sm-2 col-form-label">Latitude</label>
                            <div class="col-sm-4">
                                <input type="text" name="latitude" id="latitude" class="form-control" value="{{ $lokasi['latitude'] }}" readonly required>
                            </div>
                        </div>

                    
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Dokumen</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image" class="form-control" id="file">
                                <input type="hidden" name="dokumen_old" value="{{ $lokasi['dokumen'] }}">
                                
                                <div class="alertSize" style="display: none;">File anda melebihi 5 MB</div>
                                <div class="alert" style="display: none;">File anda Bukan gambar, tidak dapat diupload</div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('lokasi.index') }}" class="btn btn-default">Batal</a>
                    </div>
                </form>
            </div>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection
  @php
   $mark_lat = $lokasi['latitude'];
   $mark_long = $lokasi['longitude'];   
  @endphp
  @section('js')
    <script>
        function provinsiFunction(value) {
            $.ajax({
                method: 'POST',
                url: '{{url("get-provinsi")}}',
                data:{
                        _token: '{{csrf_token()}}', 
                        id_provinsi: $('#id_provinsi').find(":selected").val(),
                },
                success: function(data) {
                    //console.log(data);
                    $("#id_kabupaten_kota").html(data);
                }

            });
        }

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

            maxZoom: 18,

            attribution: ''

        }),

        latlng = L.latLng('-7.6145', '110.7122');

        var map = L.map('map', {

            center: latlng,

            zoom: '8',

            layers: [tiles]

        });

        window.onload = (event) => {

            L.marker(['{{ $mark_lat }}', '{{ $mark_long }}']).addTo(map);

        };

        var markers = null;
        
        map.on('click', function(e) {

          if (markers !== null) {

              map.removeLayer(markers);

          }



          //e.removeLayer();

          document.getElementsByName("latitude")[0].value = e.latlng.lat;

          document.getElementsByName("longitude")[0].value = e.latlng.lng;

          //var kodeBarang = document.getElementById("kode_barang");

          //var title = kodeBarang.options[kodeBarang.selectedIndex].text;



          markers = L.marker(e.latlng).addTo(map);





        });
    </script>
  @endsection