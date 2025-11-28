<?php
session_start();
$logged_in = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #edf1f5;
        }
        .navbar-custom {
            background: linear-gradient(135deg, #0d6efd, #5ea3ff);
        }
        .dashboard-wrapper {
            max-width: 650px;
            margin: 100px auto;
        }
        .welcome-card {
            border-radius: 18px;
        }
        .gradient-box {
            background: linear-gradient(135deg, #0d6efd, #5ea3ff);
            padding: 35px;
            border-radius: 18px 18px 0 0;
            color: white;
            text-align: center;
        }
        .content-box {
            padding: 40px;
            background: white;
            border-radius: 0 0 18px 18px;
            text-align: center;
        }
        .content-box p {
            font-size: 18px;
            color: #666;
        }
        .btn-custom {
            padding: 12px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">DASHBOARD</a>

        <div class="d-flex">

            <?php if ($logged_in) { ?>
                <a href="logout.php" class="btn btn-light fw-bold px-3">Logout</a>

            <?php } else { ?>
                <a href="login.php" class="btn btn-light fw-bold px-3">Login</a>
            <?php } ?>

        </div>
    </div>
</nav>

<div class="dashboard-wrapper">
    <div class="welcome-card shadow">

        <div class="gradient-box">
            <?php if ($logged_in) { ?>
                <h2 class="fw-bold">Selamat Datang 👋</h2>
                <h4><?php echo $_SESSION['nama']; ?></h4>
            <?php } else { ?>
                <h2 class="fw-bold">Akses Ditolak 🚫</h2>
                <h4>Anda belum login</h4>
            <?php } ?>
        </div>

        <div class="content-box">

            <?php if ($logged_in) { ?>

                <p>
                    Anda berhasil login dan sekarang berada di halaman dashboard.
                </p>

                <a href="logout.php" class="btn btn-danger btn-custom w-100 mt-3">Logout</a>

            <?php } else { ?>

                <p>
                    Untuk mengakses dashboard, silakan login terlebih dahulu.
                </p>

                <a href="login.php" class="btn btn-primary btn-custom w-100 mt-3">Login</a>

            <?php } ?>

        </div>

    </div>
</div>

</body>
</html>
