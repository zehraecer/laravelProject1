@extends('admin.layout')

@section('content')

<h1>Yeni Ekip Üyesi Ekle</h1>

<form action="{{ route('team.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Fotoğraf URL</label>
        <input type="text" name="image" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>İsim</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Görev</label>
        <input type="text" name="role" class="form-control" required>
    </div>

    <button class="btn btn-success">Kaydet</button>

</form>

@endsection
