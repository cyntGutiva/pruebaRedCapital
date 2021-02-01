@extends('header')
@section('title', 'Usuario | '.$user->name.' '.$user->lastname)
@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1>{{ $user->name.' '.$user->lastname }}</h1>

		<p class="text-secondary">  {{ $user->username }} </p>
		<p class="text-secondary">	{{ $user->email }} </p>
		<p class="text-black-50">	{{ $user->updated_at->diffForHumans() }}</p>
		<div class="d-flex justify-content-between align-items-conent">
			<a href="{{ route('user.index') }}">
				Regresar
			</a>
			<div class="btn-group btn-group-sm">
				<a class="btn btn-primary" href="{{ route('user.edit', $user) }}">Editar</a>
				<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-user').submit()">Eliminar</a>
			</div>
			<form class="d-none" id="delete-user" method="POST" action="{{ route('user.destroy', $user) }}">
				@csrf @method('DELETE')
			</form>
		</div>

	</div>


</div>
@endsection