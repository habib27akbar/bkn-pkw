@extends('layouts.admin')

@section('title','Barang')
@section('css')
  
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Barang</a></li>
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
                <form action="{{ route('barang.update', ['barang' => $barang['id']]) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_barang" class="form-control" value="{{ $barang['nama_barang'] }}" required>
                            </div>
                        </div>

                    
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select name="kategori" class="form-control" required>
                                    <option value=""></option>
                                    @foreach($kategori as $key => $value)
                                        <option {{ $barang['kategori'] == $value->id ? 'selected':'' }} value="{{ $value->id }}">{{ $value->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Satuan</label>
                            <div class="col-sm-10">
                                <select name="unit" class="form-control" required>
                                    <option value=""></option>
                                    @foreach($unit as $key => $value)
                                        <option {{ $barang['unit'] == $value->id ? 'selected':'' }} value="{{ $value->id }}">{{ $value->nama_unit }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Qty</label>
                            <div class="col-sm-4">
                                <input type="number" name="qty" class="form-control" value="{{ $barang['qty'] }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Size</label>
                            <div class="col-sm-4">
                                <input type="text" name="size" class="form-control" value="{{ $barang['size'] }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Warna</label>
                            <div class="col-sm-4">
                                <input type="text" name="warna" class="form-control" value="{{ $barang['warna'] }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Brand</label>
                            <div class="col-sm-4">
                                <input type="text" name="brand" class="form-control" value="{{ $barang['brand'] }}">
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('barang.index') }}" class="btn btn-default">Batal</a>
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