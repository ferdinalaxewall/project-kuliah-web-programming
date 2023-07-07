<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penyewaan Ruangan - Halaman Utama</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="home-body">
    <nav>
        <a href="./index.php" class="navbar-logo">Our<span>Space</span></a>

        <ul>
            <li>
                <a href="./kategori.php">Workspace</a>
            </li>
            <li>
                <a href="./kategori.php">Virtual Office</a>
            </li>
            <li>
                <a href="./kategori.php">Meeting & Event</a>
            </li>
            <li>
                <a href="./kategori.php">Paket Meeting</a>
            </li>
            <li>
                <a href="./login.php">Akun Saya</a>
            </li>
        </ul>
    </nav>

    <section id="hero-section">
        <h1>OurSpace adalah Ruang Milik Kita Bersama.</h1>
        <p>Artinya, siapapun berhak menggunakan tempat ini sebagai sarana penunjang produktifitas. Ruang yang kami tawarkan memiliki design yang modern dilengkapi dengan Fasilitas Penunjang lainnya.</p>
        <a href="">Cari Ruangan Sesuai Kebutuhan Anda</a>
    </section>

    <section id="room-recommendation-section">
        <h1>Rekomendasi Ruangan Untuk Kebutuhan</h1>

        <?php
            $nomor = 0;
        ?>

        <main class="card-wrapper">
            <?php
                for ($i=1; $i <= 9 ; $i++) {
                    if($i % 2 == 0){
                        $nama_ruangan = 'Meeting';
                    }else{
                        $nama_ruangan = 'Workspace';
                    }

                    if($i == 7){
                        $nomor = 0;
                    }

                    $nomor++;

            ?>
            
            <article class="card">
                <div class="card-top-wrapper">
                    <div class="card-category">
                        <h3><?php echo $nama_ruangan ?></h3>
                    </div>
                    
                    <button class="">
                        Tambahkan ke Koleksi
                    </button>
                </div>

                <div class="card-image">
                    <img src="./image/image-<?php echo $nomor ?>.png" alt="Gambar <?php echo $nama_ruangan ?> 1">
                </div>

                <div class="card-body">
                    <h2 class="card-title"><?php echo $nama_ruangan ?> Room <?php echo $i ?></h2>
                    <div class="card-details-group">
                        <p>5</p>
                        <p>Rp. <span>75.000</span> / Jam</p>
                    </div>
                </div>

                <a href="./detail-ruangan.php">Lihat Ruangan</a>
            </article>

            <?php
                }
            ?>
        </main>
    </section>

    <section id="service-section">
        <h1>Apa Keunggulan Kami?</h1>
        <div class="service-box">
            <img src="icon/secure-transaction.png" alt="">
            <h5>Transaksi Online Mudah & Terpercaya</h5>
        </div>
        <div class="service-box">
            <img src="icon/24-7-icon.png" alt="">
            <h5>Realtime Booking 24/7</h5>
        </div>
        <div class="service-box">
            <img src="icon/drink-and-food-icon.png" alt="">
            <h5>Pesan Makanan & Fasilitas Online</h5>
        </div>
    </section>

    <section id="other-room-section">
        <h1>Pilihan Ruangan Lainnya Berdasarkan Kategori</h1>

        <main class="other-room-card-wrapper">
            <article class="other-room-card">
                <div class="other-room-image">
                    <img src="image/image-1.png" alt="">
                </div>

                <div class="other-room-content">
                    <h3 class="other-room-title">Ruangan Workspace</h3>
                    <h5 class="other-room-subtitle">8 Ruangan</h5>
                    <a href="category.php" class="other-room-button">Lihat Ruangan Workspace</a>
                </div>
            </article>
            <article class="other-room-card">
                <div class="other-room-image">
                    <img src="image/image-2.png" alt="">
                </div>

                <div class="other-room-content">
                    <h3 class="other-room-title">Ruangan Virtual Office</h3>
                    <h5 class="other-room-subtitle">5 Ruangan</h5>
                    <a href="category.php" class="other-room-button">Lihat Ruangan Virtual Office</a>
                </div>
            </article>
            <article class="other-room-card">
                <div class="other-room-image">
                    <img src="image/image-3.png" alt="">
                </div>

                <div class="other-room-content">
                    <h3 class="other-room-title">Ruangan Meeting</h3>
                    <h5 class="other-room-subtitle">2 Ruangan</h5>
                    <a href="category.php" class="other-room-button">Lihat Ruangan Meeting</a>
                </div>
            </article>
            <article class="other-room-card">
                <div class="other-room-image">
                    <img src="image/image-4.png" alt="">
                </div>

                <div class="other-room-content">
                    <h3 class="other-room-title">Ruangan Event</h3>
                    <h5 class="other-room-subtitle">4 Ruangan</h5>
                    <a href="category.php" class="other-room-button">Lihat Ruangan Event</a>
                </div>
            </article>
        </main>
    </section>

    <footer class="footer">
        <a href="./index.php" class="footer-logo">Our<span>Space</span></a>
        <ul style="margin: 20px 0;">
            <li>
                <a href="./kategori.php">Workspace</a>
            </li>
            <li>
                <a href="./kategori.php">Virtual Office</a>
            </li>
            <li>
                <a href="./kategori.php">Meeting & Event</a>
            </li>
            <li>
                <a href="./kategori.php">Paket Meeting</a>
            </li>
            <li>
                <a href="./login.php">Akun Saya</a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="">
                    <img src="icon/ig.png" alt="" height="30">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="icon/fb.jpg" alt="" height="30">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="icon/tiktok.jpg" alt="" height="30">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="icon/gmail.png" alt="" height="30">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="icon/maps.png" alt="" height="30">
                </a>
            </li>
        </ul>
    </footer>

    <div class="copyright">
        <p>Copyright &copy; 2023. All Right Reserved.</p>
    </div>
</body>
</html>