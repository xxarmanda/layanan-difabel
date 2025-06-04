<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="{{ route('register.post') }}" method="POST">
                @csrf

                <h1>MENDAFTAR</h1>
                <h2>Selamat datang di layanan informasi teman istimewa</h2>
                <hr />

                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="@gmail.com" value="{{ old('email') }}">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="password_confirmation">Konfirmasi Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>

                <label>
                    <input type="checkbox" name="terms" required>
                    Saya setuju dengan persyaratan
                </label>
                @error('terms')
                    <div class="error">{{ $message }}</div>
                @enderror

                <button type="submit">Daftar</button>

                <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
            </form>
        </div>
        <img src="{{ asset('images/img_login.png') }}" alt="Login Image">
    </div>
</body>
</html>
