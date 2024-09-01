@extends('layouts.admin')

@section('title','Satuan Barang')
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
            <h1>Satuan Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Satuan Barang</a></li>
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
                <form action="{{ route('unit.update', ['unit' => $unit['id']]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Nama Satuan</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama_unit" id="nama_unit" class="form-control" value="{{ $sdm['nama_unit'] }}" required>
                            </div>
                        </div>
                                               
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('unit.index') }}" class="btn btn-default">Batal</a>
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