@extends('layouts.master')
@section('title','Home')
@section('content')




    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url({{ asset('assets/images/slides/slide01.jpg') }})">
                    <div class="container">
                        
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url({{ asset('assets/images/slides/slide02.jpg') }})">
                    <div class="container">
                        
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url({{ asset('assets/images/slides/slide03.jpg') }})">
                    <div class="container">
                        
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
<?php 
if(false){
?>

<section class="main-slider style1">
    <div class="slider-box">
        <div class="slider-contact-info-box" data-aos="slide-left" data-aos-easing="linear" data-aos-duration="1500">
        </div>


        <!-- SLIDER ------------------------------------ -->
        <div class="banner-carousel owl-theme owl-carousel">

            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('assets/images/slides/slide01.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content">
                        <div class="big-title">
                            <h2>Judul<br> SubJudul</h2>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one" href="index.html">
                                <span class="txt">selanjutnya<i class="icon-refresh arrow"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('assets/images/slides/slide02.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content">
                        <div class="big-title">
                            <h2>Judul<br> SubJudul</h2>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one" href="index.html">
                                <span class="txt">selanjutnya<i class="icon-refresh arrow"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('assets/images/slides/slide03.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content">
                        <div class="big-title">
                            <h2>Judul<br> SubJudul</h2>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one" href="index.html">
                                <span class="txt">selanjutnya<i class="icon-refresh arrow"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('assets/images/slides/slide04.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content">
                        <div class="big-title">
                            <h2>Judul<br> SubJudul</h2>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one" href="index.html">
                                <span class="txt">selanjutnya<i class="icon-refresh arrow"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!----------------------------------------------------------------------------->
<?php }?>

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h3>Selamat Datang di</h3>
                <h2>Badan Kepegawaian Negara (BKN RI)</h2>
                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec metus et est facilisis ornare ac non dolor. Cras finibus felis eget nulla fringilla, ut bibendum lorem pulvinar. Sed consectetur placerat erat et mollis. Sed eget rutrum libero. Suspendisse dignissim eros et convallis aliquam. Integer nulla elit, fermentum id placerat nec, congue et sapien. Aliquam vitae leo sollicitudin, suscipit augue quis, condimentum nunc. Nunc auctor interdum massa, eu tempor eros lobortis id. Phasellus justo elit, congue sed laoreet at, dapibus vel eros. </p>
            </div>

            
        </div><!--/.container-->
    </section><!--/#feature-->



    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Ragam Informasi</h2>
                
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/images/blog/news01.jpg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Judul Berita</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/images/blog/news02.jpg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Judul Berita</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/images/blog/news03.jpg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Judul Berita</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                                     
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->







@endsection