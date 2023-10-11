<div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
        <img width="100" src="{{ url('assets/images/logo.svg') }}" alt="logo">
    </a>
    <!-- ./ Logo -->
    <div class="page-title">@yield('page-title')</div>
    {{-- <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..."
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form> --}}
    <div class="ms-auto">
        {{-- <ul class="navbar-nav justify-content-end">
            <li class="nav-item ms-3"> --}}
                @yield('header-action-button')
            {{-- </li>
        </ul> --}}
    </div>
    <!-- Header mobile buttons -->
    {{-- <div class="header-mobile-buttons">
        @yield('header-action-button')
        <a href="#" class="search-bar-btn">
            <i class="bi bi-search"></i>
        </a>
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div> --}}
    <!-- ./ Header mobile buttons -->
</div>
