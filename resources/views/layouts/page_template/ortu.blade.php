<form id="logout-form" action="{{ route('ortu.logout') }}" method="POST" style="display: none;">
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
                <li class="@if ($activePage == 'jadwalOrtu') active @endif">
                    <a href="{{route('ortu.jadwal')}}">
                    <i class="now-ui-icons ui-1_calendar-60"></i>
                    <p>{{ __('Jadwal Bimbel') }}</p>
                    </a>
                </li>
                <li class="@if ($activePage == 'editprofil') active @endif">
                    <a href="{{route('ortu.profil')}}">
                    <i class="now-ui-icons users_circle-08"></i>
                    <p>{{ __('Edit Profil') }}</p>
                    </a>
                </li>
              
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
             <a href="{{ route('ortu.logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <p>Logout</p>
                </a>
         </nav>
         @yield('content')
     </div>
 </div>
 </div>
