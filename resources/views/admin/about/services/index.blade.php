@extends('admin.layout')

@section('content')

<h1>Hizmetler (Neler Yapıyoruz)</h1>

<a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Yeni Hizmet Ekle</a>

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
        @foreach ($services as $service)
        <tr>
            <td>{{ $service->id }}</td>
            <td><img src="{{ $service->image }}" width="100"></td>
            <td>{{ $service->title }}</td>
            <td>{{ $service->text }}</td>
            <td>
                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Düzenle</a>

                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
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
