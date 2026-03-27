<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Kelola Berita</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.sidebar { width:250px; height:100vh; position:fixed; }
.content { margin-left:250px; }
</style>
</head>

<body data-bs-theme="dark">

<?php include 'sidebar.php'; ?>

<div class="content p-4">

  <div class="d-flex justify-content-between mb-4">
    <h3>Kelola Berita</h3>
    <a href="tambah_berita.php" class="btn btn-primary">+ Tambah</a>
  </div>

  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>AI Modern</td>
        <td>Teknologi</td>
        <td>
          <a href="edit_berita.php" class="btn btn-warning btn-sm">Edit</a>
          <button class="btn btn-danger btn-sm">Hapus</button>
        </td>
      </tr>
    </tbody>
  </table>

</div>
</body>
</html>