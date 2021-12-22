<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tifunde') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link favicon rel="shortcut icon" href="{{ asset('images/tifunde-favicon.jpg') }}" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav>
          <div>
            <div class="card">
              <div class="p-menubar p-component">
                <div class="p-menubar-start">
                  <img alt="logo" src="{{ asset('images/tifunde-logo.png') }}" class="p-mr-2" height="50">
                </div>
                <a href="#" role="button" tabindex="0" class="p-menubar-button">
                  <i class="pi pi-bars"></i>
                </a>
                <ul class="p-menubar-root-list" role="menubar">
                  <li role="none" class="p-menuitem">
                    <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="true">
                      <span class="p-menuitem-text">Learn</span>
                      <span class="p-submenu-icon pi pi-angle-down"></span>
                    </a>
                    <ul class="p-submenu-list" role="menu">
                      <li role="none" class="p-menuitem">
                        <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="true">
                          <span class="p-menuitem-icon pi pi-fw pi-plus"></span>
                          <span class="p-menuitem-text">Courses</span>
                          <span class="p-submenu-icon pi pi-angle-right"></span>
                        </a>
                        <ul class="p-submenu-list" role="menu">
                          <li role="none" class="p-menuitem">
                            <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="false">
                              <span class="p-menuitem-icon pi pi-fw pi-bookmark"></span>
                              <span class="p-menuitem-text">Bookmark</span>
                            </a>
                          </li>
                          <li role="none" class="p-menuitem">
                            <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="false">
                              <span class="p-menuitem-icon pi pi-fw pi-video"></span>
                              <span class="p-menuitem-text">Video</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li role="none" class="p-menuitem">
                        <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="false">
                          <span class="p-menuitem-icon pi pi-fw pi-external-link"></span>
                          <span class="p-menuitem-text">Export</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li role="none" class="p-menuitem">
                    <a href="{{route('coach.create')}}" role="menuitem" class="p-menuitem-link" aria-haspopup="true">
                      <span class="p-menuitem-text">Become a coach</span>
                      <span class="p-submenu-icon pi pi-angle-down"></span>
                    </a>
                    <ul class="p-submenu-list" role="menu">
                      <li role="none" class="p-menuitem">
                        <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="false">
                          <span class="p-menuitem-icon pi pi-fw pi-align-left"></span>
                          <span class="p-menuitem-text">Become a Coach</span>
                        </a>
                      </li>
                      <li role="none" class="p-menuitem">
                        <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="false">
                          <span class="p-menuitem-icon pi pi-fw pi-align-right"></span>
                          <span class="p-menuitem-text">Find a Coach</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li role="none" class="p-menuitem">
                    <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="true">
                      <span class="p-menuitem-text">Job Board</span>
                      <span class="p-submenu-icon pi pi-angle-down"></span>
                    </a>
                    <ul class="p-submenu-list" role="menu">
                      <li role="none" class="p-menuitem">
                        <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="false">
                          <span class="p-menuitem-icon pi pi-fw pi-user-plus"></span>
                          <span class="p-menuitem-text">Post a job</span>
                        </a>
                      </li>
                      <li role="none" class="p-menuitem">
                        <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="false">
                          <span class="p-menuitem-icon pi pi-fw pi-user-minus"></span>
                          <span class="p-menuitem-text">Find a job</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li role="none" class="p-menuitem p-menuitem-active">
                    <a href="#" role="menuitem" class="p-menuitem-link" aria-haspopup="false">
                      <span class="p-menuitem-text">Pricing</span>
                    </a>
                  </li>
                </ul>
                @guest
                <div class="p-menubar-end">
                  <div>
                    <a href="/login" class="no-underline md:mx-4">
                      <button class="p-button p-component p-button-primary p-button-raised">
                        <span class="p-button-label p-c">Sign In</span>
                      </button>
                    </a>
                    <a href="/register" class="no-underline">
                      <button class="p-button p-component p-button-secondary p-button-raised">
                        <span class="p-button-label p-c">Sign Up</span>
                      </button>
                    </a>
                  </div>
                </div>
                @else
                <div class="p-menubar-end">
                <ul class="p-menubar-root-list" role="menubar">
                  <li role="none" class="p-menuitem">
                        <a id="navbarDropdown" class="p-menuitem-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->role_id }} <span class="caret"></span>
                        </a>
                  </li>
                  <li role="none" class="p-menuitem">
                          <a class="p-menuitem-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                      </li>
                      </ul>
                    </div>
                @endguest

              </div>
            </div>
          </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
