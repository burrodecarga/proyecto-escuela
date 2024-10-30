 @canRole('roles')
 <div class="nav-item dropdown">
     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
         style="text-transform: uppercase">{{ __('academy') }}</a>
     <div class="m-0 dropdown-menu fade-down">
         <a href="{{ route('grados.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('grados') }}</a>
     </div>
 </div>
 @endcanRole
