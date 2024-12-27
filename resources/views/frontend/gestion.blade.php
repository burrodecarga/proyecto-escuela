@canRoles(['gestion.index','grados.index','courses.index'])
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
        style="text-transform: uppercase">{{ __('gestion') }}</a>
    <div class="m-0 dropdown-menu fade-down">
        @canRole('gestion.index')
        <a href="{{ route('gestion.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('school management') }}</a>
        @endcanRole
        @canRole('grados.index')
        <a href="{{ route('grados.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('degrees dictated') }}</a>
        @endcanRole
        @canRole('courses.index')
        <a href="{{ route('courses.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('course management') }}</a>
        @endcanRole
        @canRole('courses.index')
        <a href="{{ route('courses.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('test management') }}</a>
        @endcanRole
    </div>
</div>
@endcanRoles
