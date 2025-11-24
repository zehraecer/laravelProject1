@extends('admin.layout')

@section('content')

<h1>Banner Listesi</h1>

<a href="{{ route('banner.create') }}" class="btn btn-primary mb-3">Yeni Banner Ekle</a>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Görsel</th>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($banners as $banner)
        <tr>
            <td>{{ $banner->id }}</td>
            <td><img src="{{ $banner->image }}" width="100"></td>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->description }}</td>
            <td>
                <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-warning btn-sm">Düzenle</a>

                <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Silinsin mi?')">Sil</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
