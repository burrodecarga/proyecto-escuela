 @canRole('roles')
 <div class="nav-item dropdown">
     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('SECURITY') }}</a>
     <div class="m-0 dropdown-menu fade-down">
         <a href="{{ route('roles.index') }}" class="dropdown-item"
             style="text-transform: uppercase">{{ __('roles') }}</a>

         <a href="team.html" class="dropdown-item" style="text-transform: uppercase">{{ __('users') }}</a>
         <a href="testimonial.html" class="dropdown-item">Testimonial</a>
         <a href="404.html" class="dropdown-item">404 Page</a>
     </div>
 </div>
 @endcanRole