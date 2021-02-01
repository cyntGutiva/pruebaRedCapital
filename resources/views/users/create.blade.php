@extends('header')
@section('title', 'Nuevo usuario')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<form class="bg-withe shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('user.store') }}"
			>
				@include('users._form', ['btnText' => 'Añadir', 'title' => 'Nuevo usuario', 'textPassword' => true])
			</form>
		</div>
	</div>
</div>
@endsection