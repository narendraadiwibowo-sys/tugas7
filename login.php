<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "admin" && $password === "admin123") {
        $_SESSION['user_id'] = 1;
        $_SESSION['nama'] = "Admin";
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f0f2f5;
        }
        .login-card {
            max-width: 450px;
            margin: 120px auto;
            border-radius: 15px;
        }
        .header-box {
            background: linear-gradient(135deg, #0d6efd, #5ea3ff);
            padding: 25px;
            border-radius: 15px 15px 0 0;
            text-align: center;
            color: white;
        }
        .content-box {
            padding: 30px;
        }
    </style>
</head>
<body>

<div class="login-card shadow bg-white">

    <div class="header-box">
        <h2 class="mb-0">Login</h2>
    </div>

    <div class="content-box">

        <?php if ($error) { ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>

        <form method="POST">

            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" name="login" class="btn btn-primary w-100 py-2">
                Login
            </button>

        </form>
    </div>

</div>

</body>
</html>
