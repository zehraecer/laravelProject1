@extends('admin.layout')

@section('content')

<h1>İstatistik Düzenle</h1>

<form action="{{ route('stats.update', $stat->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Sayı (Value)</label>
        <input type="text" name="value" value="{{ $stat->value }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Metin (Text)</label>
        <input type="text" name="text" value="{{ $stat->text }}" class="form-control" required>
    </div>

    <button class="btn btn-primary">Güncelle</button>

</form>

@endsection
