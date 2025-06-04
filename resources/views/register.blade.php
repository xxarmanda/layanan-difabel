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
            <form action="{{ route('register.store') }}" method="POST">
                @csrf

                <h1>MENDAFTAR</h1>
                <h2>Selamat datang di layanan informasi teman istimewa</h2>
                <hr />

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

                <label>
                    <input type="checkbox" name="terms"> Saya setuju dengan persyaratan
                </label>
                @error('terms')
                    <div class="error">{{ $message }}</div>
                @enderror

                <button type="submit">Register</button>
            </form>
        </div>
        <img src="{{ asset('images/img_login.png') }}" alt="">
    </div>
</body>
</html>