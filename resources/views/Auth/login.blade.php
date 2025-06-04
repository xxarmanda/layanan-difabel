<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>MASUK</h1>
                <h2>Selamat datang di layanan informasi teman istimewa</h2>
                <hr />
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="@gmail.com" required />

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required />

                <div class="checkbox-container">
                    <input type="checkbox" name="terms" id="terms" required>
                    <label for="terms">Setuju dengan persyaratan</label>
                </div>

                <button type="submit">Masuk</button>
                <p>Tidak mempunyai akun? <a href="{{ route('register') }}">Mendaftar</a></p>
            </form>
        </div>
        <img src="{{ asset('img_login.png') }}" alt="Login Image" />
    </div>    
</body>
</html>