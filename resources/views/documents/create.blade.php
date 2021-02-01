@extends('header')
@section('title', 'Nuevo documento')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<form class="bg-withe shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('document.store') }}"
				enctype="multipart/form-data"
			>
				@include('documents._form', ['btnText' => 'Añadir', 'title' => 'Nuevo documento', 'type' => 'new'])
			</form>
		</div>
	</div>

</div>
@endsection