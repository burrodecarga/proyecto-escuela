@canRoles(['periodos.index','grados.index','courses.index'])
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
        style="text-transform: uppercase">{{ __('academy') }}</a>

    <div class="m-0 dropdown-menu fade-down">
        @canRole('periodos.index')
        <a href="{{ route('periodos.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('school periods') }}</a>
        @endcanRole
        @canRole('grados.index')
        <a href="{{ route('grados.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('school grades') }}</a>
        @endcanRole
        @canRole('courses.index')
        <a href="{{ route('courses.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('school subjects') }}</a>
        @endcanRole
    </div>
</div>
@endcanRoles
