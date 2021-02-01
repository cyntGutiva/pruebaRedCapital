@extends('header')
@section('title', 'Editar usuario')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<form class="bg-withe shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('user.update', $user) }}"
			>
				{{-- agregar token oculto del usuario --}}
				@method('PATCH')
				{{-- <input type="hidden" name="_method" value="PATCH" /> --}}
				@include('users._form', ['btnText' => 'Actualizar', 'title' => 'Editar usuario', 'textPassword' => false])
			</form>
		</div>
	</div>
</div>
@endsection