<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-success ">
    <div class="container px-4 px-lg-5 input-group rounded">
    <a class="navbar-brand text-light" href="{{ route('home') }}" style="font-size: 36px;">RentVehicle</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                <li class="nav-item "><a class="nav-link text-light active" aria-current="page" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('product.page') }}">Package</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('about') }}">About</a></li>

                @auth
                @if (auth()->user()->role == 'customer' or auth()->user()->role=='admin')
                <li class="nav-item"><a class="nav-link text-light" href="#">Profile</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('logout') }}">logout</a></li>
                    @endauth
                @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('registration') }}">Register</a></li>

                @endif


                <li class="nav-item align-items-center d-flex" >
            <i class="fas fa-sun"></i>
                <!-- Default switch -->
                <div class="ms-2 form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="themingSwitcher" />
                </div>
                    <i class="fas fa-moon"></i>
                    </li>
            </ul>
        </div>
    </div>

</nav>
