@extends('layout')

@section('content')

{{-- --------------------- --}}
{{-- BANNER BÖLÜMÜ         --}}
{{-- --------------------- --}}
@if($banner)
<section class="banner text-center mb-5" >
    <img src="{{ $banner->image }}" class="img-fluid mb-3" style="width: 80%; height: auto;" alt="">
    <h1>{{ $banner->title }}</h1>
    <p>{{ $banner->description }}</p>
</section>
@endif



{{-- --------------------- --}}
{{-- 3'LÜ KUTULAR          --}}
{{-- --------------------- --}}
@if($boxes->count() > 0)
<section class="boxes mb-5">
    <div class="row">
        @foreach ($boxes as $box)
        <div class="col-md-4 mb-3">
            <div class="p-3 border rounded shadow-sm">
                <h4>{{ $box->title }}</h4>
                <p>{{ $box->text }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif



{{-- --------------------- --}}
{{-- İSTATİSTİKLER         --}}
{{-- --------------------- --}}
@if($stats->count() > 0)
<section class="stats text-center mb-5">
    <div class="row">
        @foreach ($stats as $stat)
        <div class="col-md-3 mb-3">
            <h2>{{ $stat->value }}</h2>
            <p>{{ $stat->text }}</p>
        </div>
        @endforeach
    </div>
</section>
@endif



{{-- --------------------- --}}
{{-- EKİP BÖLÜMÜ           --}}
{{-- --------------------- --}}
@if($team->count() > 0)
<section class="team mb-5">
    <h2 class="text-center mb-4">Ekibimiz</h2>
    <div class="row">
        @foreach ($team as $member)
        <div class="col-md-3 text-center mb-4">
            <img src="{{ $member->image }}" class="rounded-circle mb-2" width="120" height="120">
            <h5>{{ $member->name }}</h5>
            <small>{{ $member->role }}</small>
        </div>
        @endforeach
    </div>
</section>
@endif



{{-- --------------------- --}}
{{-- HİZMETLER BÖLÜMÜ     --}}
{{-- --------------------- --}}
@if($services->count() > 0)
<section class="services mb-5">
    <h2 class="text-center mb-4">Neler Yapıyoruz?</h2>
    <div class="row">
        @foreach ($services as $service)
        <div class="col-md-4 mb-4">
            <div class="p-3 border rounded shadow-sm">
                <img src="{{ $service->image }}" class="img-fluid mb-3">
                <h4>{{ $service->title }}</h4>
                <p>{{ $service->text }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif

@endsection
