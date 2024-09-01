@extends('layouts.admin')

@section('title','Koordinator')
@section('css')
  
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Koordinator</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Koordinator</a></li>
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
                <form action="{{ route('koordinator.store') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama" id="nama" class="form-control" id="nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-7">
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">No. KTP</label>
                            <div class="col-sm-7">
                                <input type="text" name="no_ktp" id="no_ktp" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">No. HP</label>
                            <div class="col-sm-7">
                                <input type="text" name="no_hp" id="no_hp" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-7">
                                <input type="text" name="password_v" id="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Dokumen</label>
                            <div class="col-sm-7">
                                <input type="file" name="image" id="image" class="form-control" id="file">
                                <div class="alertSize" style="display: none;">File anda melebihi 5 MB</div>
                                <div class="alert" style="display: none;">File anda Bukan gambar, tidak dapat diupload</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-7">
                                <select name="status" class="form-control">
                                  <option value="1">Aktif</option>
                                  <option value="2">Non Aktif</option>
                                </select>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('koordinator.index') }}" class="btn btn-default">Batal</a>
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
    
  @endsection