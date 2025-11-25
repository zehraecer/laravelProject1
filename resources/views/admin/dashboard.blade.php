@extends('admin.layout')

@section('content')

<h3 class="mb-4">Hoş Geldin, {{ Auth::user()->name ?? 'Ziyaretçi'}}</h3>

<div class="row">

    <div class="col-md-4">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Banner Sayısı</h5>
                <p class="card-text fs-4">{{ \DB::table('home_banners')->count() }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">About Kutuları</h5>
                <p class="card-text fs-4">{{ \DB::table('about_boxes')->count() }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Ekip Üyeleri</h5>
                <p class="card-text fs-4">{{ \DB::table('about_teams')->count() }}</p>
            </div>
        </div>
    </div>

</div>

@endsection
