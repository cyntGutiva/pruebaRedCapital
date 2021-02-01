@extends('header')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 text-primary text-center"> Página no encontrada :(</h1>

            <div class="col-8">
                <img class="mb-4 mx-auto d-block" src="/img/404.svg" alt="Error">
            </div>

            <a class="btn btn-lg btn-block btn-primary" href="{{ route('home') }}">Regresar</a>
        </div>
    </div>
</div>
@endsection
