@extends('layouts.admin')

@section('title','Menu')
@section('css')
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
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
                <form action="{{ route('menu.update', ['menu' => $menu_edit->id]) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-4">
                                <select name="select_menu" onchange="selectMenu(this.value)" class="form-control">
                                    <option {{ $menu_edit->select_menu == 'menu'?'selected':'' }} value="menu">Menu</option>
                                    <option {{ $menu_edit->select_menu == 'sub_menu'?'selected':'' }} value="sub_menu">Sub Menu</option>
                                </select>
                            </div>
                        </div>
                        <div id="parent" style="{{ $menu_edit->select_menu == 'menu'?'display: none;':'' }}">
                            <div class="form-group row">
                                <label for="file" class="col-sm-2 col-form-label">Menu</label>
                                <div class="col-sm-4">
                                    <select name="parent_id" class="form-control">
                                        <option value=""></option>
                                        @foreach($menu as $key => $value)
                                            @if($value->select_menu == 'menu')
                                                <option {{ $menu_edit->parent_id == $value->id?'selected':'' }} value="{{ $value->id }}">{{ $value->nama_menu }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Nama Menu</label>
                            <div class="col-sm-4">
                                <input type="text" name="nama_menu" id="nama_menu" class="form-control" value="{{ $menu_edit->nama_menu }}" required>
                            </div>
                        </div>

                        
                        
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Icon Menu</label>
                            <div class="col-sm-4">
                                <input type="text" name="icon" id="icon" class="form-control" value="{{ $menu_edit->icon }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">URL</label>
                            <div class="col-sm-4">
                              <input type="text" name="url" id="url" class="form-control" required value="{{ $menu_edit->url }}">
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('menu.index') }}" class="btn btn-default">Batal</a>
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
    
    <script>
    function selectMenu(value) {
        if(value == 'menu'){
            $('#parent').hide();
        }else{
            $('#parent').show();
        }
    }
    </script>
  @endsection