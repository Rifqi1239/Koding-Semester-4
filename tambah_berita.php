<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Tambah Berita</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.sidebar { width:250px; position:fixed; height:100vh; }
.content { margin-left:250px; }
</style>
</head>

<body data-bs-theme="dark">

<?php include 'sidebar.php'; ?>

<div class="content p-4">

<h3 class="mb-4">Tambah Berita</h3>

<form>

  <div class="mb-3">
    <label>Judul</label>
    <input type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label>Kategori</label>
    <select class="form-control">
      <option>Teknologi</option>
      <option>Bisnis</option>
    </select>
  </div>

  <div class="mb-3">
    <label>Isi Berita</label>
    <textarea class="form-control" rows="5"></textarea>
  </div>

  <button class="btn btn-primary">Simpan</button>

</form>

</div>
</body>
</html>