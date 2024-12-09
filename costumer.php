 <?php
// Memulai sesi
session_start();

// Inisialisasi data pelanggan jika belum ada
if (!isset($_SESSION['customers'])) {
    $_SESSION['customers'] = [];
}

// Menambahkan data pelanggan
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_customer'])) {
    $name = htmlspecialchars($_POST['name']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);

    // Validasi sederhana
    if (!empty($name) && !empty($contact) && !empty($email)) {
        $_SESSION['customers'][] = [
            'name' => $name,
            'contact' => $contact,
            'email' => $email,
        ];
    } else {
        $error = "Semua bidang harus diisi!";
    }
}

// Menghapus semua data pelanggan
if (isset($_POST['clear_customers'])) {
    $_SESSION['customers'] = [];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
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
        h1 {
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: #66afe9;
        }
        button {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
        button[type="submit"][name="clear_customers"] {
            background-color: #e74c3c;
        }
        button[type="submit"][name="clear_customers"]:hover {
            background-color: #c0392b;
        }
        .error {
            color: #e74c3c;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
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
<body>

    <h1>Manajemen Pelanggan</h1>

    <form method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama" required>

        <label for="contact">Kontak:</label>
        <input type="text" id="contact" name="contact" placeholder="Masukkan kontak" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email" required>

        <button type="submit" name="add_customer">Tambahkan Pelanggan</button>
        <button type="submit" name="clear_customers">Hapus Semua</button>
    </form>

    <?php if (isset($error)): ?>
        <p class="error"><?= $error; ?></p>
    <?php endif; ?>

    <h2>Daftar Pelanggan</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kontak</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($_SESSION['customers'])): ?>
                <?php foreach ($_SESSION['customers'] as $customer): ?>
                    <tr>
                        <td><?= htmlspecialchars($customer['name']); ?></td>
                        <td><?= htmlspecialchars($customer['contact']); ?></td>
                        <td><?= htmlspecialchars($customer['email']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" style="text-align:center;">Belum ada pelanggan yang ditambahkan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
 