@extends('admin.layout')

@section('content')

<h1>Ekip Listesi</h1>

<a href="{{ route('team.create') }}" class="btn btn-primary mb-3">Yeni Ekip Üyesi Ekle</a>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>İsim</th>
            <th>Görev</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($team as $member)
        <tr>
            <td>{{ $member->id }}</td>
            <td><img src="{{ $member->image }}" width="80"></td>
            <td>{{ $member->name }}</td>
            <td>{{ $member->role }}</td>
            <td>
                <a href="{{ route('team.edit', $member->id) }}" class="btn btn-warning btn-sm">Düzenle</a>

                <form action="{{ route('team.destroy', $member->id) }}" method="POST" style="display:inline;">
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
