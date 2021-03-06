@include('layouts.header1')

 <!-- Website Title -->
 <title>EXCELLENT STUDY CENTRE</title>

@include('layouts.header2')

@include('layouts.navbar')

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><span>Prestasi Siswa</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
    
    <div id="header" class="cards-2" style="background-color: #f16622; padding-top:2.5rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #fff">Prestasi</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>


  <!-- Header -->
  <header id="header" class="header" style="background-color: #fde2cd;padding-top:0rem;">
        <div class="header-content" style="padding-top:0rem;">
            <div class="container">
                <div class="row" style="text-align:left">
                    <div class="col-lg-12">
                        <div class="text-container" style="margin-left:3rem; margin-right:3rem;">
                            <h2 style="padding-bottom:1.5rem;">Selamat untuk siswa/i <span class="orange">EXCELLENT</span> yang sukses<br>memperoleh peringkat yang tinggi di sekolah!</h2>
                            <p class="p-large" style="text-align:justify">Sukses di sekolah adalah hasil perpaduan antara semangat belajar yang tinggi dan guru pembimbing yang tepat. Di EXCELLENT, perkembangan belajar siswa/i dipantau secara menyeluruh untuk memastikan hasil belajar yang optimal. Dengan sistem belajar semi-privat (1 guru = max 6 siswa) dan tim guru yang berpengalaman (lulusan S1 Mat/Fis/Kim), siswa dapat belajar sesuai kebutuhan masing-masing sehingga perkembangan belajar akan lebih cepat dibandingkan sistem belajar bimbel konvensional. Suasana belajar di EXCELLENT dirancang agar terasa menyenangkan, sehingga siswa akan merasa nyaman dan semakin semangat untuk belajar untuk mencapai prestasi yang gemilang.</p>
                            <p class="p-large" style="text-align:justify">Ingin berprestasi seperti mereka? Ayo gabung di EXCELLENT dan dapatkan nilai yang memuaskan serta peringkat tinggi di sekolahmu!</p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h4 style="text-align:center;">Nilai Raport Juni 2020:</h4>
                        </div>
                        <img class="img-fluid" src="images/siswaberprestasi.png">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h4 style="text-align:center;">Nilai Ujian Nasional 2019:</h4>
                        </div>
                        <img class="img-fluid" src="images/rank2.png">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h4 style="text-align:center;">Angelina Lim (XI Science Binus School) - Medali Perak dalam ajang internasional World Math Invitational July 2018, Seoul, Korea Selatan</h4>
                        </div>
                        <img class="img-fluid" src="images/angelinalim.jpg">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    
    @include('layouts.footer')