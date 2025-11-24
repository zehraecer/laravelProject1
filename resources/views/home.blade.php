@extends('layout')

@section('content')

{{-- ========================= --}}
{{-- HERO BANNER --}}
{{-- ========================= --}}
@if($banner)
<section class="py-5 text-center bg-light">
    <div class="container">
        <h1 class="display-4 fw-bold">{{ $banner->title }}</h1>
        <p class="lead text-muted">{{ $banner->subtitle }}</p>

        @if($banner->button_text)
            <a href="{{ $banner->button_link }}" class="btn btn-primary btn-lg px-4">
                {{ $banner->button_text }}
            </a>
        @endif
    </div>
</section>
@endif


{{-- ========================= --}}
{{-- 3’LÜ KUTULAR --}}
{{-- ========================= --}}
@if($boxes->count())
<section class="py-5">
    <div class="container">
        <div class="row text-center">

            @foreach($boxes as $box)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-4">

                    @if($box->icon)
                        <img src="{{ $box->icon }}" width="60" class="mb-3">
                    @endif

                    <h4>{{ $box->title }}</h4>
                    <p class="text-muted">{{ $box->text }}</p>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endif


{{-- ========================= --}}
{{-- HAKKIMIZDA KISA BÖLÜM --}}
{{-- ========================= --}}
@if($about)
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2 class="fw-bold">Biz Kimiz?</h2>
                <p class="text-muted">{{ $about->text }}</p>
                <a href="/hakkimizda" class="btn btn-outline-primary">Daha Fazla</a>
            </div>

            <div class="col-md-6">
                <img src="{{ $about->image }}"
                     class="img-fluid rounded shadow">
            </div>

        </div>
    </div>
</section>
@endif


{{-- ========================= --}}
{{-- İLETİŞİM BUTTON --}}
{{-- ========================= --}}
<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold">Bizimle İletişime Geçin</h2>
        <p class="text-muted mb-4">Sorularınız için bize ulaşabilirsiniz.</p>
        <a href="/iletisim" class="btn btn-success btn-lg">İletişim Sayfası</a>
    </div>
</section>

@endsection
