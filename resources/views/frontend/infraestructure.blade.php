 @canRole('roles')
 <div class="nav-item dropdown">
     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
         style="text-transform: uppercase">{{ __('infrastructure') }}</a>
     <div class="m-0 dropdown-menu fade-down">
         <a href="{{ route('schools.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('schools') }}</a>
         <a href="{{ route('sedes.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('sedes') }}</a>
     </div>
 </div>
 @endcanRole
