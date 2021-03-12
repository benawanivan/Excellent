<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
 <!-- End Navbar -->
 <div class="wrapper-sidebar d-flex align-items-stretch">
    <div class="" style="">
     <nav id="sidebar2" class="sidebar2" data-color="orange">

        <div class="logo" style="text-align:left;padding-left:1.5rem;padding-right:1.5rem">
            <a class="simple-text logo-normal">
                <i class="now-ui-icons users_single-02" style="margin-right:12px"></i>
                <b>{{ \Auth::user()->nama }}</b>
                <small>Admin</small>
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="@if ($activePage == 'soalAdmin') active @endif">
                    <a href="{{route('admin.soal')}}">
                    <i class="now-ui-icons education_paper"></i>
                    <p>{{ __('Database Soal') }}</p>
                    </a>
                </li>
                <li class="@if ($activePage == 'dataMurid') active @endif">
                    <a href="{{route('admin.dataMurid')}}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>{{ __('Data Siswa') }}</p>
                    </a>
                </li>
                <li class="@if ($activePage == 'dataGuru') active @endif">
                    <a href="{{route('admin.dataGuru')}}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>{{ __('Data Guru') }}</p>
                    </a>
                </li>
                <li class="@if ($activePage == 'dataCabang') active @endif">
                    <a href="{{route('admin.dataCabang')}}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>{{ __('Data Cabang') }}</p>
                    </a>
                </li>
                <li class="@if ($activePage == 'dataMapel') active @endif">
                    <a href="{{route('admin.dataMapel')}}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>{{ __('Data Mapel') }}</p>
                    </a>
                </li>
                <li class="@if ($activePage == 'laporan') active @endif">
                    <a href="{{route('admin.laporan')}}">
                    <i class="now-ui-icons education_paper"></i>
                    <p>{{ __('Laporan') }}</p>
                    </a>
                </li>
                @if (AUTH::user()->master)
                <li class="@if ($activePage == 'dataadmin') active @endif">
                    <a href="{{route('admin.dataAdmin')}}">
                    <i class="now-ui-icons education_paper"></i>
                    <p>{{ __('Data Admin') }}</p>
                    </a>
                </li>
                @endif
              
              </ul>
          </div>
     </nav>
    </div>
     <!-- Page Content  -->
     <div id="content" class="">
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
                <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <p>Logout</p>
                </a>
            </div>
        </nav>
         @yield('content')
    </div>
    