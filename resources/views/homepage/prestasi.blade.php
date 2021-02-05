@include('layouts.header1')

 <!-- Website Title -->
 <title>EXCELLENT STUDY CENTRE</title>

@include('layouts.header2')

@include('layouts.navbar')

    <div id="header" class="cards-2" style="background-color: #f16622; padding-top:7rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #fff">Prestasi</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>


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


  <!-- Header -->
  <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row" style="text-align:center">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>Apa rasanya mendapat<br><span class="orange">NILAI BAGUS</span><br>saat ujian?</h1>
                            <p class="p-large">Bangga? Pastinya! Ayo bergabung bersama kami dan dapatkan nilai yang memuaskan dan peringkat tinggi di sekolahmu!</p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-fluid" src="images/rank.png">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-fluid" src="images/rank2.png">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


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

    
    @include('layouts.footer')