@extends('layouts.main')
@extends('layouts.header')

@section('title', 'Edit Data')

@section('content')
<section id="intro">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col intro-info order-md-first order-last">
                <h2>Edit Transaksi</h2>

                <form method="POST" action="{{route('animal.update', $animal->id)}}" enctype="multipart/form-data">
                    {{method_field('PUT')}}
                    @include('layouts/form')
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection