@extends('admin.layout')

@section('content')

<h1>Yeni Kutu Ekle</h1>

<form action="{{ route('homeboxes.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Başlık</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Açıklama</label>
        <textarea name="text" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Icon</label>
        <input type="text" name="icon" class="form-control" required>
    </div>

     <div class="mb-3 form-check">
        <input type="checkbox" name="is_active" value="1" class="form-check-input" id="is_active">
        <label class="form-check-label" for="is_active">Bu kutu aktif olsun</label>
    </div>

    <button class="btn btn-success">Kaydet</button>

</form>

@endsection
