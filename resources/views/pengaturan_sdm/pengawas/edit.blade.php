@extends('layouts.admin')

@section('title','Setup SDM Pengawas')

@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Setup SDM Pengawas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Setup SDM Pengawas</a></li>
              <li class="breadcrumb-item active">Update</li>
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
                <form action="{{ route('setup_sdm_pengawas.update', ['setup_sdm_pengawa' => $setup_sdm['id']]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Pengawas</label>
                            <div class="col-sm-5">
                                <select name="id_sdm" id="id_sdm" class="form-control" required>
                                    <option value=""></option>
                                    @foreach($pengawas as $key => $value)
                                        <option {{ $setup_sdm['id_sdm'] == $value->id ? 'selected':'' }} value="{{ $value->id }}">{{ $value->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        
                       
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Detail Lokasi</label>
                            <div class="col-sm-10">
                                <select name="id_lokasi" id="id_lokasi" class="form-control">
                                    <option value=""></option>
                                    @foreach($lokasi as $key => $value)
                                        <option {{ $setup_sdm['id_lokasi'] == $value->id ? 'selected':'' }} value="{{ $value->id }}">{{ $value->detail_lokasi.' Provinsi '.$value['nama_provinsi'].' Kabupaten Kota '.$value['nama_kabupaten_kota'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Dokumen</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image" class="form-control" id="file">
                                <input type="hidden" name="dokumen_old" value="{{ $setup_sdm['dokumen'] }}">
                                 <img style="width:30%;" src="{{ asset('img/news/'.$setup_sdm['dokumen']) }}" alt="" srcset="">
                                <div class="alertSize" style="display: none;">File anda melebihi 5 MB</div>
                                <div class="alert" style="display: none;">File anda Bukan gambar, tidak dapat diupload</div>
                            </div>
                        </div>

                        
                        
                        
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('setup_sdm_pengawas.index') }}" class="btn btn-default">Batal</a>
                    </div>
                </form>
            </div>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection
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
    </script>
  @endsection