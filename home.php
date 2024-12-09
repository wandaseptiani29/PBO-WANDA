<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shop</title>
    <style>
        /* Reset basic styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #cbd5e0; /* Biru tua lebih netral untuk latar belakang */
            color: #1a365d; /* Warna teks biru tua lebih gelap */
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #2c5282; /* Biru yang lebih gelap untuk header */
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .welcome-message {
            text-align: center;
            font-size: 24px;
            color: #2c5282; /* Warna biru gelap untuk pesan selamat datang */
            margin-top: 20px;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 30px;
        }

        /* Menambahkan gaya untuk "Produk Terbaru" agar teks berada di tengah */
        .produk h2 {
            text-align: center;
            font-size: 28px;
            margin-top: 30px;
            margin-bottom: 30px;
            color: #2c5282; /* Warna biru lebih gelap */
        }

        .produk-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            overflow: auto;
        }

        .produk-item {
            background-color: #edf2f7; /* Biru muda lebih gelap untuk latar produk */
            border: 1px solid #cbd5e0; /* Border biru gelap */
            padding: 15px;
            width: 300px;
            text-align: center;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .produk-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .produk-item h3 {
            font-size: 20px;
            margin: 10px 0;
        }

        .harga {
            font-size: 18px;
            color: #2c5282; /* Warna biru gelap untuk harga */
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
            background-color: #2c5282; /* Biru gelap untuk tombol */
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1a365d; /* Biru lebih gelap saat hover */
        }

        footer {
            background-color: #2c5282; /* Biru gelap untuk footer */
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Online shop</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="projek_wanda/index.php">Produk</a></li>
                <li><a href="costumer.php">costumer</a></li>
            </ul>
        </nav>
    </header>

    <section class="produk">
        <!-- Menambahkan teks Produk Terbaru di tengah dengan jarak -->
        <h2>Produk Terbaru</h2>

        <div class="produk-container">
            <!-- Produk 1 -->
            <div class="produk-item">
                <img src="taro.jpg" alt="Produk 1">
                <h3>Produk 1</h3>
                <p>Deskripsi singkat produk 1.</p>
                <p class="harga">Rp 100.000</p>
                <button>Tambah ke Keranjang</button>
            </div>
            <!-- Produk 2 -->
            <div class="produk-item">
                <img src="chiki2.jpg" alt="Produk 2">
                <h3>Produk 2</h3>
                <p>Deskripsi singkat produk 2.</p>
                <p class="harga">Rp 150.000</p>
                <button>Tambah ke Keranjang</button>
            </div>
            <!-- Produk 3 -->
            <div class="produk-item">
                <img src="chetos.jpg" alt="Produk 3">
                <h3>Produk 3</h3>
                <p>Deskripsi singkat produk 3.</p>
                <p class="harga">Rp 200.000</p>
                <button>Tambah ke Keranjang</button>
            </div>
            <!-- Produk 4 -->
            <div class="produk-item">
                <img src="bals.jpg" alt="Produk 4">
                <h3>Produk 4</h3>
                <p>Deskripsi singkat produk 4.</p>
                <p class="harga">Rp 120.000</p>
                <button>Tambah ke Keranjang</button>
            </div>
            

        </div>
    </section>

    <footer>
        <p>&copy; </p>
    </footer>
</body>
</html>
