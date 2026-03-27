<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>User</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.sidebar { width:250px; position:fixed; height:100vh; }
.content { margin-left:250px; }
</style>
</head>

<body data-bs-theme="dark">

<?php include 'sidebar.php'; ?>

<div class="content p-4">

<h3 class="mb-4">Manajemen User</h3>

<table class="table table-dark">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Role</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Admin</td>
      <td>admin@mail.com</td>
      <td>Admin</td>
    </tr>
  </tbody>
</table>

</div>
</body>
</html>