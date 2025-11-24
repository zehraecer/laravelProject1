@extends('admin.layout')

@section('content')

<h1>Ekip Üyesi Düzenle</h1>

<form action="{{ route('team.update', $member->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Fotoğraf URL</label>
        <input type="text" name="image" class="form-control" value="{{ $member->image }}" required>
    </div>

    <div class="mb-3">
        <label>İsim</label>
        <input type="text" name="name" class="form-control" value="{{ $member->name }}" required>
    </div>

    <div class="mb-3">
        <label>Görev</label>
        <input type="text" name="role" class="form-control" value="{{ $member->role }}" required>
    </div>

    <button class="btn btn-primary">Güncelle</button>

</form>

@endsection
