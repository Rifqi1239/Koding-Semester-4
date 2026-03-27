<!doctype html>
<html lang="id">

<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - RNews</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
        }

        .content {
            margin-left: 250px;
        }
    </style>
</head>

<body data-bs-theme="dark">

    <!-- Sidebar -->
    <div class="sidebar bg-dark border-end p-3">

        <h4 class="text-center mb-4">RNews Admin</h4>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a href="admin.php" class="nav-link text-white">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="berita.php" class="nav-link text-white">
                    <i class="bi bi-newspaper me-2"></i> Kelola Berita
                </a>
            </li>

            <li class="nav-item">
                <a href="kategori.php" class="nav-link text-white">
                    <i class="bi bi-tags me-2"></i> Kategori
                </a>
            </li>

            <li class="nav-item">
                <a href="user.php" class="nav-link text-white">
                    <i class="bi bi-people me-2"></i> User
                </a>
            </li>

            <li class="nav-item mt-3">
                <a href="logout.php" class="nav-link text-danger">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
            </li>

        </ul>


    </div>


    <!-- Content -->
    <div class="content p-4">

        <!-- Topbar -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Dashboard</h3>
            <span>Welcome, Admin</span>
        </div>

        <!-- Cards -->
        <div class="row g-4 mb-4">

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5>Total Berita</h5>
                        <h2>120</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5>Total User</h5>
                        <h2>45</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5>Kategori</h5>
                        <h2>8</h2>
                    </div>
                </div>
            </div>

        </div>

        <!-- Table Berita -->
        <div class="card shadow">
            <div class="card-body">

                <h5 class="mb-3">Berita Terbaru</h5>

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Teknologi AI</td>
                            <td>Teknologi</td>
                            <td>2026-03-27</td>
                            <td>
                                <a href="edit_berita.php?id=1" class="btn btn-sm btn-warning">Edit</a>
                                <a href="hapus_berita.php?id=1" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin mau hapus berita ini?')">Hapus</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Startup Baru</td>
                            <td>Bisnis</td>
                            <td>2026-03-26</td>
                            <td>
                                <a href="edit_berita.php?id=1" class="btn btn-sm btn-warning">Edit</a>
                                <a href="hapus_berita.php?id=1" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin mau hapus berita ini?')">Hapus</a>
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>