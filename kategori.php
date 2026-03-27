<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Kategori</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.sidebar { width:250px; position:fixed; height:100vh; }
.content { margin-left:250px; }
</style>
</head>

<body data-bs-theme="dark">

<?php include 'sidebar.php'; ?>

<div class="content p-4">

<h3 class="mb-4">Kategori</h3>

<form class="mb-3">
  <input type="text" class="form-control" placeholder="Nama kategori">
  <button class="btn btn-primary mt-2">Tambah</button>
</form>

<ul class="list-group">
  <li class="list-group-item bg-dark text-white">Teknologi</li>
  <li class="list-group-item bg-dark text-white">Bisnis</li>
</ul>

</div>
</body>
</html>