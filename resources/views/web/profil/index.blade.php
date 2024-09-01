@extends('layouts.admin')

@section('title','Visi Misi')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
  
@endsection

@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Visi Misi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Visi Misi</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
               @include('include.admin.alert')
               <form action="{{ route('about.update', ['about' => $about['id']]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Visi</label>
                              <textarea id="visi" name="visi">{{ $about['visi'] }}</textarea>
                          </div>

                          <div class="form-group">
                              <label>Misi</label>
                              <textarea id="misi" name="misi">
                                {{ $about['misi'] }}
                              </textarea>
                          </div>

                          <div class="form-group">
                              <label>Tugas</label>
                              <textarea id="tugas" name="tugas">
                                {{ $about['tugas'] }}
                              </textarea>
                          </div>

                          <div class="form-group">
                              <label>Fungsi</label>
                              <textarea id="fungsi" name="fungsi">
                                {{ $about['fungsi'] }}
                              </textarea>
                          </div>
                          <!-- /.form-group -->
                      </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
               
               
              </div>
            </div>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection

  @section('js')
  <!-- DataTables  & Plugins -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    
    <script>
    $(function () {
        
        $('#visi').summernote()
        $('#misi').summernote()
        $('#tugas').summernote()
        $('#fungsi').summernote()
    });
    </script>
  @endsection
  