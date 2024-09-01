	<!DOCTYPE html>
	<html lang="en">

	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>.:: Sistem Pelaporan Penyelenggaraan Seleksi CASN ::.</title>

	    <link rel="stylesheet" type="text/css" href="{{asset('login/css/bootstrap.min.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/fontawesome-all.min.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/iofrm-style.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/casn-theme01.css') }}">
		<!-- rev -->
	</head>

	<body>

	    <div class="form-body" class="container-fluid">
	        <div class="row">
	            <div class="img-holder">
	                <div class="bg"></div>

	            </div>

	            <div class="form-holder">
	                <div class="form-content">
	                    <div class="form-items">
	                        <div class="website-logo-inside">
	                            <a href="#">
	                                <div class="logo">
	                                    <img class="logo-size" src="{{ asset('login/images/logo_casn.png') }}" alt="">
	                                </div>
	                            </a>
	                        </div>

	                        <h3>Sistem Pelaporan Penyelenggaraan Seleksi CASN</h3>
	                        <p>Silakan login sesuai Username dan Password Anda.</p>
	                        <form action="{{ route('authenticate') }}" method="POST">
								 @csrf
	                            <input class="form-control" type="text" name="username" placeholder="Masukkan Username" required>
	                            <input class="form-control" type="password" name="password" placeholder="Masukkan Password" required>
	                            <div class="form-button">
	                                <button id="submit" type="submit" class="ibtn">LOGIN</button>
	                            </div>

	                            <div class="other-links">
	                                <span>Aplikasi ini hanya beroperasi dengan baik pada Browser terkini. Pastikan Browser Anda adalah browser terkini.</span>
	                            </div>

	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <script type="text/javascript" src="{{ asset('login/js/jquery.min.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('login/js/popper.min.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('login/js/bootstrap.min.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

	</body>

	</html>