 <div class="nav-item dropdown">
     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
         style="text-transform: uppercase">{{ __('academy') }}</a>
     <div class="m-0 dropdown-menu fade-down">
         <a href="{{ route('periodos.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('school periods') }}</a>
         <a href="{{ route('grados.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('grados') }}</a>

         <a href="{{ route('courses.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('courses') }}</a>
     </div>
 </div>
