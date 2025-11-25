@extends('admin.layout')

@section('content')

<h1>3'lü Kutular</h1>

<a href="{{ route('homeboxes.create') }}" class="btn btn-primary mb-3">Yeni Kutu Ekle</a>

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
            <th>Aktif mi?</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($boxes as $box)
        <tr>
            <td>{{ $box->id }}</td>
            <td>{{ $box->title }}</td>
            <td>{{ $box->text }}</td>
            <td>
                <a href="{{ route('homeboxes.edit', $box->id) }}" class="btn btn-warning btn-sm">Düzenle</a>

                <form action="{{ route('homeboxes.destroy', $box->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Silinsin mi?')">Sil</button>
                </form>
            </td>
             <td>
                @if ($box->is_active)
                    <span class="badge bg-success">Aktif</span>
                @else
                    <span class="badge bg-secondary">Pasif</span>
                @endif
            </td>
        </tr> 
        @endforeach
    </tbody>
</table>

@endsection
