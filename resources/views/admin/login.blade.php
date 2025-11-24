<!DOCTYPE html>
<html>
<head>
    <title>Admin Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 450px;">
    <div class="card p-4 shadow">
        <h3 class="mb-3 text-center">Admin Giriş</h3>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Şifre</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">Giriş Yap</button>
        </form>
    </div>
</div>

</body>
</html>
