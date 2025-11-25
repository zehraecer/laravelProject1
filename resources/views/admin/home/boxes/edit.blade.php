@extends('admin.layout')

@section('content')

<h1>Kutu Düzenle</h1>

<form action="{{ route('homeboxes.update', $box->id) }}" method="POST">
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

    <div class="mb-3">
        <label>Icon</label>
        <input type="text" name="icon" value="{{ $box->icon }}" class="form-control" required>
    </div>

     <div class="mb-3 form-check">
        <input type="checkbox" name="is_active" value="1" class="form-check-input" id="is_active"
         {{ $box->is_active ? 'checked' : '' }}>
        <label class="form-check-label" for="is_active">Bu kutu aktif olsun</label>
    </div>

    <button class="btn btn-primary">Güncelle</button>

</form>

@endsection
