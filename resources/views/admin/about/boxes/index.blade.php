@extends('admin.layout')

@section('content')

<h1>3'lü Kutular</h1>

<a href="{{ route('boxes.create') }}" class="btn btn-primary mb-3">Yeni Kutu Ekle</a>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($boxes as $box)
        <tr>
            <td>{{ $box->id }}</td>
            <td>{{ $box->title }}</td>
            <td>{{ $box->text }}</td>
            <td>
                <a href="{{ route('boxes.edit', $box->id) }}" class="btn btn-warning btn-sm">Düzenle</a>

                <form action="{{ route('boxes.destroy', $box->id) }}" method="POST" style="display:inline;">
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
