<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 30px;
        }
        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        .menu {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .menu a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 4px;
        }
        .menu a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .content {
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="menu">
        <a href="?page=beranda">Beranda</a>
        <a href="?page=login">Login</a>
        <a href="?page=loop">Loop</a>
        <a href="?page=profil">Profil</a>
    </div>

    <div class="content">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'beranda':
                    echo "<h2>Beranda Saya</h2><p>Selamat datang di halaman beranda saya.</p>";
                    break;
                case 'login':
                    include '2257401096_login.php';
                    break;
                case 'loop':
                    include '2257401096_loop.php';
                    break;
                case 'profil':
                    include '2257401096_profil.php';
                    break;
                default:
                    echo "<h2>404</h2><p>Halaman tidak ditemukan.</p>";
            }
        } else {
            echo "<h2>Beranda</h2><p>Selamat datang di halaman beranda.</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
