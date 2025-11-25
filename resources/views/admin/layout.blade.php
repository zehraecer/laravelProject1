<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #1f2937;
            position: fixed;
            top: 0;
            left: 0;
            padding: 25px;
            color: white;
        }
        .sidebar a {
            display:block;
            padding:10px 15px;
            margin-bottom:5px;
            color:#e5e7eb;
            text-decoration:none;
            border-radius:5px;
        }
        .sidebar a:hover {
            background:#374151;
        }
        .content {
            margin-left:260px;
            padding:25px;
        }
        .topbar {
            background: white;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h4 class="mb-4">Admin Panel</h4>

        <a href="/admin">Dashboard</a>

        <strong>Home</strong>
        <a href="{{ route('homebanner.index') }}">Banner</a>
        <a href="{{ route('homeboxes.index') }}">Kutular</a>
        <a href="{{ route('homeabout.index') }}">Hakkında</a>

        <strong class="mt-3 d-block">About</strong>
        <a href="{{ route('banner.index') }}">Banner</a>
        <a href="{{ route('boxes.index') }}">3'lü Kutular</a>
        <a href="{{ route('stats.index') }}">İstatistikler</a>
        <a href="{{ route('team.index') }}">Ekip</a>
        <a href="{{ route('services.index') }}">Hizmetler</a>

        <strong class="mt-3 d-block">Hesap</strong>
        <a href="{{ route('admin.logout') }}">Çıkış Yap</a>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="topbar">
            <h5 class="m-0">Yönetim Paneli</h5>
        </div>

        @yield('content')
    </div>

</body>
</html>
