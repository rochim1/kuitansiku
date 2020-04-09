@extends('layouts.main')
@extends('layouts.header')

@section('title', 'Detail Data')

@section('content')

<section id="intro">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col intro-info order-md-first order-last">
                <h2>Daftar Transaksi</h2>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$animal->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Eat=> {{$animal->eat}}</h6>
                        <p class="card-text">Location => {{$animal->location}}</p>
                    </div>
                </div>
            </div>
        </div>
</section>


@endsection