<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Difabel</title>
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">

</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">BERANDA</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#options">PILIHAN</a></li>
                    <li><a href="#profile">PROFIL</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section id="home">
        <div class="content">
            <div class="icons">
            <img src="{{ asset('images/logo_intema.png') }}" alt="Logo">
            </div>
            <h1>INFORMASI TEMAN ISTIMEWA</h1>
            <p class="description">Layanan informasi teman istimewa hadir sebagai upaya untuk menjawab kebutuhan saat ini. Dengan menyediakan platform yang inklusif, layanan ini diharapkan dapat menjadi jembatan antara penyandang disabilitas dan sumber daya yang tersedia.</p>
        </div>
    </section>

    <!-- Profile Section -->
    <section id="profile">
        <div class="profile-content">
            <h2>PROFIL PELAYANAN</h2>
            <p>Layanan ini bertujuan untuk memberikan akses yang lebih mudah dan cepat kepada informasi, hak-hak, dan program-program yang mendukung kemandirian dan kualitas hidup mereka. Model disabilitas sosial menunjukkan bahwa keterbatasan yang dihadapi bukan hanya dari karakteristik fisik atau mental, tetapi juga oleh hambatan sosial dan lingkungan.</p>
        </div>
    </section>

    <!-- Disability Options Section -->
    <section id="options">
        <h2>JENIS DISABILITAS</h2>
        <div class="disability-options">
        <button onclick="window.location.href='login'" class="btn"><img src="telinga.PNG" alt="">Tunarungu</button>
            <button onclick="window.location.href='login'" class="btn"><img src="tangan.PNG" alt="">Tunawicara</button>


        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="location">
                <h3>ALAMAT LOKASI</h3>
                <p><a href="https://maps.app.goo.gl/SC2JdFkbnnxiwnQh6">Jalan Istiqomah 21, Indramayu</a></p>
            </div>
            <div class="social-media">
                <h3>SOCIAL MEDIA</h3>
                <p><a href="https://www.instagram.com/temanistimewa.coffee?igsh=MXdlZHJ3aXdwaXdyNQ==">Instagram</a></p>
            </div>
            <div class="profile-link">
                <h3>PROFIL POLINDRA</h3>
                <p><a href="https://polindra.ac.id/">Website Polindra</a></p>
            </div>
        </div>
        <div class="copyright">
            &copy; 2024 Politeknik Negeri Indramayu. All Rights Reserved.
        </div>
    </footer>
</body>
</html>
