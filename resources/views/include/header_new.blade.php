<header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +62 21-8093008</p></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-envelope"></i>support@.bkn.go.id</p></div>
                    </div>
                    <div class="col-sm-8 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                           
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/resources/logo.png') }}" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('visi_misi') }}">Visi dan Misi BKN</a></li>
                                <li><a href="{{ route('sejarah_bkn') }}">Sejarah BKN</a></li>
                                <li><a href="{{ route('struktur_organisasi') }}">Struktur Organisasi BKN</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Nama Menu</a></li>
                                <li><a href="#">Nama Menu</a></li>
                                <li><a href="#">Nama Menu</a></li>
                                <li><a href="#">Nama Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="services.html">Berita</a></li>
                        <li><a href="portfolio.html">Event</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hubungi Kami <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://www.lapor.go.id/instansi/badan-kepegawaian-negara" target="_blank">Lapor BKN</a></li>
                                <li><a href="https://support-siasn.bkn.go.id/" target="_blank">Helpdesk SIASN</a></li>
                                <li><a href="https://sites.google.com/view/surveiikmbkn?usp=sharing" target="_blank">Kepuasan Masyarakat</a></li>
                            </ul>
                        </li>
                                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->