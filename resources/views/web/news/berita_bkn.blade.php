@extends('layouts.master')
@section('title','Home')

@section('css')
  <style>
    ul, li {
        list-style: decimal;
    
    }
  </style>
@endsection


@section('content')




<!--Start breadcrumb area paroller-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/images/slides/slide01.jpg') }});">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                        <h2>Berita BKN</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!----------------------------------------------------------------------------->
<!-----------------BERITA -------------------------------------------->
<section class="blog-style1-area">
    <div class="gray-bg"></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h3>Ragam Informasi</h3>
            </div>
            <h2>Berita BKN</h2>
        </div>
        <div class="row">
        @foreach($news as $key => $value)
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="img-holder">
                        <img src="{{ asset('img/news/'.$value['gambar']) }}" alt="" srcset="">
                    </div>
                    <div class="text-holder">
                        <div class="meta-info">
                            <p><span class="icon-calendar"></span> {{ $value['tanggal'] }}</p>
                        </div>
                        <h3><a href="{{ route('berita_bkn.edit',$value['id']) }}">{{ $value['judul'] }}</a></h3>
                        <p><?=substr($value['isi'], 0,400)?></p>
                        <div class="btn-box">
                            <a href="{{ route('berita_bkn.edit',$value['id']) }}">selanjutnya</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            

        </div>
    </div>
</section>
<!------------------------------------------------------------------------->



<section class="partner-area">
</section>



@endsection