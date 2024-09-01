<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pelaporan Penyelenggaraan Seleksi CASN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2a900;
        }
        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            overflow: hidden;
            width: 80%;
            max-width: 900px;
        }
        .left-section {
            background-image: url({{ asset('assets/images/slides/slide01.jpg') }}); /* Placeholder URL */
            background-size: cover;
            background-position: center;
            width: 50%;
            position: relative;
        }
        .left-section::before {
            content: "CASN";
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 48px;
            font-weight: bold;
            color: #f2a900;
        }
        .right-section {
            padding: 40px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .right-section h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #e62e00;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #cc2600;
        }
        .info {
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="left-section"></div>
            <div class="right-section">
                <h2>Sistem Pelaporan Penyelenggaraan Seleksi CASN</h2>
                <form action="{{ route('authenticate') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <button type="submit">Login</button>
                    </div>
                </form>
                <p class="info">Aplikasi ini hanya bisa beroperasi dengan baik pada Browser terkini. Pastikan browser Anda adalah browser terkini.</p>
            </div>
        </div>
    </div>
</body>
</html>
