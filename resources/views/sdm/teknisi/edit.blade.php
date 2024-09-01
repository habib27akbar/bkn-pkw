@extends('layouts.admin')

@section('title','Teknisi')
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
            <h1>Teknisi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Teknisi</a></li>
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
                <form action="{{ route('teknisi.update', ['teknisi' => $sdm['id']]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama" id="nama" class="form-control" id="nama" value="{{ $sdm['nama'] }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-7">
                                <input type="email" name="email" id="email" class="form-control" value="{{ $sdm['email'] }}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">No. KTP</label>
                            <div class="col-sm-7">
                                <input type="text" name="no_ktp" id="no_ktp" class="form-control" value="{{ $sdm['no_ktp'] }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">No. HP</label>
                            <div class="col-sm-7">
                                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $sdm['no_hp'] }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" name="username" id="username" class="form-control" value="{{ $sdm['username'] }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-7">
                                <input type="text" name="password_v" id="password" class="form-control" value="{{ $sdm['password_v'] }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Dokumen</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image" class="form-control" id="file">
                                <input type="hidden" name="dokumen_old" value="{{ $sdm['dokumen'] }}">
                                 <img style="width:30%;" src="{{ asset('img/news/'.$sdm['dokumen']) }}" alt="" srcset="">
                                <div class="alertSize" style="display: none;">File anda melebihi 5 MB</div>
                                <div class="alert" style="display: none;">File anda Bukan gambar, tidak dapat diupload</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-7">
                                <select name="status" class="form-control">
                                  <option {{ $sdm['status'] == 1 ? 'selected' :'' }} value="1">Aktif</option>
                                  <option {{ $sdm['status'] == 2 ? 'selected' :'' }} value="2">Non Aktif</option>
                                </select>
                            </div>
                        </div>
                       
                        
                        
                        
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('teknisi.index') }}" class="btn btn-default">Batal</a>
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