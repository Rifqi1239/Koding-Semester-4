<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - RNews</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body data-bs-theme="dark" class="d-flex align-items-center justify-content-center vh-100">

<div class="card shadow p-4" style="width: 100%; max-width: 400px;">
  
  <h3 class="text-center mb-3">Register</h3>
  <p class="text-center text-secondary">Buat akun baru</p>

  <form action="proses_register.php" method="POST">

    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Daftar</button>

  </form>

  <p class="text-center mt-3">
    Sudah punya akun? 
    <a href="login.php" class="text-decoration-none">Login</a>
  </p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>