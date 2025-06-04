<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan 1</title>
    <link rel="stylesheet" href="{{ asset('css/pilihan2.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href="{{ route('beranda2') }}">BERANDA</a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" style="background: none; border: none; cursor: pointer;">
                                <img src="{{ asset('/profil.png') }}" alt="logout">
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Postingan -->
    @if($posts->count())
        @foreach($posts as $post)
            <section class="content">
                <div class="image">
                    <img src="{{ asset('uploads/' . $post->image) }}" alt="Gambar {{ $post->title }}">
                </div>
                <div class="text">
                    <h1>
                        <a href="{{ $post->url }}" target="_blank">{{ $post->title }}</a>
                    </h1>
                    <p>{!! nl2br(e($post->text)) !!}</p>
                </div>
            </section>
        @endforeach
    @else
        <p style="text-align: center; margin-top: 50px;">Tidak ada postingan yang tersedia.</p>
    @endif

    <!-- Section Bantuan -->
    <section class="help">
        <div class="help-text">
            <h2>Bantuan</h2>
            <p>Jika Anda membutuhkan bantuan, silakan hubungi kami.</p>
            <button onclick="window.location.href='https://wa.me/087777946914'">Hubungi Kami</button>
        </div>
        <div class="buku">
            <a href="{{ url('ebook') }}">
                <img src="{{ asset('/ebook1.jpeg') }}" alt="Ebook">
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="location">
                <h3>ALAMAT LOKASI</h3>
                <p><a href="https://maps.app.goo.gl/SC2JdFkbnnxiwnQh6" target="_blank">Jalan Istiqomah 21, Indramayu</a></p>
            </div>
            <div class="social-media">
                <h3>SOCIAL MEDIA</h3>
                <p><a href="https://www.instagram.com/temanistimewa.coffee/?igsh=MXdlZHJ3aXdwaXdyNQ%3D%3D#">Instagram</a></p>
            </div>
            <div class="profile-link">
                <h3>PROFIL POLINDRA</h3>
                <p><a href="https://polindra.ac.id/" target="_blank">Website Polindra</a></p>
            </div>
        </div>
        <div class="copyright">
            &copy; {{ date('Y') }} Politeknik Negeri Indramayu. All Rights Reserved.
        </div>
    </footer>

</body>
</html>
