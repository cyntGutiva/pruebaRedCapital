@extends('header')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 text-primary text-center"> Red capital - proyecto</h1>

            <div class="col-8">
                <img class="mb-4 mx-auto d-block" src="/img/home.svg" alt="Proyecto en desarrollo">
            </div>

            <a class="btn btn-lg btn-block btn-primary" href="{{ route('document.index') }}">Documentos</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('user.index') }}">Usuarios</a>


        </div>
    </div>
</div>
@endsection
