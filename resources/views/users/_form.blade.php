{{-- agregar token oculto del usuario --}}
	@csrf
	<h1 class="display-4">{{ $title }}</h1>

	<div class="form-group">
		<label for="username">{{ __('Username') }}</label>
		<input 	class="form-control bg-light shadow-sm
				@error('ndocument')
					is-invalid
				@else
					border-0
				@enderror"
				type="text"
				name="username"
				placeholder="Ingrese usuario"
				value="{{ old('username', $user->username) }}">

		@error('username')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group">
		<label for="name">{{ __('Name') }}</label>
		<input 	class="form-control bg-light shadow-sm
				@error('ndocument')
					is-invalid
				@else
					border-0
				@enderror"
			type="text"
			name="name"
			placeholder="Ingrese nombre"
			value="{{ old('name', $user->name) }}">

		@error('name')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group">
		<label for="lastname">{{ __('Lastname') }}</label>
		<input 	class="form-control bg-light shadow-sm
				@error('lastname')
					is-invalid
				@else
					border-0
				@enderror"
			type="text"
			name="lastname"
			placeholder="Ingrese apellido"
			value="{{ old('lastname', $user->lastname) }}">

		@error('lastname')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group">
		<label for="email">{{ __('Email') }}</label>
		<input 	class="form-control bg-light shadow-sm
				@error('email')
					is-invalid
				@else
					border-0
				@enderror"
			type="email"
			name="email"
			placeholder="Ingrese correo electrónico"
			value="{{  old('email', $user->email)}}">

		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group">
		<label for="phone">{{ __('Phone') }}</label>
		<input 	class="form-control bg-light shadow-sm
				@error('phone')
					is-invalid
				@else
					border-0
				@enderror"
			type="number"
			name="phone"
			placeholder="Ingrese n° celular"
			value="{{  old('phone', $user->phone) }}">

		@error('phone')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	@if($textPassword)
		<div class="form-group">
			<label for="password">{{ __('Password') }}</label>
			<input 	class="form-control bg-light shadow-sm
					@error('password')
						is-invalid
					@else
						border-0
					@enderror"
				type="password"
				name="password"
				placeholder="Ingrese contraseña"
				value="{{  old('password', $user->password) }}">

			@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
	@endif

	<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>