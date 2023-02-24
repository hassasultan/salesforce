<nav class="navbar navbar-expand-xl fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.html"><img claass="w-100" src="img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  @if(Route::Is('home')) active @endif" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::Is('about')) active @endif" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::Is('contact')) active @endif" href="{{ route('contact') }}">Contact</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="./blog.html">Blog</a>
          </li> --}}
        </ul>
        <ul class="right navbar-nav ms-auto">
          {{-- <li class="nav-item-right">
            <a class="nav-link-right" href="#">Login / Sign Up</a>
          </li> --}}
          <li class="nav-item-right">
            <a class="nav-link-right btn-fill" href="#">Start Today</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
