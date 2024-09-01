<header class="main-header header-style-one">
    <div class="header-top">
        <div class="auto-container">
            <div class="outer-box">

                <!--------------LOGO WEB ----------------------------->
                <div class="header-top__left">
                    <div class="main-logo-box">
                        <a href="index.html"><img src="{{ asset('assets/images/resources/logo.png') }}" alt="Awesome Logo" title=""></a>
                    </div>
                </div>
                <!----------------------------------------------------------->



                <!----------------------------------------------------------->
                <div class="header-top__right">
                    <div class="header-contact-info-style1">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <p>Telepon</p>
                                    <h5><a href="tel:021-8093008">021-8093008</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>Email</p>
                                    <h5><a href="mailto:support@.bkn.go.id">support@.bkn.go.id</a></h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------->



    <div class="header">
        <div class="auto-container">
            <div class="outer-box">

                <div class="header-left">
                    <div class="nav-outer style1 clearfix">

                        <!--------------------------------------------------------------------------------------->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!--------------------------------------------------------------------------------------->

                        <!----------------MENU WEBSITE ------------------------------------------------------------------->
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">

                                    <li>
                                        <a href="{{ route('home') }}">Beranda</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#">Profil</a>
                                        <ul>
                                            <li><a href="{{ route('visi_misi') }}">Visi dan Misi BKN</a></li>
                                            <li><a href="{{ route('sejarah_bkn') }}">Sejarah BKN</a></li>
                                            <li><a href="{{ route('struktur_organisasi') }}">Struktur Organisasi BKN</a></li>
                                            {{-- <li><a href="#">Profil Pejabat Pimpinan Tinggi BKN</a></li> --}}
                                        </ul>
                                    </li>

                                    {{-- <li>
                                        <a href="#">Help</a>
                                    </li> --}}

                                    <li class="dropdown"><a href="#">Laporan</a>
                                        <ul>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                        </ul>
                                    </li>

                                    {{-- <li class="dropdown"><a href="#">Profil</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-xl-6 column">
                                                    <ul>
                                                        <li><a href="#">Nama Menu</a></li>
                                                        <li><a href="#">Nama Menu</a></li>
                                                        <li><a href="#">Nama Menu</a></li>
                                                        <li><a href="#">Nama Menu</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-6 column">
                                                    <ul>
                                                        <li><a href="#">Nama Menu</a></li>
                                                        <li><a href="#">Nama Menu</a></li>
                                                        <li><a href="#">Nama Menu</a></li>
                                                        <li><a href="#">Nama Menu</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </li> --}}
                                    {{-- <li class="dropdown"><a href="#">Publikasi</a>
                                        <ul>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                        </ul>
                                    </li>


                                    <li class="dropdown"><a href="#">Layanan</a>
                                        <ul>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Regulasi</a>
                                        <ul>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                            <li><a href="#">Nama Menu</a></li>
                                        </ul>
                                    </li> --}}

                                    {{-- <li><a href="#">PPID BKN</a></li> --}}
                                    
                                    <li><a href="{{ route('berita_bkn') }}">Berita</a></li>
                                    <li><a href="{{ route('event_bkn') }}">Event</a></li>
                                    <li class="dropdown">
                                        <a href="#">Hubungi Kami</a>
                                        <ul>
                                            <li><a href="https://www.lapor.go.id/instansi/badan-kepegawaian-negara" target="_blank">Lapor BKN</a></li>
                                            <li><a href="https://support-siasn.bkn.go.id/" target="_blank">Helpdesk SIASN</a></li>
                                            <li><a href="https://sites.google.com/view/surveiikmbkn?usp=sharing" target="_blank">Survei Kepuasan Masyarakat</a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!--------------------------------------------------------------------------------------->


                    </div>
                </div>

                <!-------------- SOSMED --------------------------------------------------------------------->
                <div class="header-right">
                    <div class="header-social-link">
                        <ul class="clearfix">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--------------------------------------------------------------------------------------->

            </div>
        </div>
    </div>


    <!--------------------------------------------------------------------------------------->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <div class="logo float-left">
                    <a href="index.html" class="img-responsive">
                        <img src="{{ asset('assets/images/resources/sticky-logo.png') }}" alt="" title="">
                    </a>
                </div>
                <div class="right-col float-right">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------->

    <!----------------- MOBILE MENU ------------------------------------------------------------------->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/resources/mobilemenu-logo.png') }}" alt="" title=""></a></div>
            <div class="menu-outer">
            </div>

            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!--------------------------------------------------------------------------------------->

</header>