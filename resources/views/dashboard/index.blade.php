@extends('layouts.admin')

@section('title','Menu')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  <style>
      .circle {
            width: 20px;         
            height: 20px;                   
            border-radius: 50%;
        }
        .col-2 {
            display: flex;
            align-items: center;
            margin-right: 20px; /* Adjust spacing between columns if needed */
            max-width: 9%;
        }
  </style>
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ ucfirst(request()->segment(1)) }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{ ucfirst(request()->segment(1)) }}</a></li>
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
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $lokasi }}</h3>
                                <p style="font-size: 23px;">LOKASI</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-map-marker"></i>
                            </div>
                                <p style="margin-left: 10px; font-size:12px;">Jumlah LOKASI pada kegiatan ini</p>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $pengawas }}</h3>

                                <p style="font-size: 23px;">PENGAWAS</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <p style="margin-left: 10px; font-size:12px;">Jumlah PENGAWAS pada kegiatan ini</p>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $koordinator }}</h3>

                                <p style="font-size: 23px;">KOORDINATOR</p>
                                
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                                <p style="margin-left: 10px; font-size:12px;">Jumlah KOORDINATOR pada kegiatan ini</p>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $teknisi }}</h3>

                                <p style="font-size: 23px;">TEKNISI</p>
                                
                            </div>
                            <div class="icon">
                                <i class="fas fa-wrench"></i>
                            </div>
                                <p style="margin-left: 10px; font-size:12px;">Jumlah TEKNISI pada kegiatan ini</p>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <h4 class="card-title">Berita Terkini</h4>
                
               

               
                
              </div>
              <div class="card-body">
                <div style="background-color:antiquewhite; height:80px;">
                  <font style="font-weight:800">KETERANGAN STATUS BERITA :</font>
                  <div class="row" style="margin-top: 10px">
                    <div class="col-2">
                      <div class="circle" style="background-color: green"></div> Sukses
                    </div>
                    <div class="col-2">
                      <div class="circle" style="background-color: yellow"></div> Error Minor
                    </div>
                    <div class="col-2">
                      <div class="circle" style="background-color: red"></div> Error Mayor
                    </div>
                  </div>
                </div>
                
               @include('include.admin.alert')
              
               <br/><br/>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Detail Berita</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($news as $key => $value)
                        @if ($value->status == 'Sukses')
                          
                        @endif
                        <tr>
                            
                            <td>{{ $loop->iteration }}</td>
                            <td><?=substr($value->isi, 0,400)?></td>
                            <td>
                              @if ($value->status == 'Sukses')
                                <div class="circle" style="background-color: green">

                                </div>
                              @elseif($value->status == 'Error Minor')
                                <div class="circle" style="background-color: yellow">

                                </div>
                              @else
                                <div class="circle" style="background-color: red">

                                </div>
                              @endif
                                
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