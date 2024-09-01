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
                        <h2>Visi Misi BKN</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!----------------------------------------------------------------------------->
 <!--Start Blog Page Three-->
        <section class="blog-details-page">
            <div class="container">

                <div class="row">

                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details-content">

                            <div class="single-blog-style1 single-blog-style1--instyle3">
                                {{-- <div class="img-holder">
                                    <img src="assets/images/blog/blog-details-img-1.jpg" alt="">
                                    <div class="date-box">
                                        <h6>16<br> <span>Nov</span></h6>
                                    </div>
                                </div> --}}
                                <div class="text-holder">
                                    <ul class="meta-info">
                                        {{-- <li>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href="#">by Admin</a>
                                        </li> --}}
                                        {{-- <li>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                            <a href="#">02 Comments</a>
                                        </li> --}}
                                    </ul>
                                    <div class="text-inner">
                                        <h3 class="blog-title">Visi</h3>
                                    </div>
                                    <div class="text">
                                        <?=$about['visi']?>
                                    </div>
                                    <br/>
                                    <div class="text-inner">
                                        <h3 class="blog-title">Misi</h3>
                                    </div>
                                    <div class="text">
                                        <?=$about['misi']?>
                                    </div>

                                    <br/>
                                    <div class="text-inner">
                                        <h3 class="blog-title">Tugas</h3>
                                    </div>
                                    <div class="text">
                                        <?=$about['tugas']?>
                                    </div>

                                     <br/>
                                    <div class="text-inner">
                                        <h3 class="blog-title">Fungsi</h3>
                                    </div>
                                    <div class="text">
                                        <?=$about['tugas']?>
                                    </div>

                                </div>
                            </div>

                            <div class="tag-social-share-box">
                                <div class="tag-box">
                                    {{-- <div class="title">
                                        <h3>Tags:</h3>
                                    </div>
                                    <ul class="tag-list">
                                        <li><a href="#">Ambulance</a></li>
                                        <li><a href="#">Health</a></li>
                                    </ul> --}}
                                </div>
                                <div class="post-social-share">
                                    <div class="post-social-share-links clearfix">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            
                        </div>
                    </div>

                    <!--Start Thm Sidebar Box-->
                    <div class="col-xl-4 col-lg-5">
                        <div class="thm-sidebar-box">
                            {{-- <div class="sidebar-search-box">
                                <form class="search-form" action="#">
                                    <input placeholder="Search" type="text">
                                    <button type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div> --}}

                            
                            @include('include.kategori_profil')

                            

                        </div>
                    </div>
                    <!--End Thm Sidebar Box-->


                </div>
            </div>
        </section>
        <!--End Blog Page Three-->



<section class="partner-area">
</section>



@endsection