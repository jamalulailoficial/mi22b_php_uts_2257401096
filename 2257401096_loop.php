<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form loop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
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
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>From Perulangan</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="teks">Teks</label>
            <input type="text" id="teks" name="teks" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah Perulangan</label>
            <input type="number" id="jumlah" name="jumlah" min="1" required>
        </div>
        <div class="form-group">
            <button type="submit">Cetak</button>
        </div>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $teks = htmlspecialchars($_POST['teks']);
        $jumlah = intval($_POST['jumlah']);
        if ($jumlah > 0) {
            echo "<div class='result'>";
            for ($i = 1; $i <= $jumlah; $i++) {
                echo "<p>$teks</p>";
            }
            echo "</div>";
        } else {
            echo "<p style='color: red;'>Jumlah perulangan harus lebih dari 0.</p>";
        }
    }
    ?>

</div>

</body>
</html>
