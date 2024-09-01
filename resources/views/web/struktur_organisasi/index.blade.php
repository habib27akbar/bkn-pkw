@extends('layouts.admin')

@section('title','Event')
@section('css')
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Struktur Organisasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Struktur Organisasi</a></li>
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
                 @include('include.admin.alert') 
                <form action="{{ route('struktur_organisasi.update', ['struktur_organisasi' => $struktur_organisasi['id']]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                       
                        
                        
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image" class="form-control" id="file" required>
                                
                                 <img style="width:100%;" src="{{ asset('img/news/'.$struktur_organisasi['image']) }}" alt="" srcset="">
                                <div class="alertSize" style="display: none;">File anda melebihi 5 MB</div>
                                <div class="alert" style="display: none;">File anda Bukan gambar, tidak dapat diupload</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                       
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
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
    $(function () {
        
        $('#summernote').summernote()
       
    });
    </script>
  @endsection