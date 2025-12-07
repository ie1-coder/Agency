<!-- Fixed Top Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <!-- Brand Logo -->
        <a class="navbar-brand text-uppercase fw-bold" href="{{ route('home') }}"
        style="color: #feb536f3;
        letter-spacing: 2px;
        font-family: 'Montserrat', sans-serif;
        font-size: 1.75rem;
        text-shadow: 1px 1px 2px #000000bd;
        text-transform: uppercase;
        text-decoration: none;">
        Creative Agency
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
            Menu <i class="fas fa-bars ms-1"></i>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}"
                style="color:
                #feb536f3;
                text-decoration: none;
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 1px;
                font-family: 'Montserrat', sans-serif;
                text-shadow: 1px 2px 2px #000000bd;
                text-emphasis: hover;
                ">Services</a></li>
                <li class="nav-item"><a
                class="nav-link
                {{ request()->routeIs('portfolio') ? 'active' : '' }}"
                aria-current="{{ request()->routeIs('portfolio') ? 'page' : 'false' }}"
                href="{{ route('portfolio') }}"
                style="color: #feb536f3;
                text-decoration: none;
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 1px;
                font-family: 'Montserrat', sans-serif;
                text-shadow: 1px 2px 2px #000000bd;
                text-emphasis: hover;">Portfolio</a></li>
                <li class="nav-item">
                    <a
                    class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                    aria-current="{{ request()->routeIs('about') ? 'page' : 'false' }}"
                    href="{{ route('about') }}"
                    style="color: #feb536f3;
                        text-decoration: none;
                        text-transform: uppercase;
                        font-weight: bold;
                        letter-spacing: 1px;
                        font-family: 'Montserrat', sans-serif;
                        text-shadow: 1px 2px 2px #000000bd;
                        text-emphasis: hover;">About
                    </a></li>
                <li class="nav-item">
                    <a
                    class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}"
                    aria-current="{{ request()->routeIs('team') ? 'page' : 'false' }}"
                    href="{{ route('team') }}"
                    style="color: #feb536f3;
                        text-decoration: none;
                        text-transform: uppercase;
                        font-weight: bold;
                        letter-spacing: 1px;
                        font-family: 'Montserrat', sans-serif;
                        text-shadow: 1px 2px 2px #000000bd;
                        text-emphasis: hover;">Team</a></li>
                <li class="nav-item">
                    <a
                    class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                    aria-current="{{ request()->routeIs('contact') ? 'page' : 'false' }}"
                    href="{{ route('contact') }}"
                    style="color: #feb536f3;
                        text-decoration: none;
                        text-transform: uppercase;
                        font-weight: bold;
                        letter-spacing: 1px;
                        font-family: 'Montserrat', sans-serif;
                        text-shadow: 1px 2px 2px #000000bd;
                        text-emphasis: hover;">Contact</a></li>

            </ul>
        </div>
    </div>
</nav>
