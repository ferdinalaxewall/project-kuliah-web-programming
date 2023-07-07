<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penyewaan Ruangan - Halaman Detail Room</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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

    <section id="detail-room-section">
        <article>
            <div>
                <img src="./image/image-1.png" alt="" height="auto">
            </div>

            <h1>Ruang Workspace 1</h1>
            <img src="./image/image-2.png" alt="" height="200">

            <div>
                <h1>Deskripsi</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam similique dignissimos quae aperiam adipisci modi nihil, ullam voluptatem mollitia quasi enim recusandae accusamus qui facilis commodi libero possimus aliquid! Eum vero id numquam, nulla dignissimos non unde. Fugiat voluptas commodi dolorum ipsa dolores? Sed, quis! Id consequatur unde tempore, odio modi nisi a molestias esse aut consectetur? Dolorem impedit recusandae iusto iste fugiat, commodi enim sit animi aliquam placeat quibusdam consequuntur dolorum earum eum? Dicta, minus eligendi! Impedit officia aliquam assumenda necessitatibus est natus, atque voluptate nostrum ipsum cum obcaecati labore sapiente eligendi eos fugiat eius odit consequuntur amet soluta.</p>
            </div>
            <div>
                <h1>Ukuran & Kapasitas</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam similique dignissimos quae aperiam adipisci modi nihil, ullam voluptatem mollitia quasi enim recusandae accusamus qui facilis commodi libero possimus aliquid! Eum vero id numquam, nulla dignissimos non unde. Fugiat voluptas commodi dolorum ipsa dolores? Sed, quis! Id consequatur unde tempore, odio modi nisi a molestias esse aut consectetur? Dolorem impedit recusandae iusto iste fugiat, commodi enim sit animi aliquam placeat quibusdam consequuntur dolorum earum eum? Dicta, minus eligendi! Impedit officia aliquam assumenda necessitatibus est natus, atque voluptate nostrum ipsum cum obcaecati labore sapiente eligendi eos fugiat eius odit consequuntur amet soluta.</p>
            </div>
            <div>
                <h1>Fasilitas</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam similique dignissimos quae aperiam adipisci modi nihil, ullam voluptatem mollitia quasi enim recusandae accusamus qui facilis commodi libero possimus aliquid! Eum vero id numquam, nulla dignissimos non unde. Fugiat voluptas commodi dolorum ipsa dolores? Sed, quis! Id consequatur unde tempore, odio modi nisi a molestias esse aut consectetur? Dolorem impedit recusandae iusto iste fugiat, commodi enim sit animi aliquam placeat quibusdam consequuntur dolorum earum eum? Dicta, minus eligendi! Impedit officia aliquam assumenda necessitatibus est natus, atque voluptate nostrum ipsum cum obcaecati labore sapiente eligendi eos fugiat eius odit consequuntur amet soluta.</p>
            </div>

            <div>
                <h1>Pesan Ruangan</h1>
                <form action="" method="POST">
                    <h1>Harga: Rp 5.500 / Jam</h1>
                    <div>
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" required>
                    </div>

                    <div>
                        <label for="waktu">Waktu</label>
                        <input type="date" name="waktu" id="waktu" required>
                    </div>

                    <div>
                        <label for="">Lama Penyewaan</label>
                        <div>
                            <input type="radio" name="lama_penyewaan" id="lama_penyewaan_1">
                            <label for="lama_penyewaan_1">4 Jam (Rp. 22.000)</label>
                        </div>
                        <div>
                            <input type="radio" name="lama_penyewaan" id="lama_penyewaan_2">
                            <label for="lama_penyewaan_2">8 Jam (Rp. 44.000)</label>
                        </div>
                    </div>

                    <button type="submit">Pesan Ruangan Ini</button>
                </form>
            </div>
        </article>
    </section>

    <footer class="footer">
        <a href="./index.php" class="footer-logo">Our<span>Space</span></a>
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

        <ul>
            <li>
                <a href="">
                    <img src="icon/ig.png" alt="" height="30">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="icon/fb.png" alt="" height="30">
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