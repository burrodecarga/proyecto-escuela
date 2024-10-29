 @canRole('roles')
 <div class="nav-item dropdown">
     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
         style="text-transform: uppercase">{{ __('security') }}</a>
     <div class="m-0 dropdown-menu fade-down">
         <a href="{{ route('roles.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('roles') }}</a>
         <a href="{{ route('permissions.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('permissions') }}</a>
         <a href="{{ route('users.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('users') }}</a>
     </div>
 </div>
 @endcanRole
