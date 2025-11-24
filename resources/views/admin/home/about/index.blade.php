@extends('admin.layout')

@section('content')

<h1>Anasayfa Hakkımızda Bölümü</h1>

@if ($about)
    <a href="{{ route('homeabout.edit', $about->id) }}" class="btn btn-warning mb-3">Düzenle</a>

    <div class="card p-3">
        <img src="{{ $about->image }}" class="mb-3" width="300">
        <p>{{ $about->text }}</p>
    </div>

@else
    <a href="{{ route('homeabout.create') }}" class="btn btn-primary mb-3">Yeni Hakkımızda Ekle</a>
@endif

@if (session('success'))
    <div class="alert alert-success mt-3">{{ session('success') }}</div>
@endif

@endsection
