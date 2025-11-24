@extends('admin.layout')

@section('content')

<h1>Banner Düzenle</h1>

<form action="{{ route('banner.update', $banner->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Görsel URL</label>
        <input type="text" name="image" value="{{ $banner->image }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Başlık</label>
        <input type="text" name="title" value="{{ $banner->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Açıklama</label>
        <textarea name="description" class="form-control" required>{{ $banner->description }}</textarea>
    </div>

    <button class="btn btn-primary">Güncelle</button>

</form>

@endsection
