@extends('admin.layout')

@section('content')

<h1>Hakkımızda Bölümünü Düzenle</h1>

<form action="{{ route('homeabout.update', $about->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Görsel URL</label>
        <input type="text" name="image" class="form-control" value="{{ $about->image }}" required>
    </div>

    <div class="mb-3">
        <label>Metin</label>
        <textarea name="text" class="form-control" required>{{ $about->text }}</textarea>
    </div>

    <button class="btn btn-primary">Güncelle</button>

</form>

@endsection
