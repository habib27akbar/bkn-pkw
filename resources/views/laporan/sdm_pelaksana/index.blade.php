@extends('layouts.admin')

@section('title','Lokasi')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ strtoupper(request()->segment(1)) }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{ strtoupper(request()->segment(1)) }}</a></li>
              <li class="breadcrumb-item active">Pengawas</li>
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
              
               
                <br/><br/>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>SDM Pelaksana</th>
                    <th>Detail Lokasi</th>
                    <th>Provinsi</th>
                    <th>Kabupaten Kota</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <td>Action</td>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($lokasi as $key => $value)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->nama }}</td>
                            <td>{{ $value->detail_lokasi }}</td>
                            <td>{{ $value->nama_provinsi }}</td>
                            <td>{{ $value->nama_kabupaten_kota }}</td>
                            <td>{{ $value->longitude }}</td>
                            <td>{{ $value->latitude }}</td>
                            <td>
                                <div class="btn-group">
                                    
                                    <a href="{{ route('sdm-pelaksana.edit', $value->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    
                                </div>
                            </td>
                            
                              
                          </tr>
                      @endforeach
                    </tbody>
                </table>

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
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
    $(function () {
        
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
        });
    });
    </script>
  @endsection