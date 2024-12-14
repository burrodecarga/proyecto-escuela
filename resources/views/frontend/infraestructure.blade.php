@canRoles(['schools','sedes','rooms','resources'])
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
        style="text-transform: uppercase">{{ __('infrastructure') }}</a>
    <div class="m-0 dropdown-menu fade-down">
        @canRole('schools')
        <a href="{{ route('schools.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('schools') }}</a>
        @endcanRole
        @canRole('sedes')
        <a href="{{ route('sedes.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('sedes') }}</a>
        @endcanRole
        @canRole('rooms')
        <a href="{{ route('rooms.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('rooms') }}</a>
        @endcanRole
        @canRole('resources')
        <a href="{{ route('resources.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('resources') }}</a>
        @endcanRole
    </div>
</div>
@endcanRoles
