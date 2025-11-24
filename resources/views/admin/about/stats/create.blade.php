@extends('admin.layout')

@section('content')

<h1>Yeni İstatistik Ekle</h1>

<form action="{{ route('stats.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Sayı (Value)</label>
        <input type="text" name="value" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Metin (Text)</label>
        <input type="text" name="text" class="form-control" required>
    </div>

    <button class="btn btn-success">Kaydet</button>

</form>

@endsection
