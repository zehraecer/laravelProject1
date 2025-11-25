@extends('admin.layout')

@section('content')

<h1>Anasayfa Banner</h1>

<a href="{{ route('homebanner.create') }}" class="btn btn-primary mb-3">Yeni Banner Ekle</a>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Görsel</th>
            <th>Başlık</th>
            <th>Alt Başlık</th>
            <th>İşlemler</th>
            <th>Aktif mi?</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($banners as $banner)
        <tr>
            <td>{{ $banner->id }}</td>
            <td><img src="{{ $banner->image }}" width="120"></td>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->subtitle }}</td>
            <td>
                <a href="{{ route('homebanner.edit', $banner->id) }}" class="btn btn-warning btn-sm">Düzenle</a>

                <form action="{{ route('homebanner.destroy', $banner->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Silinsin mi?')">
                        Sil
                    </button>
                </form>

            </td>
            <td>
                @if ($banner->is_active)
                    <span class="badge bg-success">Aktif</span>
                @else
                    <span class="badge bg-secondary">Pasif</span>
                @endif
            </td>

        </tr>
        @endforeach
    </tbody>
    

@endsection
