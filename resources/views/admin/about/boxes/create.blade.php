@extends('admin.layout')

@section('content')

<h1>Yeni Kutu Ekle</h1>

<form action="{{ route('boxes.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Başlık</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Açıklama</label>
        <textarea name="text" class="form-control" required></textarea>
    </div>

    <button class="btn btn-success">Kaydet</button>

</form>

@endsection
