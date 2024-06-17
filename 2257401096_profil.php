<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .info {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Profil</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="nomor_hp">Nomor HP</label>
            <input type="text" id="nomor_hp" name="nomor_hp" required>
        </div>
        <div class="form-group">
            <button type="submit">Simpan</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = htmlspecialchars($_POST['nim']);
        $nama = htmlspecialchars($_POST['nama']);
        $kelas = htmlspecialchars($_POST['kelas']);
        $email = htmlspecialchars($_POST['email']);
        $nomor_hp = htmlspecialchars($_POST['nomor_hp']);

        echo "<div class='info'>";
        echo "<p><strong>NIM:</strong> $nim</p>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Kelas:</strong> $kelas</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Nomor HP:</strong> $nomor_hp</p>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>