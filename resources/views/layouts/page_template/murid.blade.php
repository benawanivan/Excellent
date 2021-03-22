<form id="logout-form" action="{{ route('murid.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<!-- End Navbar -->
<div class="wrapper-sidebar d-flex align-items-stretch">
    <div class="" style="">
        <nav id="sidebar2" class="sidebar2" data-color="orange">
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <div class="logo" style="text-align:left;padding-left:1.5rem;padding-right:1.5rem;margin-top:-22px">
                        <a class="simple-text logo-normal">
                            <i class="now-ui-icons users_single-02" style="margin-right:12px"></i>
                            <b>{{ \Auth::user()->nama }}</b>
                            <small>Siswa</small>
                        </a>
                    </div>
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
        <nav class="navbar"style="position:fixed;z-index: 100;">
            <div class="container-fluid">
                <div class="custom-menu-sidebar">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                </div>
                <div class="navbar-wrapper">
                    <a href="#" class="logoNavbar">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Excellent"
                            style="max-width:115px;padding-top:1px;padding-bottom:1px;padding-right:10px;">
                    </a>
                </div>
                <a href="{{ route('murid.logout') }}" class="btnLogout"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <p>Logout</p>
                </a>
            </div>
        </nav>
        <div class="container-fluid" style="margin-top: 100px">
        @yield('content')
        </div>
    </div>
</div>
</div>
