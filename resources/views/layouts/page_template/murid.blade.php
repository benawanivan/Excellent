
<form id="logout-form" action="{{ route('murid.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<div class="sidebar" data-color="orange">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
        <div class="logo">
          <a href="/" class="simple-text logo-normal">
              {{ __('EXCELLENT STUDY CENTRE') }}
          </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
            <li class="@if ($activePage == 'home') active @endif">
                <a href="/dashboard">
                <i class="now-ui-icons design_app"></i>
                <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'profile') active @endif">
                <a href="/profile">
                <i class="now-ui-icons users_single-02"></i>
                <p>{{ __('Profile') }}</p>
                </a>
            </li>
            
            </ul>
        </div>
    </div>
<div class="main-panel">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">{{ $namePage }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            
                
            
                <a href="{{ route('murid.logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
          
          
        </div>
    </div>
</nav>
<div class="panel-header">
</div>
<!-- End Navbar -->

    @yield('content')
    {{-- @include('layouts.footer') --}}
</div>