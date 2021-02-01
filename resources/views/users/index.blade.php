@extends('header')
@section('title', 'Usuarios')
@section('content')
<?php date_default_timezone_set('America/Santiago'); ?>
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Mantenedor usuarios</h1>
		<a class="btn btn-primary" href="{{ route('user.create') }}" role="button">Añadir</a>
	</div>

	<ul class="list-group">
		@forelse ($users as $user)
			 <li class="text-secondary list-group-item border-0 mb-3 shadow-sm">
			 	<a class="d-flex justify-content-between alig-items-center" href="{{ route('user.show', $user) }}">
			 		<span class="font-weight-bold">
			 			{{ $user->username }}
			 		</span>
			 		<span class="text-black-50">
			 			{{ $user->created_at->diffForHumans() }}
			 		</span>
			 	</a>
			 </li>
		@empty
			<li class="text-secondary list-group-item border-0 mb-3 shadow-sm">
			No existen usuarios
		</li>
		@endforelse
		{{ $users->links() }}
	</ul>
</div>
@endsection