@csrf
<h1 class="display-4">{{ $title }}</h1>

<div class="form-group">
	<label for="ndocument">N° documento</label>
	<input 	class="form-control bg-light shadow-sm
				@error('ndocument')
					is-invalid
				@else
					border-0
				@enderror"
			type="text"
			name="ndocument"
			placeholder="Ingrese n° documento"
			value="{{ old('ndocument', $document->ndocument) }}"
	>
	@error('ndocument')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="description">Descripción</label>
	<textarea 	class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror"
				name="description"
				rows="4"
				cols="50"
				placeholder="Ingrese descripción"
	>
		{{ old('description', $document->description) }}
	</textarea>

	@error('description')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

@if($type == 'new')
	<div class="form-group">
		<input 	class="form-control bg-light shadow-sm @error('archive') is-invalid  @else border-0 @enderror"
				type="file"
				name="archive"
				accept="application/pdf">

		@error('archive')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
@endif

<div class="form-group">
	<label for="user_id">Asignar usuario</label>
	<select name="user_id" id="user_id" class="form-control bg-light shadow-sm border-0">
		<option value="">Seleccione usuario</option>
		@forelse ($users as $user)
			<option value="{{ $user->id }}" {{ ($user->id == $document->user_id) ? 'selected="selected"' : '' }}>{{ $user->name.' '.$user->lastaname }}</option>
		@empty
			<option value="" disabled>Sin existencias</option>
		@endforelse
	</select>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>