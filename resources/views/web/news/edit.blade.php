@extends('layouts.admin')

@section('title','News')
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
            <h1>News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">News</a></li>
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
                <form action="{{ route('news.update', ['news' => $news['id']]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image" class="form-control" id="file">
                                <input type="hidden" name="gambar_old" value="{{ $news['gambar'] }}">
                                 <img style="width:30%;" src="{{ asset('img/news/'.$news['gambar']) }}" alt="" srcset="">
                                <div class="alertSize" style="display: none;">File anda melebihi 5 MB</div>
                                <div class="alert" style="display: none;">File anda Bukan gambar, tidak dapat diupload</div>
                            </div>
                        </div>
                       
                         <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul" id="judul" class="form-control" id="judul" value="{{ $news['judul'] }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Tanggal Posting</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $news['tanggal'] }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Isi Berita</label>
                            <div class="col-sm-10">
                               <textarea name="isi" id="summernote" required>
                                {{ $news['isi'] }}
                               </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-3">
                              <select name="status" class="form-control" required>
                                <option value="">-</option>
                                <option {{ $news['status'] == 'Sukses' ? 'selected':'' }} value="Sukses">Sukses</option>
                                <option {{ $news['status'] == 'Error Minor' ? 'selected':'' }} value="Error Minor">Error Minor</option>
                                <option {{ $news['status'] == 'Error Mayor' ? 'selected':'' }} value="Error Mayor">Error Mayor</option>
                              </select>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('news.index') }}" class="btn btn-default">Batal</a>
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