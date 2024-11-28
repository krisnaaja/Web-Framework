<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@isset($title) {{$title}} @else Manajemen Inventori @endisset</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      overflow-x: hidden;
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      background-color: #343a40;
      color: #fff;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      display: block;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h3 class="text-center py-3">Manajemen Inventori</h3>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('user') }}">User</a>
    <a href="{{ route('kategori.barang') }}">Kategori Barang</a>
    <a href="{{ route('barang') }}">Barang</a>
    <a href="{{ route('laporan') }}">Laporan</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <div class="container my-4">
        <h1 class="fst-italic pb-2">@isset($title) {{$title}} @else Manajemen Inventori @endisset</h1>
        <hr class="py-2">
        @yield('content', '')
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>