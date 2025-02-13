@canRoles(['roles.index','permissions.index','users.index'])
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
        style="text-transform: uppercase">{{ __('security') }}</a>
    <div class="m-0 dropdown-menu fade-down">
        @canRole('roles.index')
        <a href="{{ route('roles.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('roles') }}</a>
        @endcanRole
        @canRole('permissions.index')
        <a href="{{ route('permissions.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('permissions') }}</a>
        @endcanRole
        @canRole('users.index')
        <a href="{{ route('users.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('users') }}</a>
        @endcanRole
    </div>
</div>
@endcanRoles
