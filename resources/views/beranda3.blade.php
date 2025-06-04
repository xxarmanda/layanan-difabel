<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Difabel</title>
    <link rel="stylesheet" href="{{ asset('css/beranda2_3.css') }}">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">BERANDA</a></div>
            <div class="menu">
                <ul>
                    <li><a href="logout"><img src="{{ asset('images/profil.png') }}" alt="">
                    <li><a href="#options">PILIHAN</a></li>
                    <li><a href="#options">LOKASI</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section id="home">
        <div class="content">
            <div class="icons">
                <div class="icon"><img src="{{ asset('images/logointematrans.png') }}" alt="">

            </div>
            <h1>INFORMASI TEMAN ISTIMEWA</h1>
            <p class="description"></p>
        </div>
    </section>

    <!-- Profile Section -->
    <section id="profile">
        <div class="profile-content">
            <h2><a href="https://www.indopos.co.id/ekonomi/2024/10/19/tuna-rungu-di-indramayu-diberi-pelatihan-barista-kopi-hingga-menginisiasi-kafe/">Tuna Rungu di Indramayu Diberi Pelatihan Barista Kopi hingga Menginisiasi Kafe</a></h2>
            <p>Di Kabupaten Indramayu, terdapat 1.792 penyandang disabilitas, termasuk ratusan tuna rungu. Sebanyak 119 orang dari mereka tergabung dalam komunitas Gerakan Kesejahteraan Tuna Rungu Indonesia (Gerkatin) yang aktif memperjuangkan hak dan akses setara. Menanggapi kebutuhan ini, PT Kilang Pertamina Internasional (KPI) Unit Balongan bekerja sama dengan SLBN Mutiara Hati meluncurkan program Perintis (Pemberdayaan Inklusi Teman Istimewa). Program ini bertujuan memberdayakan penyandang tuli melalui pelatihan vokasi dan keterampilan.</p>
            <p>Salah satu inisiatifnya adalah pendirian kafe Kopi Teman Istimewa, yang memberdayakan 8 barista tuli. Kafe ini berfungsi sebagai ruang inklusi, edukasi, dan ekonomi kreatif, serta memperkenalkan bahasa isyarat kepada masyarakat. Kolaborasi dengan content creator turut mempopulerkan kafe ini hingga dikenal di berbagai kota, seperti Jakarta, Cirebon, dan Bogor. Kafe ini juga menyelenggarakan acara edukatif, seperti Talkshow Al-Qur'an Bahasa Isyarat pertama di Indramayu.</p>
            <p>Program Perintis tidak hanya bergerak di sektor hilir tetapi juga menyasar pemberdayaan hulu, seperti budidaya kopi bersama Kelompok Wanita Tani (KWT) di Kuningan. Dampaknya, penyandang disabilitas kini memiliki penghasilan tetap lebih dari Rp2 juta per bulan, keterampilan yang diakui masyarakat, dan peningkatan rasa percaya diri. Kopi Teman Istimewa menjadi simbol ruang inklusi pertama di Indramayu yang sukses mempertemukan berbagai lapisan masyarakat dan mendorong kesetaraan.</p>
        </div>
    </section>

    <section class="help">
        <div class="help-text">
            <h2></h2>
            <p>
                Datangi kopi teman istimewa untuk informasi lebih lanjut
            </p>
            <button onclick="window.location.href='lokasi'">LIHAT LOKASI</button>
        </div>
    </section>

    <!-- Disability Options Section -->
    <section id="options">
        <h2>JENIS DISABILITAS</h2>
        <div class="disability-options">
            <button onclick="window.location.href='pilihan1.php'" class="btn"><img src="telinga.png" alt="">PILIH</button>
            <button onclick="window.location.href='pilihan2.php'" class="btn"><img src="tangan.PNG" alt="">PILIH</button>
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
