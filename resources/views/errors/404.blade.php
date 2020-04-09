@extends('layouts.main')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
<link href="{{ asset('css/404.css') }}" rel="stylesheet">

<div class="container mt-3">
    <header class="section-header">
        <h1>404</h1>
    </header>
    <div class="col wow fadeInUp pt-lg-0">
        <h5>ERROR</h4>
            <p>Maaf Halaman yang anda cari tidak ditemukan</p>
            <div class="img-center">
                <img src="{{asset('assets/image/404 cat.svg')}}" alt="">
            </div>
    </div>
</div>

@endsection