@extends('admin.layout')

@section('content')

<h1>Kutu Düzenle</h1>

<form action="{{ route('boxes.update', $box->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Başlık</label>
        <input type="text" name="title" value="{{ $box->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Açıklama</label>
        <textarea name="text" class="form-control" required>{{ $box->text }}</textarea>
    </div>

    <button class="btn btn-primary">Güncelle</button>

</form>

@endsection
