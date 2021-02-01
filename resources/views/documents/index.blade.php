@extends('header')
@section('title', 'Documentos')
@section('content')
<?php date_default_timezone_set('America/Santiago'); ?>
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Mantenedor documentos</h1>
		<a class="btn btn-primary" href="{{ route('document.create') }}" role="button">Añadir</a>
	</div>

	<ul class="list-group">
		@forelse ($docs as $doc)
			 <li class="text-secondary list-group-item border-0 mb-3 shadow-sm">
			 	<a class="d-flex justify-content-between align-items-center" href="{{ route('document.edit', $doc) }}">
			 		<span class="font-weight-bold">
			 			{{ $doc->ndocument }}
			 		</span>

			 		<span class="font-weight-bold">
			 			{{ $doc->description }}
			 		</span>

			 		<span class="text-black-50">
			 			{{ $doc->updated_at->diffForHumans() }}
			 		</span>



			 		<span class="links">
			 			<form method="POST" action="{{ route('document.destroy', $doc) }}">
							@csrf @method('DELETE')
							<button class="btn btn-danger">Eliminar</button>
						</form>
			 		</span>

			 		<span class="links">
			 			<a class="links" target="_blank" href="{{ Storage::url($doc->archive) }}">Ver pdf</a>
			 		</span>
			 	</a>


		 		{{-- @readfile("/storage/"{{ $doc->archive }});
		 		{{asset('storage/'.$doc->archive)}}
		 		<iframe width="400" height="400" src="{{asset('storage/'.$doc->archive)}}" frameborder="0"></iframe> --}}

		 		{{-- <a target="_blank" href="{{ route('document.getPDF', $doc->archive) }}">abrir documento</a> --}}
			 </li>
		@empty
			<li>No existen documentos</li>
		@endforelse
		{{ $docs->links() }}
	</ul>
</div>
@endsection