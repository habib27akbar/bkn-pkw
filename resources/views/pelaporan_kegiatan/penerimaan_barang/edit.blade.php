@extends('layouts.admin')

@section('title','Penerimaan Barang')
@section('css')
  
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Penerimaan Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Penerimaan Barang</a></li>
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
                <form action="{{ route('penerimaan_barang.update', ['penerimaan_barang' => $pelaporan_kegiatan['id']]) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <select name="id_barang" class="form-control" required>
                                    <option value=""></option>
                                    @foreach($barang as $key => $value)
                                        <option {{ $pelaporan_kegiatan['id_barang'] == $value->id ? 'selected' :'' }} value="{{ $value->id }}">{{ $value->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    
                        

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Qty</label>
                            <div class="col-sm-4">
                                <input type="number" name="qty_barang" class="form-control" value="{{ $pelaporan_kegiatan['qty_barang'] }}">
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('penerimaan_barang.index') }}" class="btn btn-default">Batal</a>
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