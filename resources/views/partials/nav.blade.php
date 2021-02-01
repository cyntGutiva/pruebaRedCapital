
<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<a class="navbar-brand" href="{{ route('welcome') }}"> {{ config('app.name') }}</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @auth
    		<ul class="nav nav-pills">
    			<li class="nav-item">
    				<a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">Inicio</a>
    			</li>

    			<li class="nav-item">
    				<a class="nav-link {{ setActive('user.*') }}" href="{{ route('user.index') }}">Usuarios</a>
    			</li>

    			<li class="nav-item">
    				<a class="nav-link {{ setActive('document.*') }}" href="{{ route('document.index') }}">Documentos</a>
    			</li>

    		</ul>
        @endauth

		<ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
	</div>
</nav>