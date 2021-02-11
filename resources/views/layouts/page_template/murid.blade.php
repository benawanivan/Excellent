<form id="logout-form" action="{{ route('murid.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<!-- End Navbar -->
<div class="wrapper-sidebar d-flex align-items-stretch">
    <div class="" style="">
        <nav id="sidebar2" class="sidebar2" data-color="orange">

            <div class="logo">
                <a href="/" class="simple-text logo-normal">
                    {{ __('EXCELLENT STUDY CENTRE') }}
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class="@if ($activePage=='jadwalMurid' ) active @endif">
                        <a href="{{ route('murid.jadwal') }}">
                            <i class="now-ui-icons ui-1_calendar-60"></i>
                            <p>{{ __('Jadwal Bimbel') }}</p>
                        </a>
                    </li>
                    <li class="@if ($activePage=='soalMurid' ) active @endif">
                        <a href="{{ route('murid.soal') }}">
                            <i class="now-ui-icons education_paper"></i>
                            <p>{{ __('Database Soal') }}</p>
                        </a>
                    </li>
                    @if (Auth::user()->kelas == 6 or Auth::user()->kelas == 9 or Auth::user()->kelas == 12)
                        <li class="@if ($activePage=='tryoutMurid' ) active @endif">
                            <a href="{{ route('murid.tryout') }}">
                                <i class="now-ui-icons files_single-copy-04"></i>
                                <p>{{ __('Database Try Out') }}</p>
                            </a>
                        </li>
                    @endif
                    <li class="@if ($activePage=='profileMurid' ) active @endif">
                        <a href="{{ route('murid.profile') }}">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>{{ __('Profile') }}</p>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="custom-menu-sidebar">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                </div>
                {{-- <div class="navbar-wrapper">
                 <a class="navbar-brand" href="#pablo"><p>Selamat Datang {{ \Auth::user()->nama }}</p> </a>
             </div> --}}
                <a href="{{ route('murid.logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <p>Logout</p>
                </a>
        </nav>
        @yield('content')
    </div>
</div>
</div>
