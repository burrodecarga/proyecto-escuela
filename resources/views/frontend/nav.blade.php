<nav class="p-0 bg-white shadow navbar navbar-expand-lg navbar-light sticky-top">
    <a href="index.html" class="px-4 navbar-brand d-flex align-items-center px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>José Luis Garzón</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="p-4 navbar-nav ms-auto p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>

            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="courses.html" class="nav-item nav-link">Courses</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="m-0 dropdown-menu fade-down">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <div class="nav-item dropdown">
            @auth
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    {{ __('EXIT') }}</a>
            @else
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    {{ __('ENTER') }}</a>
            @endauth
            <div class="m-0 dropdown-menu fade-down">
                @if (Route::has('login'))
                    @auth
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            @method('POST')
                            <button type="submit" @click.prevent="$root.submit();" class="dropdown-item">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                        <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                    @endauth
                @endif
            </div>

        </div>
        <a href="" class="py-4 btn btn-primary px-lg-5 d-none d-lg-block">Join Now<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>