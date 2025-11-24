@extends('admin.layout')

@section('content')

<h1>Yeni Banner Ekle</h1>

<form action="{{ route('homebanner.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Görsel URL</label>
        <input type="text" name="image" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Başlık</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Alt Başlık</label>
        <input type="text" name="subtitle" class="form-control">
    </div>

    <div class="mb-3">
        <label>Buton Metni</label>
        <input type="text" name="button_text" class="form-control">
    </div>

    <div class="mb-3">
        <label>Buton Linki</label>
        <input type="text" name="button_link" class="form-control">
    </div>

    <button class="btn btn-success">Kaydet</button>

</form>

@endsection
