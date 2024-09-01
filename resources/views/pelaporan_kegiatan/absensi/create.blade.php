@extends('layouts.admin')

@section('title','Absensi Harian')
@section('css')
  
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Absensi Harian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Absensi Harian</a></li>
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
                <form action="{{ route('absensi.store') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf


                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-4">
                               <input type="date" name="tanggal" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Karyawan</label>
                            <div class="col-sm-10">
                                <select name="id_sdm" class="form-control select2" required>
                                    <option value=""></option>
                                    @foreach($sdm as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    
                        

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Kehadiran</label>
                            <div class="col-sm-4">
                               <select name="kehadiran" class="form-control" required>
                                <option value="Hadir">Hadir</option>
                                <option value="Izin">Izin</option>
                                <option value="Alpha">Alpha</option>
                               </select>
                            </div>
                        </div>

                       
                        
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('absensi.index') }}" class="btn btn-default">Batal</a>
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
    
      $('.select2').select2();
  </script>
  @endsection