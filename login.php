<?php
session_start();

$error = false;

// cek apakah form disubmit
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // akun dummy
    if ($email === "admin@mail.com" && $password === "123") {

        $_SESSION['login'] = true;
        $_SESSION['user'] = "Admin";

        header("Location: admin.php");
        exit;

    } else {
        $error = true;
    }
}
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - RNews</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body data-bs-theme="dark" class="d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">

        <h3 class="text-center mb-3">Login</h3>
        <p class="text-center text-secondary">Masuk ke akun RNews</p>

        <!-- ERROR MESSAGE -->
        <?php if ($error): ?>
            <div class="alert alert-danger text-center">
                Email atau password salah!
            </div>
        <?php endif; ?>

        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>

        </form>

        <p class="text-center mt-3">
            Belum punya akun?
            <a href="register.php" class="text-decoration-none">Daftar</a>
        </p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>