 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <!-- <a class="navbar-brand logo-image" href="{{ url('/') }}" style="max-width:270px">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Excellent">
        </a> -->
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Excellent" style="max-width:115px;padding-top:1px;padding-bottom:1px;padding-right:10px;"> 
        </a>
        <h3 style="margin-top:0.5rem;color:#393939; font-style: normal;font-variant-ligatures: normal;font-variant-caps: normal;font-variant-numeric: normal;font-variant-east-asian: normal;font-weight: 550;font-stretch: normal;font-size: 13px;line-height: 1rem;font-family: Raleway, sans-serif;">Bimbingan Belajar<br>SD-SMP-SMA (Mat, Fis, Kim)<br>Online & Offline</h3>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="justify-content: flex-end;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Program</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/reguler')}}"><span class="item-text">Reguler</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ url('/platinum')}}"><span class="item-text">Platinum</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ url('/tanyapr')}}"><span class="item-text">Tanya PR Online</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Mengapa Kami</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/profil') }}"><span class="item-text">Profil</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ url('/lokasi') }}"><span class="item-text">Lokasi Cabang</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ url('/keunggulan') }}"><span class="item-text">Keunggulan</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ url('/prestasi') }}"><span class="item-text">Prestasi Siswa</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/#testimoni"><span class="item-text">Testimoni</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Log in</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('murid.login')}}"><span class="item-text">Siswa</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{route('ortu.login')}}"><span class="item-text">Orangtua/Wali</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{route('guru.login')}}"><span class="item-text">Pengajar</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="https://campsite.bio/daftar.excellent">Daftar Sekarang</a>
                </li>
            </ul>
            <a class="btn-solid-reg" href="https://wa.link/tz7cd4"><i class="fab fa-whatsapp" style="line-height:0;padding-right:2px"></i> 083822837999</a>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->