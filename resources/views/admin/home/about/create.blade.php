@extends('admin.layout')

@section('content')

<h1>Yeni Hakkımızda İçeriği Ekle</h1>

<form action="{{ route('homeabout.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Görsel URL</label>
        <input type="text" name="image" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Metin</label>
        <textarea name="text" class="form-control" required></textarea>
    </div>

    <button class="btn btn-success">Kaydet</button>

</form>

@endsection
