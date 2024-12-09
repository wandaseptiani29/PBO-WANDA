<?php
require_once 'Barang.php';
require_once 'BarangManager.php';

$barangManager = new BarangManager();

// Menangani form tambah barang
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $barangManager->tambahBarang($nama, $harga, $stok);
    header('Location: index.php'); // Redirect untuk mencegah resubmission
    exit;
}

// Menangani penghapusan barang
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $barangManager->hapusBarang($id);
    header('Location: index.php'); // Redirect setelah menghapus
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencatatan Barang</title>
    <style>
        /* Reset basic styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e0e7ff; /* Latar belakang biru muda */
            color: #2a4365; /* Warna teks gelap biru tua */
            line-height: 1.6;
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

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
            color: #2b6cb0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        form {
            background-color: #f0f4f8; /* Warna latar belakang form */
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            font-size: 16px;
            color: #2b6cb0;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #cbd5e0;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #3182ce; /* Biru lebih terang untuk tombol */
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2b6cb0; /* Warna biru tua saat hover */
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #cbd5e0;
        }

        table th {
            background-color: #2b6cb0;
            color: white;
        }

        .btn-delete {
            padding: 8px 15px;
            background-color: #e53e3e; /* Merah untuk tombol hapus */
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-delete:hover {
            background-color: #c53030; /* Merah lebih gelap saat hover */
        }

        /* Content Section */
        .content {
            text-align: center;
            margin-top: 30px;
        }

        .content h2 {
            color: #2b6cb0;
            font-size: 24px;
        }

        .content p {
            color: #4a5568;
            font-size: 18px;
            margin-top: 10px;
            line-height: 1.6;
        }

        .content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
        <header>
        <h1>Online shop</h1>
        <nav>
            <ul>
                <li><a href="../home.php">Home</a></li>
                <li><a href="index.php">Produk</a></li>
                <li><a href="../costumer.php">costumer</a></li>
            </ul>
        </nav>
    </header>
</head>
<body>
    <div class="container">
        <h1>Pencatatan Barang</h1>
        <form method="POST" action="">
            <div>
                <label for="nama">Nama Barang:</label><br>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div>
                <label for="harga">Harga Barang:</label><br>
                <input type="number" id="harga" name="harga" required>
            </div>
            <div>
                <label for="stok">Stok Barang:</label><br>
                <input type="number" id="stok" name="stok" required>
            </div><br>
            <button type="submit" name="tambah">Tambah Barang</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barangManager->getBarang() as $barang): ?>
                    <tr>
                        <td><?= htmlspecialchars($barang['id']) ?></td>
                        <td><?= htmlspecialchars($barang['nama']) ?></td>
                        <td><?= htmlspecialchars($barang['harga']) ?></td>
                        <td><?= htmlspecialchars($barang['stock']) ?></td>
                        <td>
                            <a href="?hapus=<?= htmlspecialchars($barang['id']) ?>" class="btn-delete">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
