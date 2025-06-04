<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
    <link href="{{ asset('css/logout.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>PROFIL</h1>
            <h2>Profil Anda</h2>
            <hr>

            <div class="profil">
                <img src="{{ asset('profil.png') }}" alt="Foto Profil">
            </div>

            <hr>

            <!-- Tombol Logout (POST method) -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>

        <img src="{{ asset('img_login.png') }}" alt="Gambar Login">
    </div>
</body>
</html>
