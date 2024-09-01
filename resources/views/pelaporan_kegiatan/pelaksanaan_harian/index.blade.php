@extends('layouts.admin')

@section('title','Pelaksanaan Harian')
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
            <h1>Pelaksanaan Harian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pelaksanaan Harian</a></li>
              <li class="breadcrumb-item active">List</li>
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
              
               <a href="{{ route('pelaksanaan_harian.create') }}" class="btn btn-primary">Tambah</a>
                <br/><br/>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Unit</th>
                    <th>Size</th>
                    <th>Qty</th>
                    <th>Warna</th>
                    <th>Brand</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($barang as $key => $value)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->nama_barang }}</td>
                            <td>{{ $value->nama_kategori }}</td>
                            <td>{{ $value->nama_unit }}</td>
                            <td>{{ $value->size }}</td>
                            <td>{{ $value->qty_barang }}</td>
                            <td>{{ $value->warna }}</td>
                            <td>{{ $value->brand }}</td>
                            <td>
                                <div class="btn-group">
                                    <form method="POST" action="{{ route('pelaksanaan_harian.destroy', ['pelaksanaan_harian' => $value->id]) }}">
                                        <a href="{{ route('pelaksanaan_harian.edit', $value->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
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