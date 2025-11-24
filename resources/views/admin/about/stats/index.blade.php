@extends('admin.layout')

@section('content')

<h1>İstatistikler</h1>

<a href="{{ route('stats.create') }}" class="btn btn-primary mb-3">Yeni İstatistik Ekle</a>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Sayı</th>
            <th>Metin</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stats as $stat)
        <tr>
            <td>{{ $stat->id }}</td>
            <td>{{ $stat->value }}</td>
            <td>{{ $stat->text }}</td>
            <td>
                <a href="{{ route('stats.edit', $stat->id) }}" class="btn btn-warning btn-sm">Düzenle</a>

                <form action="{{ route('stats.destroy', $stat->id) }}" method="POST" style="display:inline;">
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
