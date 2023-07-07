<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penyewaan Ruangan - Halaman Berdasarkan Kategori</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="category-body">
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

    <section id="category-section">
        <h1>Ruangan Workspace</h1>

        <main class="card-wrapper">
            <?php
                $nomor = 0;

                for ($i=1; $i <= 9 ; $i++) {
                    $nama_ruangan = 'Workspace';

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