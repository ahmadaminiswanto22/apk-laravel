<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/') }}assets/img/apple-touch-icon.png" alt="Logo" height="45" width="auto">
        </a>
        <h4 class="logo me-auto"><a href="/">SMK Teratai Putih Global 2 Bekasi</a></h4>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="{{ Request::is('about*') ? 'active' : '' }}" href="/about">Berita Terbaru</a></li>
                        <li><a href="#">Sejarah Singkat</a></li>
                        <li><a href="#">Visi dan Misi</a></li>
                        <li><a href="#">Struktur Organisasi</a></li>
                        <li><a href="#">Profil Pimpinan</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Program Sekolah</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Program Kerja</a></li>
                        <li><a href="#">Hubungan Industri</a></li>
                        <li><a href="#">Teaching Factory</a></li>
                        <li><a href="#">Ekstrakulikuler</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Akuntansi dan Keuangan Lembaga</a></li>
                        <li><a href="#">Otomatisasi Tata Kelola Perkantoran</a></li>
                        <li><a href="#">Bisnis Daring dan Pemasaran</a></li>
                        <li><a href="#">Perbankan Keuangan Mikro</a></li>
                        <li><a href="#">Multimedia</a></li>
                        <li><a href="#">Rekayasa Perangakat Lunak</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Informasi Pendidikan</a></li>
                        <li><a href="#">Tenaga Pendidik</a></li>
                        <li><a href="#">Karyawan</a></li>
                        <li><a href="#">Siswa</a></li>
                        <li><a href="#">Alumni</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Galeri Vidio</a></li>
                        <li><a href="#">Galeri Foto</a></li>
                    </ul>
                </li>
                <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="/contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="panel/login.php" class="get-started-btn">PPDB</a>

    </div>
</header><!-- End Header -->