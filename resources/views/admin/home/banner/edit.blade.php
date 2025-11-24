@extends('admin.layout')

@section('content')

<h1>Banner Düzenle</h1>

<form action="{{ route('homebanner.update', $banner->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Görsel URL</label>
        <input type="text" name="image" class="form-control" value="{{ $banner->image }}" required>
    </div>

    <div class="mb-3">
        <label>Başlık</label>
        <input type="text" name="title" class="form-control" value="{{ $banner->title }}" required>
    </div>

    <div class="mb-3">
        <label>Alt Başlık</label>
        <input type="text" name="subtitle" class="form-control" value="{{ $banner->subtitle }}">
    </div>

    <div class="mb-3">
        <label>Buton Metni</label>
        <input type="text" name="button_text" class="form-control" value="{{ $banner->button_text }}">
    </div>

    <div class="mb-3">
        <label>Buton Linki</label>
        <input type="text" name="button_link" class="form-control" value="{{ $banner->button_link }}">
    </div>

    <button class="btn btn-primary">Güncelle</button>

</form>

@endsection
