@extends('admin.layout')

@section('content')

<h1>Hizmet Düzenle</h1>

<form action="{{ route('services.update', $service->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Görsel URL</label>
        <input type="text" name="image" class="form-control" value="{{ $service->image }}" required>
    </div>

    <div class="mb-3">
        <label>Başlık</label>
        <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
    </div>

    <div class="mb-3">
        <label>Açıklama</label>
        <textarea name="text" class="form-control" required>{{ $service->text }}</textarea>
    </div>

    <button class="btn btn-primary">Güncelle</button>

</form>

@endsection
