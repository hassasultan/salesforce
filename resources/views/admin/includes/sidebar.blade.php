<ul class="accordion accordion-flush position-relative h-100 mt-4" id="accordionFlushExample">
    <li class="nav-item {{ Route::is('admin.home') ? 'active active-item' : '' }}">
        <a href="{{route('admin.home')}}"><i class="fa fa-home me-3 fs-4" aria-hidden="true"></i>Home Page</a>
    </li>

    <li class="w-100 logout_nav">
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out me-3 fs-4" aria-hidden="true"></i> Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
    </ul>
