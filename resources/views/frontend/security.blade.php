@canRoles(['roles','permissions','users'])
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
        style="text-transform: uppercase">{{ __('security') }}</a>
    <div class="m-0 dropdown-menu fade-down">
        @canRole('roles')
        <a href="{{ route('roles.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('roles') }}</a>
        @endcanRole
        @canRole('permissions')
        <a href="{{ route('permissions.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('permissions') }}</a>
        @endcanRole
        @canRole('users')
        <a href="{{ route('users.index') }}" class="dropdown-item"
            style="text-transform: uppercase">{{ __('users') }}</a>
        @endcanRole
    </div>
</div>
@endcanRoles
