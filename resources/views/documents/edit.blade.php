@extends('header')
@section('title', 'Editar documento')
@section('content')
<div class="container">
	<div class="d-flex justify-content-center">
		<div class="p-2">
            <form class="bg-withe shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('document.update', $document) }}"
			>
				{{-- agregar token oculto del usuario --}}
				@method('PATCH')
				{{-- <input type="hidden" name="_method" value="PATCH" /> --}}
				@include('documents._form', ['btnText' => 'Actualizar', 'title' => 'Editar documento', 'type' => 'edit'])
			</form>
        </div>
        <div class="p-2">
        	<iframe class="responsive-iframe" width="100%" height="100%" src="{{ Storage::url($document->archive) }}" frameborder="0"></iframe>
        </div>

	</div>
</div>
@endsection